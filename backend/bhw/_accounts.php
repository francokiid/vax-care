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
    $accRole = "Admin";
    $accStatus = $_POST["account-status"];

    $sql = "INSERT INTO `account_tbl` (`Username`, `PhoneNumber`, `Password`, `AccountRole`, `AccountStatus`) VALUES ('$username', '$phoneNum', '$password', '$accRole', '$accStatus')";

    mysqli_query($conn, $sql);
    header("location: accounts.php");
}

// RETRIEVE
$sql = "SELECT * FROM `account_tbl` ORDER BY `Username`";
$accounts = mysqli_query($conn, $sql);

// SEARCH
if (isset($_GET["search"])){
    $search = $_GET["searchdata"];
    $sql = "SELECT * FROM `account_tbl` WHERE `Username` LIKE '$search%' OR `PhoneNumber` LIKE '$search%' OR `Password` LIKE '$search%' OR `AccountRole` LIKE '$search%' OR `AccountStatus` LIKE '$search%'";
    $accounts = mysqli_query($conn, $sql);
}

// FILTER
$selectedRole = "";
if (isset($_GET["filter"])){
    $selectedRole = $_GET["role"];
    
    $sql = "SELECT * FROM `account_tbl` WHERE `AccountRole` = '$selectedRole'";
    $accounts = mysqli_query($conn, $sql);

    if ($selectedRole == ""){
        $sql = "SELECT * FROM `account_tbl`";
        $accounts = mysqli_query($conn, $sql);
    }
}

// FILL IN FIELDS WITH EXISTING RECORDS
if (isset($_GET["edit"])){
    $editState = true;
    $username = $_GET["edit"];

    $sql = "SELECT * FROM `account_tbl` WHERE `Username`='$username'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $username = $row["Username"];
    $phoneNum = $row["PhoneNumber"];
    $password = $row["Password"];
    $accStatus = $row["AccountStatus"];
}

// UPDATE
if (isset($_POST["update"])){
    $username = $_POST["username"];
    $phoneNum = $_POST["phone-num"];
    $password = $_POST["password"];
    $accStatus = $_POST["account-status"];

    $sql = "UPDATE `account_tbl` SET `Username`='$username', `PhoneNumber`='$phoneNum', `Password`='$password', `AccountStatus`='$accStatus' WHERE `Username`='$username'";

    mysqli_query($conn, $sql);
    header("location: accounts.php");
}

// GET ID OF ACCOUNT TO BE DEACTIVATED
if (isset($_GET["confirm"])){
    $id = $_GET["confirm"];
}

// DEACTIVATE
if (isset($_POST["disable"])){
    $username = $_POST["id"];

    $sql = "UPDATE `account_tbl` SET `AccountStatus`='Deactivated' WHERE `Username`='$username'";
    mysqli_query($conn, $sql);
    header("location: accounts.php");
}

?>