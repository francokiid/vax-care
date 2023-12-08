<?php

include "../../backend/bhw/_pregnant.php";;

$editState = false;

// SET FIELDS BLANK
if (isset($_POST["new"])){
    $editState = false;
}

// ADD
if (isset($_POST["add"])){
    $username = $_POST["username"];
    $phoneNum = $_POST["phone-num"];
    $password = $_POST["password"];
    $accRole = "Recipient";
    $accStatus = "Active";

    $pLName = $_POST["last-name"];
    $pFName = $_POST["first-name"];
    $pMName = $_POST["middle-name"];
    $pLMP = $_POST["lmp"];
    $pEDD = $_POST["edd"];
    $pTrimester = $_POST["trimester"];
    $pAddress = $_POST["address"];
    $pStatus = "NI";

    $sql = "INSERT INTO `account_tbl` (`Username`, `PhoneNumber`, `Password`, `AccountRole`, `AccountStatus`) VALUES ('$username', '$phoneNum', '$password', '$accRole', '$accStatus'); INSERT INTO `pregnant_tbl` (`LastName`, `FirstName`, `MiddleName`, `LMP`, `EDD`, `Trimester`, `Address`, `ImmunizationStatus`, `Username`) VALUES ('$pLName','$pFName', '$pMName', '$pLMP', '$pEDD', '$pTrimester', '$pAddress', '$pStatus', '$username');";
    mysqli_multi_query($conn, $sql);
    header("location: pregnant.php");
}

// RETRIEVE
$sql = "SELECT * FROM `paccount_view` ORDER BY `PregnantID` DESC";
$pregnant = mysqli_query($conn, $sql);

// SEARCH
if (isset($_GET["search"])){
    $search = $_GET["search-data"];
    $sql = "SELECT * FROM `paccount_view` WHERE CONCAT('P', `PregnantID`) LIKE '$search%' OR CONCAT(`LastName`, ', ', `FirstName`, ' ', `MiddleName`) LIKE '$search%' OR `LastName` LIKE '$search%' OR `FirstName` LIKE '$search%' OR `MiddleName` LIKE '$search%' OR `LMP` LIKE '$search%' OR `EDD` LIKE '$search%' OR `Trimester` LIKE '$search%' OR `Address` LIKE '$search%' OR `Username` LIKE '$search%'";
    
    $pregnant = mysqli_query($conn, $sql);
}

// FILTER
$selectedPStatus = "";
if (isset($_GET["filter"])){
    $selectedPStatus = $_GET["status-filter"];
    
    $sql = "SELECT * FROM `paccount_view` WHERE `ImmunizationStatus` = '$selectedPStatus'";
    $pregnant = mysqli_query($conn, $sql);

    if ($selectedPStatus == ""){
        $sql = "SELECT * FROM `paccount_view`";
        $pregnant = mysqli_query($conn, $sql);
    }
}

// FILL IN FIELDS WITH EXISTING RECORDS
if (isset($_GET["edit"])){
    $editState = true;
    $pID = $_GET["edit"];

    $sql = "SELECT * FROM `paccount_view` WHERE `paccount_view`.`PregnantID`='$pID'";

    $results = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($results);

    $pID = $row["PregnantID"];
    $pLName = $row["LastName"];
    $pFName = $row["FirstName"];
    $pMName = $row["MiddleName"];
    $pLMP = $row["LMP"];
    $pEDD = $row["EDD"];
    $pTrimester = $row["Trimester"];
    $pAddress = $row["Address"];
    $pStatus = $row["ImmunizationStatus"];
    $username = $row["Username"];
    $phoneNum = $row["PhoneNumber"];
    $password = $row["Password"];
}

// UPDATE
if (isset($_POST["update"])){
    $pID = $_POST["p-id"];
    $pLName = $_POST["last-name"];
    $pFName = $_POST["first-name"];
    $pMName = $_POST["middle-name"];
    $pLMP = $_POST["lmp"];
    $pEDD = $_POST["edd"];
    $pTrimester = $_POST["trimester"];
    $pAddress = $_POST["address"];
    $pGuardian = $_POST["guardian"];
    $username = $_POST["username"];
    $phoneNum = $_POST["phone-num"];
    $password = $_POST["password"];

    $sql = "UPDATE `pregnant_tbl` SET `LastName`='$pLName', `FirstName`='$pFName', `MiddleName`='$pMName', `LMP`='$pLMP', `EDD`='$pEDD', `Trimester`='$pTrimester', `Address`='$pAddress' WHERE `PregnantID`='$pID'; UPDATE `pregnant_tbl` SET `Username`='$username', `PhoneNumber`='$phoneNum', `Password`='$password' WHERE `Username`='$username';";

    mysqli_multi_query($conn, $sql);
    header("location: pregnant.php");
}

?>