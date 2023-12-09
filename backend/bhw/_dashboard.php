<?php

include "../../backend/config/_connect.php";

// RETURN THE PERCENTAGE OF RECIPIENTS WHO DID NOT CONTINUE THEIR VACCINATION
function calculateDropout($conn, $firstDose, $lastDose){
    $res = mysqli_query($conn, "SELECT COUNT(`SchedID`) AS `$firstDose` FROM `nbsched_tbl` WHERE `SchedStatus`='Done' AND `VaccineID` = '$firstDose'");
    $row = mysqli_fetch_assoc($res);
    $firstDose = $row["$firstDose"];

    $res = mysqli_query($conn, "SELECT COUNT(`SchedID`) AS `$lastDose` FROM `nbsched_tbl` WHERE `SchedStatus`='Done' AND `VaccineID` = '$lastDose'");
    $row = mysqli_fetch_assoc($res);
    $lastDose = $row["$lastDose"];

    try {
        $dropout = ((($firstDose - $lastDose) / $firstDose) * 100);
        $dropout = number_format((float)$dropout, 2, ".", "");
        $dropout .= "%";
    }
    catch(DivisionByZeroError){
        $dropout = "0%";
    } catch(ErrorException) {
        $dropout = "0%";
    }

    return $dropout;
}

// TOTAL VACCINES
$res = mysqli_query($conn, "SELECT COALESCE(SUM(QtyAvailable),0) AS totalAvailable FROM `vaccine_tbl` WHERE `VaccineStatus`!='Discontinued'");
$row = mysqli_fetch_assoc($res);
$totalAvailable = $row['totalAvailable'];

// PENTA DROPOUT RATE
$penta1 = "PENTA1";
$penta2 = "PENTA3";
$pentaDropout = calculateDropout($conn, $penta1, $penta2);

// MCV DROPOUT RATE
$mcv1 = "MMR1";
$mcv2 = "MMR2";
$mcvDropout = calculateDropout($conn, $mcv1, $mcv2);

// IMMUNIZATION COVERAGE
$result = mysqli_query($conn, "SELECT COUNT(`NewbornID`) AS `total` FROM `newborn_tbl` WHERE `ImmunizationStatus`='FI'");
$row = mysqli_fetch_assoc($result);
$totalFIC = $row['total'];

$result = mysqli_query($conn, "SELECT COUNT(`NewbornID`) AS `total` FROM `newborn_tbl`");
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

try {
  $immunization = (($totalFIC / $total) * 100);
  $immunization = number_format((float)$immunization, 2, ".", "");
}
catch(DivisionByZeroError){
  $immunization = 0;
} catch(ErrorException) {
  $immunization = 0;
}
$immunization .= "%";

// LINE CHART DATA 1 - NUMBER OF NEWBORN VACCINATIONS PER MONTH IN THE CURRENT YEAR
$lineData = array();

$sql = "SELECT MONTH(`SchedDate`) as num, DATE_FORMAT(`SchedDate`, '%M') AS month, COUNT(*) AS total FROM `nbsched_tbl` WHERE `SchedStatus`='Done' AND YEAR(`SchedDate`)=YEAR(NOW()) GROUP BY month ORDER BY MONTH(`SchedDate`)";
$vaccinations = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($vaccinations)){
  $lineData[] = array("x"=> $row["num"], "label"=> $row["month"],"y" => $row['total']);
}

// LINE CHART DATA  2- NUMBER OF PREGNANT VACCINATIONS PER MONTH IN THE CURRENT YEAR
$lineData2 = array();

$sql = "SELECT MONTH(`SchedDate`) as num, DATE_FORMAT(`SchedDate`, '%M') AS month, COUNT(*) AS total FROM `psched_tbl` WHERE `SchedStatus`='Done' AND YEAR(`SchedDate`)=YEAR(NOW()) GROUP BY month ORDER BY MONTH(`SchedDate`)";
$vaccinations = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($vaccinations)){
  $lineData2[] = array("x"=> $row["num"], "label"=> $row["month"],"y" => $row['total']);
}

// PIE CHART 1 DATA - DISTRIBUTION OF PREGNANT WOMEN'S IMMUNIZATION STATUS
$pregnantPieData = array();

$overall = mysqli_query($conn, "SELECT COUNT(*) AS `total` FROM `pregnant_tbl`");
$status = mysqli_query($conn, "SELECT `ImmunizationStatus` AS `status`, COUNT(*) AS `total` FROM `pregnant_tbl` GROUP BY `ImmunizationStatus`");
$denominator = mysqli_fetch_array($overall);

while ($row = mysqli_fetch_array($status)){
  try {
      $percentage = ($row['total'] / $denominator['total']) * 100;
  }
  catch(DivisionByZeroError){
      $percentage = 0;
  } catch(ErrorException) {
      $percentage = 0;
  }
    $pregnantPieData[] = array("label" => $row['status'], "y" => $percentage);
}

// PIE CHART 2 DATA - DISTRIBUTION OF NEWBORNS' IMMUNIZATION STATUS
$newbornPieData = array();

$overall = mysqli_query($conn, "SELECT COUNT(*) AS `total` FROM `newborn_tbl`");
$status = mysqli_query($conn, "SELECT `ImmunizationStatus` AS `status`, COUNT(*) AS `total` FROM `newborn_tbl` GROUP BY `ImmunizationStatus`");
$denominator = mysqli_fetch_array($overall);

while ($row = mysqli_fetch_array($status)){
  try {
      $percentage = ($row['total'] / $denominator['total']) * 100;
  }
  catch(DivisionByZeroError){
      $percentage = 0;
  } catch(ErrorException) {
      $percentage = 0;
  }
    $newbornPieData[] = array("label" => $row['status'], "y" => $percentage);
}

// PIE CHART 3 DATA - SEX DISTRIBUTION OF NEWBORNS
$sexPieData = array();

$sql = "SELECT `Sex` AS `sex`, COUNT(*) AS `total` FROM `newborn_tbl` GROUP BY `Sex`";
$status = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($status)){
  try {
      $percentage = ($row['total'] / $denominator['total']) * 100;
  }
  catch(DivisionByZeroError){
      $percentage = 0;
  } catch(ErrorException) {
      $percentage = 0;
  }
    $sexPieData[] = array("label" => $row['sex'], "y" => $percentage);
  }

// COLUMN CHART DATA - QUANTITY AVAILABLE AND QUANTITY RESERVED PER VACCINE
$columnData = array();
$columnData2 = array();
$count = 0;

$sql = "SELECT `VaccineID`, SUM(`QtyReserved`) AS `QtyReserved` FROM `vaccine_tbl` WHERE `VaccineStatus`!='Discontinued' GROUP BY `VaccineName` ORDER BY `VaccineID`";
$reserved = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($reserved)){
  $columnData[] = array("label" => preg_replace('/[0-9]+/', '', $row['VaccineID']), "y" => $row['QtyReserved']);
}

$sql = "SELECT `VaccineID`, SUM(`QtyAvailable`) AS `QtyAvailable` FROM `vaccine_tbl` WHERE `VaccineStatus`!='Discontinued' GROUP BY `VaccineName` ORDER BY `VaccineID`";
$reserved = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($reserved)){
  $columnData2[] = array("label" => preg_replace('/[0-9]+/', '', $row['VaccineID']), "y" => $row['QtyAvailable']);
}

// STACKED BAR CHART DATA - DISTRIBUTION OF NEWBORNS' IMMUNIZATION STATUS PER SITIO
$barData1 = array();

$sql = "SELECT SUBSTRING_INDEX(`Address`, ',', 1) AS `address`, COUNT(`Address`) AS `total` FROM `newborn_tbl` WHERE `ImmunizationStatus`='NI' GROUP BY `Address` ORDER BY `Address` DESC";
$addresses = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($addresses)){
  $barData1[] = array("label" => $row['address'], "y" => $row['total']);
}

$barData2 = array();

$sql = "SELECT SUBSTRING_INDEX(`Address`, ',', 1) AS `address`, COUNT(`Address`) AS `total` FROM `newborn_tbl` WHERE `ImmunizationStatus`='PI' GROUP BY `Address` ORDER BY `Address` DESC";
$addresses = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($addresses)){
  $barData2[] = array("label" => $row['address'], "y" => $row['total']);
}

$barData3 = array();

$sql = "SELECT SUBSTRING_INDEX(`Address`, ',', 1) AS `address`, COUNT(`Address`) AS `total` FROM `newborn_tbl` WHERE `ImmunizationStatus`='FI' GROUP BY `Address` ORDER BY `Address` DESC";
$addresses = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($addresses)){
  $barData3[] = array("label" => $row['address'], "y" => $row['total']);
}
?>
