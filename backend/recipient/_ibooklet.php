<?php
include "../../backend/config/_connect.php";

$username = $_SESSION["recipient-username"];

// RETRIEVE RECIPIENT DETAILS
$sqlNB = mysqli_query($conn, "SELECT * FROM `newborn_tbl` WHERE `Username`='$username'");
$sqlP = mysqli_query($conn, "SELECT * FROM `pregnant_tbl` WHERE `Username`='$username'");

if (mysqli_num_rows($sqlNB) > 0){
    $recipient = mysqli_fetch_assoc($sqlNB);
}
else if (mysqli_num_rows($sqlP) > 0) {
    $recipient = mysqli_fetch_assoc($sqlP);
}

// SET DB TABLES TO BE RETRIEVED AND MODIFIED
$recipientType = $_SESSION['recipientType'];

switch($recipientType){
    case "Pregnant":
        $tbl = "psched_tbl";
        $view = "psched_view";
        break;
    case "Newborn":
        $tbl = "nbsched_tbl";
        $view = "nbsched_view";
        break;
}

// RETRIEVE VACCINATIONS
$sql = "SELECT `vaccine_tbl`.`VaccineID`, `$view`.`SchedDate` FROM `vaccine_tbl` LEFT JOIN `$view` ON `vaccine_tbl`.`VaccineID`=`$view`.`VaccineID` AND `$view`.`Username`='$username' AND `$view`.`SchedStatus`='Done' WHERE `vaccine_tbl`.`VaccineStatus`!='Discontinued' AND `vaccine_tbl`.`RecipientType`='$recipientType'";
$vaccinations = mysqli_query($conn, $sql);

?>