<?php

include "../../backend/config/_connect.php";

$editState = false;

// SET FIELDS BLANK
if (isset($_POST["new"])){
    $editState = false;
}

// ADD
if (isset($_POST["add"])){
    $vaxID = $_POST["vax-id"];
    $vaxName = $_POST["vax-name"];
    $vaxDisease = $_POST["vax-disease"];
    $vaxRecipient = $_POST["vax-recipient"];
    $vaxOnHand = $_POST["vax-onhand"];
    $vaxReserved = 0;
    $vaxAvailable = $vaxOnHand;
    $vaxStatus = "In Stock";
    if ($vaxAvailable == 0){
        $vaxStatus = "Out of Stock";
    }

    $sql = "INSERT INTO `vaccine_tbl` (`VaccineID`, `VaccineName`, `DiseasePrevented`, `RecipientType`, `QtyOnHand`, `QtyReserved`, `QtyAvailable`, `VaccineStatus`) VALUES ('$vaxID', '$vaxName', '$vaxDisease', '$vaxRecipient', '$vaxOnHand', '$vaxReserved', '$vaxAvailable', '$vaxStatus')";
    mysqli_query($conn, $sql);

    header("location: inventory.php");
}

// RETRIEVE
$sql = "SELECT * FROM `vaccine_tbl`";
$vaccines = mysqli_query($conn, $sql);

// SEARCH
if (isset($_GET["search"])){
    $search = $_GET["searchdata"];
    $sql = "SELECT * FROM `vaccine_tbl` WHERE `VaccineID` LIKE '$search%' OR `VaccineName`LIKE '$search%' OR `DiseasePrevented` LIKE '$search%' OR `RecipientType` LIKE '$search%' OR `QtyOnHand` LIKE '$search%' OR `QtyAvailable` LIKE '$search%' OR `QtyReserved` LIKE '$search%' OR `VaccineStatus` LIKE '$search%'";
    
    $vaccines = mysqli_query($conn, $sql);
}

// FILTER
$selectedStatus = "";
if (isset($_GET["filter"])){
    $selectedStatus = $_GET["status"];
    
    $sql = "SELECT * FROM `vaccine_tbl` WHERE `VaccineStatus` = '$selectedStatus'";
    $vaccines = mysqli_query($conn, $sql);

    if ($selectedStatus == ""){
        $sql = "SELECT * FROM `vaccine_tbl`";
        $vaccines = mysqli_query($conn, $sql);
    }
}

// FILL IN FIELDS WITH EXISTING RECORDS
if (isset($_GET["edit"])){
    $editState = true;
    $vaxID = $_GET["edit"];

    $sql = "SELECT `VaccineID`, `QtyOnHand` FROM `vaccine_tbl` WHERE `VaccineID`='$vaxID'";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

    $vaxID = $row["VaccineID"];
    $vaxOnHand = $row["QtyOnHand"];
}

// UPDATE
if (isset($_POST["update"])){
    $vaxID = $_POST["vax-id"];
    $vaxAdd = $_POST["vax-add"];
    $vaxOnHand = $_POST["vax-onhand"] + $vaxAdd;
    
    $sql = "SELECT `QtyAvailable` FROM `vaccine_tbl` WHERE `VaccineID`='$vaxID'";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

    $vaxAvailable = $row["QtyAvailable"] + $vaxAdd;

    $sql = "UPDATE `vaccine_tbl` SET `QtyOnHand`='$vaxOnHand', `QtyAvailable`='$vaxAvailable' WHERE `VaccineID`='$vaxID'";

    mysqli_query($conn, $sql);
    header("location: inventory.php");
}

// GET ID OF VACCINE TO BE DISCONTINUED
if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
}

// DISCONTINUE
if (isset($_POST["disable"])){
    $vaxID = $_POST["id"];

    $sql = "UPDATE `vaccine_tbl` SET `VaccineStatus`='Discontinued' WHERE `VaccineID`='$vaxID'";

    mysqli_query($conn, $sql);
    header("location: inventory.php");
}

?>