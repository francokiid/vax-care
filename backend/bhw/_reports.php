<?php

include "../../backend/config/_connect.php";

$selectedMonth = date("m");
$selectedYear = date("Y");

if (isset($_GET["filter"])){
    $selectedMonth = $_GET["month"];
    $selectedYear = $_GET["year"];
    
    $sql = "SELECT * FROM `nbsched_view` WHERE newborn_tbl.`ImmunizationStatus`='FI' AND nbsched_tbl.`VaccineID`='MMR2' AND MONTH(`SchedDate`)='$selectedMonth' AND YEAR(`SchedDate`)='$selectedYear' GROUP BY `NewbornID`";
    $fic = mysqli_query($conn, $sql);

    if ($selectedMonth == ""){
        $sql = "SELECT * FROM `nbsched_view` WHERE newborn_tbl.`ImmunizationStatus`='FI' AND nbsched_tbl.`VaccineID`='MMR2'";
        $fic = mysqli_query($conn, $sql);
    }
}

// RETRIEVE
$sql = "SELECT * FROM `nbsched_view` WHERE `ImmunizationStatus`='FI' AND `VaccineID`='MMR1' AND MONTH(`SchedDate`)='$selectedMonth' AND YEAR(`SchedDate`)='$selectedYear' GROUP BY `NewbornID`";
$fic = mysqli_query($conn, $sql);

?>