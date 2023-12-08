<?php
session_start();
if(empty($_SESSION["bhw-username"]) || $_SESSION["bhw-username"] == "") {
    header("location: ../../login-bhw.php");
    exit;
}
include "../../backend/bhw/_reports.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care</title>
        <link rel="stylesheet" href="../assets/css/bhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <?php
        $pageTitle = "Fully Immunized Children";
        include "../templates/sidebar-bhw.php";
        include "../templates/header.php";
        ?>
        
        <main>
            <section class="grid-item">
                <form method="get">
                    <header class="table-header">
                        <div class="filter-container flex-center">
                            <input type="number" name="year" min="1900" max="2099" step="1" value="<?php echo $selectedYear ?>"/>
                            <select name="month">
                                <option value="" <?php if ($selectedMonth == "") { echo "selected"; } ?>>All</option>
                                <option value="1" <?php if ($selectedMonth == "1") { echo "selected"; } ?>>January</option>
                                <option value="2" <?php if ($selectedMonth == "2") { echo "selected"; } ?>>February</option>
                                <option value="3" <?php if ($selectedMonth == "3") { echo "selected"; } ?>>March</option>
                                <option value="4" <?php if ($selectedMonth == "4") { echo "selected"; } ?>>April</option>
                                <option value="5" <?php if ($selectedMonth == "5") { echo "selected"; } ?>>May</option>
                                <option value="6" <?php if ($selectedMonth == "6") { echo "selected"; } ?>>June</option>
                                <option value="7" <?php if ($selectedMonth == "7") { echo "selected"; } ?>>July</option>
                                <option value=8 <?php if ($selectedMonth == "8") { echo "selected"; } ?>>August</option>
                                <option value=9 <?php if ($selectedMonth == "9") { echo "selected"; } ?>>September</option>
                                <option value=10 <?php if ($selectedMonth == "10") { echo "selected"; } ?>>October</option>
                                <option value=11 <?php if ($selectedMonth == 11) { echo "selected"; } ?>>November</option>
                                <option value=12 <?php if ($selectedMonth == 12) { echo "selected"; } ?>>December</option>
                            </select>
                            <button type="submit" name="filter" class="mini-btn filter-btn"></button>
                        </div>
                    </header>
                </form>
                <div class="table-body">
                    <table class="reports-tbl">
                        <thead>
                            <tr>
                                <th>Name of Child</th>
                                <th>Date of Birth</th>
                                <th>Guardian</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr><tr>
                        <?php
                            if ($fic){
                                while ($row = mysqli_fetch_assoc($fic)){ ?>
                                    <tr>
                                        <td><?php echo $row["LastName"].", ".$row["FirstName"]." ".$row["MiddleName"]?></td>
                                        <td><?php echo $row["DOB"]?></td>
                                        <td><?php echo $row["Guardian"]?></td>
                                        <td><?php echo $row["SchedDate"]?></td>
                                    </tr>
                            <?php    
                                }
                            }
                            if (mysqli_num_rows($fic) == 0) { ?>
                                <tr>
                                    <td colspan="3">No FIC Records Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>  
        </main>
    </body>
</html>