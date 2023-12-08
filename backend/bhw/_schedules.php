<?php

include "../../backend/config/_connect.php";;

$editState = false;
$vaxID = "";
$selectedStatus = "";
$schedStatus = "";

// IDENTIFY SQL VALUES ACCORDING TO RECIPIENT TYPE
function recipientSQL($recipientType){
    switch ($recipientType){
        case "Pregnant":
            $view = "psched_view";
            $tbl = "psched_tbl";
            $id = "PregnantID";
            break;
        case "Newborn":
            $view = "nbsched_view";
            $tbl = "nbsched_tbl";
            $id = "NewbornID";
            break;
    }
    $recipient = array($view, $tbl, $id);
    return $recipient;
}

// IDENTIFY WHAT THE NEXT IMMUNIZATION STATUS SHOULD BE
function immunizationStatus($conn, $recipientType, $schedID){
    $sql = "SELECT COUNT(`VaccineID`) AS VaccineCount FROM `vaccine_tbl` WHERE `RecipientType`='$recipientType' AND `VaccineStatus`!='Discontinued'";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    $vaxCount = $row["VaccineCount"];

    switch ($recipientType){
        case "Pregnant":
            $sql = "SELECT `PregnantID` FROM `psched_tbl` WHERE `SchedID` = '$schedID'";
            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            $recipientID = $row["PregnantID"];
            $sql = "SELECT COUNT(`SchedID`) AS ImmunizationCount FROM `psched_tbl` WHERE `PregnantID`='$recipientID' AND `SchedStatus`='Done'";
            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 
            $iCount = $row["ImmunizationCount"];
            break;
        case "Newborn":
            $sql = "SELECT `NewbornID` FROM `nbsched_tbl` WHERE `SchedID` = '$schedID'";
            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            $recipientID = $row["NewbornID"];
            $sql = "SELECT COUNT(`SchedID`) AS ImmunizationCount FROM `nbsched_tbl` WHERE `NewbornID`='$recipientID' AND `SchedStatus`='Done'";
            $row = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 
            $iCount = $row["ImmunizationCount"];
            break;
    }
    if($iCount == ($vaxCount - 1)){
        return "FI";
    }
    else {
        return "PI";
    }
    
}

// SET FIELDS BLANK
if (isset($_GET["new"])){
    $editState = false;
    $recipientID = $_GET["new"];
    $recipientType = $_GET["recipient-type"];
}

// ADD
if (isset($_POST["add-btn"])){
    $recipientType = $_POST["recipient-type"];
    $schedDate = $_POST["sched-date"];
    $recipientID = (int) filter_var($_POST["recipient-id"], FILTER_SANITIZE_NUMBER_INT);
    $vaxID = $_POST["vax-id"];
    $schedStatus = $_POST["sched-status"];
    list ($view, $tbl, $id) = recipientSQL($recipientType);

    $sql = "SELECT * FROM `$tbl` WHERE `$id`='$recipientID' AND `VaccineID`='$vaxID'";
    $checkDuplicate = mysqli_query($conn, $sql);
    if (mysqli_num_rows($checkDuplicate) > 0){
        echo "<script type='text/javascript'>alert('Oops! You already administered $vaxID to that recipient.');</script>";
    }
    else {
        $sql = "INSERT INTO `$tbl`(`SchedDate`, `$id`, `VaccineID`, `SchedStatus`) VALUES ('$schedDate','$recipientID','$vaxID','$schedStatus'); UPDATE `vaccine_tbl` SET QtyReserved=(QtyReserved+1), QtyAvailable=(QtyAvailable-1) WHERE `VaccineID`='$vaxID';";
        mysqli_multi_query($conn, $sql);
        header("location: schedules.php");
    }
}

// RETRIEVE
$sql = "SELECT * FROM `nbsched_tbl` ORDER BY `SchedStatus` DESC, `SchedDate`";
$nbSched = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `psched_tbl` ORDER BY `SchedStatus` DESC, `SchedDate`";
$pSched = mysqli_query($conn, $sql);

// SEARCH
if (isset($_GET["p-search"])){
    $search = $_GET["p-data"];
    $sql = "SELECT * FROM `psched_tbl` WHERE CONCAT('P', `PregnantID`) LIKE '$search' OR `VaccineID` LIKE '$search%' OR `SchedStatus` LIKE '$search%'";
    
    $pSched = mysqli_query($conn, $sql);
}

if (isset($_GET["nb-search"])){
    $search = $_GET["nb-data"];
    $sql = "SELECT * FROM `nbsched_tbl` WHERE CONCAT('NB', `NewbornID`) LIKE '$search' OR `VaccineID` LIKE '$search%' OR `SchedStatus` LIKE '$search%'";
    
    $nbSched = mysqli_query($conn, $sql);
}

// FILTER
$selectedPStatus = "";
if (isset($_GET["p-filter"])){
    $selectedPStatus = $_GET["p-status"];
    
    $sql = "SELECT * FROM `psched_tbl` WHERE `SchedStatus`='$selectedPStatus' ORDER BY `SchedDate`";
    $pSched = mysqli_query($conn, $sql);

    if ($selectedPStatus == ""){
        $sql = "SELECT * FROM `psched_tbl`";
        $pSched = mysqli_query($conn, $sql);
    }   
}

$selectedNBStatus = "";
if (isset($_GET["nb-filter"])){
    $selectedNBStatus = $_GET["nb-status"];
    
    $sql = "SELECT * FROM `nbsched_tbl` WHERE `SchedStatus`='$selectedNBStatus' ORDER BY `SchedDate`";
    $nbSched = mysqli_query($conn, $sql);

    if ($selectedNBStatus == ""){
        $sql = "SELECT * FROM `nbsched_tbl`";
        $nbSched = mysqli_query($conn, $sql);
    }
}

// FILL IN FIELDS WITH EXISTING RECORDS
if (isset($_GET["edit"])){
    $editState = true;
    $schedID = $_GET["edit"];
    $recipientType = $_GET["recipient-type"];
    list ($view, $tbl, $id) = recipientSQL($recipientType);
    
    $result = mysqli_query($conn, "SELECT * FROM `$tbl` WHERE `SchedID`='$schedID'");
    $row = mysqli_fetch_array($result);
    
    $schedID = $row["SchedID"];
    $schedDate = $row["SchedDate"];
    $recipientID = $row[$id];
    $vaxID = $row["VaccineID"];
    $schedStatus = $row["SchedStatus"];
}

// UPDATE
if (isset($_POST["update-btn"])){
    $schedID = $_POST["sched-id"];
    $schedDate = $_POST["sched-date"];
    $schedStatus = $_POST["sched-status"];
    $recipientType = $_POST["recipient-type"];
    list ($view, $tbl, $id) = recipientSQL($recipientType);

    mysqli_query($conn, "UPDATE `$tbl` SET `SchedDate`='$schedDate', `SchedStatus`='$schedStatus' WHERE `SchedID`=$schedID");
    header("location: schedules.php");
}

// MARK AS DONE
$immunizationStatus = "";
if (isset($_GET["done"])){
    $schedID = $_GET["done"];
    $recipientType = $_GET["recipient-type"];
    $immunizationStatus = immunizationStatus($conn, $recipientType, $schedID);
    list ($view, $tbl, $id) = recipientSQL($recipientType);

    $sql = "SELECT * FROM `$tbl` WHERE `SchedID`='$schedID'";
    $sched = mysqli_fetch_array(mysqli_query($conn, $sql));
    if ($sched["SchedStatus"] != "Done"){
        $sql = "UPDATE `$view` SET `SchedStatus`='Done' WHERE `SchedID`='$schedID'; UPDATE `$view` SET `ImmunizationStatus`='$immunizationStatus' WHERE `SchedID`='$schedID'; UPDATE `$view` SET QtyReserved=(QtyReserved-1), QtyOnHand=(QtyOnHand-1) WHERE `SchedID`='$schedID';";
        mysqli_multi_query($conn, $sql);
        header("location: schedules.php");
    }
    else {
        echo "<script>alert('Already marked as done!')</script>";
    }
}

// GET ID OF SCHEDULE TO BE CANCELLED
if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
    $recipientType = $_GET["recipient-type"];
}

// CANCEL
if (isset($_POST["disable"])){
    $schedID = $_POST["id"];
    $recipientType = $_POST["recipient-type"];
    list ($view, $tbl, $id) = recipientSQL($recipientType);

    $sql = "SELECT * FROM `$tbl` WHERE `SchedID`='$schedID'";
    $sched = mysqli_fetch_array(mysqli_query($conn, $sql));
    if ($sched["SchedStatus"] != "Done"){
        $sql = "UPDATE `$view` SET QtyReserved=(QtyReserved-1), QtyAvailable=(QtyAvailable+1) WHERE `SchedID`='$schedID'; DELETE FROM `$tbl` WHERE `SchedID`='$schedID';";
        mysqli_multi_query($conn, $sql);
        header("location: schedules.php");
    }
    else {
        echo "<script>alert('Cannot cancel a schedule that has been marked as done!'); window.location.href='schedules.php';</script>";
    }

}

?>