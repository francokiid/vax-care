<?php

include "../../backend/config/_connect.php";

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

    $nbLName = $_POST["last-name"];
    $nbFName = $_POST["first-name"];
    $nbMName = $_POST["middle-name"];
    $nbDOB = $_POST["dob"];
    $nbSex = $_POST["sex"];
    $nbAddress = $_POST["address"];
    $nbGuardian = $_POST["guardian"];
    $nbStatus = "NI";

    $sql = "SELECT * FROM `account_tbl` WHERE `Username`='$username'";
    $checkDuplicate = mysqli_query($conn, $sql);
    if (mysqli_num_rows($checkDuplicate) > 0){
        echo "<script type='text/javascript'>alert('Oops! Username $username already exists.');</script>";
    }
    else {
        $sql = "INSERT INTO `account_tbl` (`Username`, `PhoneNumber`, `Password`, `AccountRole`, `AccountStatus`) VALUES ('$username', '$phoneNum', '$password', '$accRole', '$accStatus'); INSERT INTO `newborn_tbl` (`LastName`, `FirstName`, `MiddleName`, `DOB`, `Sex`, `Address`, `Guardian`, `ImmunizationStatus`, `Username`) VALUES ('$nbLName', '$nbFName', '$nbMName', '$nbDOB', '$nbSex', '$nbAddress', '$nbGuardian', '$nbStatus', '$username');";
        mysqli_multi_query($conn, $sql);
        header("location: newborns.php");
    }
}

// RETRIEVE
$sql = "SELECT * FROM `nbaccount_view` ORDER BY `NewbornID` DESC";
$newborns = mysqli_query($conn, $sql);

// SEARCH
if (isset($_GET["search"])){
    $search = $_GET["search-data"];
    $sql = "SELECT * FROM `nbaccount_view` WHERE CONCAT('NB', `NewbornID`) LIKE '$search%' OR CONCAT(`LastName`, ', ', `FirstName`, ' ', `MiddleName`) LIKE '$search%' OR `LastName` LIKE '$search%' OR `FirstName` LIKE '$search%' OR `MiddleName` LIKE '$search%' OR `DOB` LIKE '$search%' OR `Sex` LIKE '$search%' OR `Address` LIKE '$search%' OR `Guardian` LIKE '$search%' OR `Username` LIKE '$search%'";
    
    $newborns = mysqli_query($conn, $sql);
}

// FILTER
$selectedNBStatus = "";
if (isset($_GET["filter"])){
    $selectedNBStatus = $_GET["status"];
    
    $sql = "SELECT * FROM `nbaccount_view` WHERE `ImmunizationStatus` = '$selectedNBStatus'";
    $newborns = mysqli_query($conn, $sql);

    if ($selectedNBStatus == ""){
        $sql = "SELECT * FROM `nbaccount_view`";
        $newborns = mysqli_query($conn, $sql);
    }
}

// FILL IN FIELDS WITH EXISTING RECORDS
if (isset($_GET["edit"])){
    $editState = true;
    $nbID = $_GET["edit"];

    $sql = "SELECT * FROM `nbaccount_view` WHERE `nbaccount_view`.`NewbornID`='$nbID'";

    $results = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($results);

    $nbID = $row["NewbornID"];
    $nbLName = $row["LastName"];
    $nbFName = $row["FirstName"];
    $nbMName = $row["MiddleName"];
    $nbDOB = $row["DOB"];
    $nbSex = $row["Sex"];
    $nbAddress = $row["Address"];
    $nbGuardian = $row["Guardian"];
    $nbStatus = $row["ImmunizationStatus"];
    $username = $row["Username"];
    $phoneNum = $row["PhoneNumber"];
    $password = $row["Password"];
}

// UPDATE
if (isset($_POST["update"])){
    $nbID = $_POST["nb-id"];
    $nbLName = $_POST["last-name"];
    $nbFName = $_POST["first-name"];
    $nbMName = $_POST["middle-name"];
    $nbDOB = $_POST["dob"];
    $nbSex = $_POST["sex"];
    $nbAddress = $_POST["address"];
    $nbGuardian = $_POST["guardian"];
    $username = $_POST["username"];
    $phoneNum = $_POST["phone-num"];
    $password = $_POST["password"];

    $sql = "UPDATE `newborn_tbl` SET `LastName`='$nbLName', `FirstName`='$nbFName', `MiddleName`='$nbMName', `DOB`='$nbDOB', `Sex`='$nbSex', `Address`='$nbAddress', `Guardian`='$nbGuardian' WHERE `NewbornID`='$nbID'; UPDATE `account_tbl` SET `Username`='$username', `PhoneNumber`='$phoneNum', `Password`='$password' WHERE `Username`='$username';";

    mysqli_multi_query($conn, $sql);
    header("location: newborns.php");
}

?>