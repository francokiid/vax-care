<?php
session_start();
if(empty($_SESSION["recipient-username"]) || $_SESSION["recipient-username"] == "") {
    header("location: ../../index.php");
    exit;
}
include "../../backend/recipient/_ibooklet.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vax-Care: Immunization Booklet</title>
        <link rel="stylesheet" href="../assets/css/ibooklet.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>
<body>
    <button id="prev-btn"></button>

    <main id="booklet" class="booklet">

        <section id="p1" class="paper">
            <div id="cover" class="front">
                <div id="f1" class="front-content">
                    <header>
                        <img src="../assets/images/doh-logo.png" width="50px" alt="DOH logo">
                        <small>Republic of the Philippines<br>
                        Department of Health<br>
                        Regional Office IV-A<br>
                        CALABARZON</small>
                        <img src="../assets/images/logo.png" width="50px" alt="Vax-Care logo">
                    </header>
                    <img src="../assets/images/records-240px.png" alt="Records">
                    <h3>Personal Immunization Record</h3>
                    <div class="recipient-name">
                        <h3><?php echo $recipient["LastName"].", ".$recipient["FirstName"]." ".$recipient["MiddleName"] ?></h3>
                        <small>Name of Recipient</small>
                    </div>
                </div>
            </div>
            <div class="back"></div>
        </section>
        
        <section id="p2" class="paper">
                <div class="front">
                <div id="f2" class="front-content">
                <h3><?php echo $recipient["LastName"].", ".$recipient["FirstName"]." ".$recipient["MiddleName"] ?></h3>
                    <p>Full Name</p>
                    <h3><?php echo (($recipientType == "Pregnant") ? $recipient["LMP"] : $recipient["DOB"]) ?></h3>
                    <p><?php echo (($recipientType == "Pregnant") ? "Last Menstrual Period (LMP)" : "Date of Birth") ?></p>
                    <h3><?php echo (($recipientType == "Pregnant") ? $recipient["EDD"] : $recipient["Sex"]) ?></h3>
                    <p><?php echo (($recipientType == "Pregnant") ? "Expected Due Date (EDD)" : "Sex") ?></p>
                    <h3><?php echo $recipient["Address"] ?></h3>
                    <p>Address</p>
                    <h3><?php echo $recipient["ImmunizationStatus"] ?></h3>
                    <p>Immunization Status</p>
                </div>
            </div>
            <div class="back"></div>
        </section>
        
        <section id="p3" class="paper">
            <div class="front">
                <div id="f3" class="front-content">
                    <table class="newborns-tbl">
                        <thead>
                            <tr>
                                <th>Vaccine</th>
                                <th>Date Given</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($vaccinations){
                                while ($row = mysqli_fetch_assoc($vaccinations)){ ?>
                                    <tr>
                                        <td><?php echo $row["VaccineID"]?></td>
                                        <td><?php echo $row["SchedDate"]?></td>
                                    </tr>
                            <?php    
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="back"></div>
        </section>

    </main>

    <button id="next-btn"></button>

    <script src="../assets/js/ibooklet.js" defer></script>
</body>
</html>