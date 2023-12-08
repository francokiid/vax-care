<?php
session_start();
if(empty($_SESSION["recipient-username"]) || $_SESSION["recipient-username"] == "") {
    header("location: ../../index.php");
    exit;
}
include "../../backend/recipient/_home.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Home</title>
        <link rel="stylesheet" href="../assets/css/bhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <?php
        include "../templates/sidebar-recipient.php";
        $pageTitle = "Home";
        include "../templates/header.php";
        ?>

        <main>
            <a href=<?php echo ($_SESSION["submitted"] ? "ibooklet.php"." target='_blank'" : "form.php") ?>>
                <section class="banner">
                    <h2>
                        <?php echo ($_SESSION["submitted"] ? "CHECK YOUR IMMUNIZATION BOOKLET!" : "FILL OUT YOUR RECIPIENT FORM TO REQUEST A SCHEDULE!") ?>
                    </h2>
                </section>
            </a>

            <section class="grid-2cols even">
                <div class="grid-item">
                    <h3>Upcoming Schedule</h3><br>
                    <div class="table-body">
                        <table class="recipients-tbl">
                            <thead>
                                <tr>
                                    <th>Vaccine</th>
                                    <th>Schedule</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($_SESSION["submitted"]){
                                    if ($upcomingSched){
                                        while ($row = mysqli_fetch_assoc($upcomingSched)){ ?>
                                            <tr>
                                                <td><?php echo $row["VaccineID"]?></td>
                                                <td><?php echo $row["SchedDate"]?></td>
                                                <td>
                                                    <div class="row-btn-container">
                                                        <a href="home.php?confirm=<?php echo $row["SchedID"]?>">
                                                            <img src="../assets/images/cancel-24px.png" class="img-link">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                    <?php    
                                        }
                                    }
                                    if (mysqli_num_rows($upcomingSched) == 0) { ?>
                                        <tr><td colspan="3">You have no scheduled vaccination right now.</td></tr>
                                    <?php
                                    }
                                }
                                else { ?>
                                    <tr><td colspan="3">You have no scheduled vaccination right now.</td></tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="grid-item">
                    <h3>Missed Schedule</h3><br>
                    <div class="table-body">
                        <table class="recipients-tbl">
                            <thead>
                                <tr>
                                    <th>Vaccine</th>
                                    <th>Schedule</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if ($_SESSION["submitted"]){
                                    if ($missedSched){
                                        while ($row = mysqli_fetch_assoc($missedSched)){ ?>
                                            <tr>
                                                <td><?php echo $row["VaccineID"]?></td>
                                                <td><?php echo $row["SchedDate"]?></td>
                                                <td>
                                                    <div class="row-btn-container">
                                                        <a href="home.php?confirm=<?php echo $row["SchedID"]?>">
                                                            <img src="../assets/images/cancel-24px.png" class="img-link">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                    <?php    
                                        }
                                    }
                                    if (mysqli_num_rows($missedSched) == 0) { ?>
                                        <tr><td colspan="3">You have no missed vaccination right now.</td></tr>
                                    <?php
                                    }
                                }
                                else { ?>
                                    <tr><td colspan="3">You have no missed vaccination right now.</td></tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <div class="modal" id="confirm-box">
                <section class="modal-content">
                    <header class="form-header">
                        <h2>Confirm Cancellation</h2>
                    </header>
                    <br>
                    <p>Do you want to cancel this schedule? You cannot undo this action.</p>
                    <h4>To get vaccinated on a different date, request a reschedule instead.</h4>
                    <p>Keep in mind that if you cancel this schedule, you will not get a new schedule.</p>
                    
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <div class="form-buttons">
                            <button type="button" name="cancel" id="cancel-btn" class="light-btn" onclick="closeConfirmBox();">Cancel</button>
                            <button type="submit" name="resched" id="resched-btn" class="dark-btn">Reschedule</button>
                            <button type="submit" name="delete" id="confirm-btn" class="dark-btn">Confirm</button>
                        </div>
                    </form>
                </section>
            </div>
        </main>

        <script type="text/javascript" src="../public/js/modal.js" defer></script>
    </body>
</html>