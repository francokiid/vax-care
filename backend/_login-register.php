<?php
include("config/_connect.php");

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $accRole = $_SESSION["accRole"];

    $sql = mysqli_query($conn, "SELECT * FROM `account_tbl` WHERE `Username`='$username' AND `Password`='$password' AND `AccountRole`='$accRole'");
    $row = mysqli_fetch_array($sql);

    if (is_array($row)){
        if ($row["AccountStatus"] == "Deactivated"){
            echo "<script>alert('Your account has been deactivated!')</script>";
        }
        else {
            $_SESSION["phoneNum"] = $row["PhoneNumber"];

            switch($accRole){
                case "Recipient":
                    $_SESSION["recipient-username"] = $row["Username"];
                    header("location: home.php");
                    break;
                case "Admin":
                    $_SESSION["bhw-username"] = $row["Username"];
                    header("location: pages/bhw/dashboard.php");
                    break;
            }
        }
    }
    else {
        echo "<script type='text/javascript'>alert('Invalid login credentials!')</script>";
    }
}

if (isset($_POST["register"])){
    $username = $_POST["r-username"];
    $phoneNum = $_POST["r-phone-num"];
    $password = $_POST["r-password"];
    $cPassword = $_POST["r-c-password"];
    $accRole = $_SESSION["accRole"];
    $accStatus = "Active";

    if ($password == $cPassword){
        $sql = "INSERT INTO `account_tbl` (`Username`, `PhoneNumber`, `Password`, `AccountRole`, `AccountStatus`) VALUES ('$username', '$phoneNum', '$password', '$accRole', '$accStatus')";

        mysqli_query($conn, $sql);
        header("location: login-recipient.php");
    }
    else {
        echo "<script>alert('Passwords do not match!')</script>";
    }
}

?>