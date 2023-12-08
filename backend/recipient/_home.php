<?php
include("../../backend/config/_connect.php");

$username = $_SESSION["recipient-username"];
$_SESSION["recipientType"] = "";

// CHECK IF THE RECIPIENT HAS ALREADY SUBMITTED A FORM
$sqlNB = mysqli_query($conn, "SELECT `Username` FROM `newborn_tbl` WHERE `Username`='$username'");
$sqlP = mysqli_query($conn, "SELECT `Username` FROM `pregnant_tbl` WHERE `Username`='$username'");

if (mysqli_num_rows($sqlNB) > 0){
    $_SESSION["submitted"] = true;
    $_SESSION["recipientType"] = "Newborn";
}
else if (mysqli_num_rows($sqlP) > 0){
    $_SESSION["submitted"] = true;
    $_SESSION["recipientType"] = "Pregnant";
}
else {
    $_SESSION["submitted"] = false;
}

// SET WHICH DB DATA WILL BE RETRIEVED
switch($_SESSION["recipientType"]){
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
    default:
        $view = "";
}

// RETRIEVE UPCOMING SCHEDULES
$upcomingSched = mysqli_query($conn, "SELECT `SchedID`, `VaccineID`, DATE_FORMAT(`SchedDate`, '%W %M %e %Y') AS `SchedDate` FROM `$view` WHERE `Username`='$username' AND `SchedStatus`='Scheduled' AND `SchedDate` > DATE(NOW())");

// RETRIEVE MISSED SCHEDULES
$missedSched = mysqli_query($conn, "SELECT `SchedID`, `VaccineID`, DATE_FORMAT(`SchedDate`, '%W %M %e %Y') AS `SchedDate` FROM `$view` WHERE `Username`='$username' AND `SchedStatus`!='Done' AND `SchedDate` < DATE(NOW())");

// CONFIRM BOX
if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
}

// REQUEST RESCHEDULE
if (isset($_POST["resched"])){
    $schedID = $_POST["id"];
    mysqli_query($conn, "UPDATE `$tbl` SET `SchedStatus`='To Reassign' WHERE `SchedID`='$schedID'");
    header("location: home.php");
}

// CANCEL SCHEDULE
if (isset($_POST["delete"])){
    $schedID = $_POST["id"];

    mysqli_query($conn, "DELETE FROM `$tbl` WHERE `SchedID`='$schedID'");
    header("location: home.php");
}
?>