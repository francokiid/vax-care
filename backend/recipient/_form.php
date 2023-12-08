<?php
include("../../backend/config/_connect.php");

if (isset($_POST["add-pregnant"])){
    $pLName = $_POST["last-name"];
    $pFName = $_POST["first-name"];
    $pMName = $_POST["middle-name"];
    $pLMP = $_POST["lmp"];
    $pEDD = $_POST["edd"];
    $pTrimester = $_POST["trimester"];
    $pAddress = $_POST["address"];
    $pStatus = "NI";
    $username = $_SESSION["recipient-username"];
    $phoneNum = $_POST["phone-num"];

    $sql = "INSERT INTO `pregnant_tbl` (`LastName`, `FirstName`, `MiddleName`, `LMP`, `EDD`, `Trimester`, `Address`, `ImmunizationStatus`, `Username`) VALUES ('$pLName','$pFName', '$pMName', '$pLMP', '$pEDD', '$pTrimester', '$pAddress', '$pStatus', '$username'); UPDATE `account_tbl` SET `PhoneNumber`='$phoneNum' WHERE `Username`='$username';";

    mysqli_multi_query($conn, $sql);
    header("location: home.php");
}

if (isset($_POST["add-newborn"])){
    $nbLName = $_POST["last-name"];
    $nbFName = $_POST["first-name"];
    $nbMName = $_POST["middle-name"];
    $nbDOB = $_POST["dob"];
    $nbSex = $_POST["sex"];
    $nbAddress = $_POST["address"];
    $nbGuardian = $_POST["guardian"];
    $nbStatus = "NI";
    $username = $_SESSION["recipient-username"];
    $phoneNum = $_POST["phone-num"];

    $sql = "INSERT INTO `newborn_tbl` (`LastName`, `FirstName`, `MiddleName`, `DOB`, `Sex`, `Address`, `Guardian`, `ImmunizationStatus`, `Username`) VALUES ('$nbLName', '$nbFName', '$nbMName', '$nbDOB', '$nbSex', '$nbAddress', '$nbGuardian', '$nbStatus', '$username'); UPDATE `account_tbl` SET `PhoneNumber`='$phoneNum' WHERE `Username`='$username';";

    mysqli_multi_query($conn, $sql);
    header("location: home.php");
}

?>