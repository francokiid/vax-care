<?php
session_start();
if(empty($_SESSION["bhw-username"]) || $_SESSION["bhw-username"] == "") {
    header("location: ../../login-bhw.php");
    exit;
}
include "../../backend/bhw/_schedules.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Schedules</title>
        <link rel="stylesheet" href="../assets/css/bhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <?php
        $pageTitle = "Schedules";
        include "../templates/sidebar-bhw.php";
        include "../templates/header.php";
        ?>
        <main>
            <div class="grid-2cols even">
                <section class="grid-item">
                    <form method="get">
                        <header class="table-header">
                            <h3>Pregnant Women</h3>
                            <div class="search-container flex-center">
                                <input name="p-data" class="search-input" type="search" placeholder="Search...">
                                <button type="submit" name="p-search" class="mini-btn">&nbsp;</button>
                            </div>
                            <div class="filter-container flex-center">
                                <select name="p-status">
                                    <option value="" <?php if ($selectedPStatus == "") echo "selected" ?>>All</option>
                                    <option value="Scheduled" <?php if ($selectedPStatus == "Scheduled") echo "selected" ?>>Scheduled</option>
                                    <option value="Missed" <?php if ($selectedPStatus == "Missed") echo "selected" ?>>Missed</option>
                                    <option value="To Reassign" <?php if ($selectedPStatus == "To Reassign") echo "selected" ?>>To Reassign</option>
                                    <option value="Done" <?php if ($selectedPStatus == "Done") echo "selected" ?>>Done</option>
                                </select>
                                <button type="submit" name="p-filter" class="mini-btn filter-btn"></button>
                            </div>
                        </header>
                    </form>
                    <div class="table-body">
                        <table class="recipients-tbl" id="psched-tbl">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Recipient</th>
                                    <th>Vaccine</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr><tr>
                                <?php 
                                if ($pSched){
                                    while ($row = mysqli_fetch_assoc($pSched)){ ?>
                                        <tr>
                                            <td><?php echo $row["SchedDate"]?></td>
                                            <td><?php echo "P".$row["PregnantID"]?></td>
                                            <td><?php echo $row["VaccineID"]?></td>
                                            <td><?php echo $row["SchedStatus"]?></td>
                                            <td>
                                                <div class='row-btn-container'>
                                                    <a href="schedules.php?edit=<?php echo $row['SchedID'].'&recipient-type=Pregnant' ?>">
                                                        <img src="../assets/images/edit-24px.png" class="img-link" alt="Edit" title="Edit">
                                                    </a>
                                                    <a href="schedules.php?done=<?php echo $row['SchedID'].'&recipient-type=Pregnant' ?>">
                                                        <img src="../assets/images/done-24px.png" class="img-link" alt="Mark as Done" title="Mark as Done">
                                                    </a>
                                                    <a href="schedules.php?confirm=<?php echo $row['SchedID'].'&recipient-type=Pregnant' ?>">
                                                        <img src="../assets/images/remove-24px.png" class="img-link" alt="Cancel" title="Cancel">
                                                    </a>
                                                    <a href="schedules.php?new=<?php echo 'P'.$row['PregnantID'].'&recipient-type=Pregnant' ?>">
                                                        <img src="../assets/images/add-24px.png" class="img-link" alt="Add" title="Add">
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php    
                                    }
                                }
                                if (mysqli_num_rows($pSched) == 0) { ?>
                                    <tr>
                                        <td colspan="5">No Records Found</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </section>
                
                <section class="grid-item">
                    <form action="schedules.php" method="get">
                        <header class="table-header">
                            <h3>Newborns</h3>
                            <div class="search-container flex-center">
                                <input name="nb-data" class="search-input" type="search" placeholder="Search...">
                                <button type="submit" name="nb-search" class="mini-btn">&nbsp;</button>
                            </div>
                            <div class="filter-container flex-center">
                                <select name="nb-status" selected=<?php echo $selectedNBStatus ?>>
                                    <option value="" <?php if ($selectedNBStatus == "") { echo "selected"; } ?>>All</option>
                                    <option value="Scheduled" <?php if ($selectedNBStatus == "Scheduled") { echo "selected"; } ?>>Scheduled</option>
                                    <option value="Missed" <?php if ($selectedNBStatus == "Missed") { echo "selected"; } ?>>Missed</option>
                                    <option value="To Reassign" <?php if ($selectedNBStatus == "To Reassign") { echo "selected"; } ?>>To Reassign</option>
                                    <option value="Done" <?php if ($selectedNBStatus == "Done") { echo "selected"; } ?>>Done</option>
                                </select>
                                <button type="submit" name="nb-filter" class="mini-btn filter-btn"></button>
                            </div>
                        </header>
                    </form>
                    <div class="table-body">
                        <table class="recipients-tbl" id="nbsched-tbl">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Recipient</th>
                                    <th>Vaccine</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr><tr>
                                <?php 
                                if ($nbSched){
                                    while ($row = mysqli_fetch_assoc($nbSched)){ ?>
                                        <tr>
                                            <td><?php echo $row["SchedDate"]?></td>
                                            <td><?php echo "NB".$row["NewbornID"]?></td>
                                            <td><?php echo $row["VaccineID"]?></td>
                                            <td><?php echo $row["SchedStatus"]?></td>
                                            <td>
                                                <div class='row-btn-container'>
                                                    <a href="schedules.php?edit=<?php echo $row['SchedID'].'&recipient-type=Newborn' ?>">
                                                        <img src="../assets/images/edit-24px.png" class="img-link" alt="Edit" title="Edit">
                                                    </a>
                                                    <a href="schedules.php?done=<?php echo $row['SchedID'].'&recipient-type=Newborn' ?>">
                                                        <img src="../assets/images/done-24px.png" class="img-link" alt="Mark as Done" title="Mark as Done">
                                                    </a>
                                                    <a href="schedules.php?confirm=<?php echo $row['SchedID'].'&recipient-type=Newborn' ?>">
                                                        <img src="../assets/images/remove-24px.png" class="img-link" alt="Schedules" title="Schedules">
                                                    </a>
                                                    <a href="schedules.php?new=<?php echo 'NB'.$row["NewbornID"].'&recipient-type=Newborn' ?>">
                                                        <img src="../assets/images/add-24px.png" class="img-link" alt="Add" title="Add">
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php    
                                    }
                                }
                                if (mysqli_num_rows($nbSched) == 0) { ?>
                                    <tr>
                                        <td colspan="5">No Records Found</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
                
            <div class="modal" id="modal">
                <section class="modal-content">
                    <form method="post" class="form-body" id="sched-form">
                        <header class="form-header">
                            <h3>Schedule Form <?php echo ($editState ? "- ".$schedID : "")?></h3>
                            <button type="button" class="close-btn" onclick="closeForm();"></button>
                        </header>
                        
                        <input type="hidden" name="sched-id" value="<?php echo $schedID ?>">
                        <input type="hidden" name="recipient-type" value="<?php echo $recipientType ?>">
                        
                        <fieldset class="immunization-details">
                            <div class="input-group" <?php echo ($editState ? "readonly" : "")?>>
                                <label for="">Recipient ID</label>
                                <input type="text" name="recipient-id" value="<?php echo $recipientID ?>" placeholder="Enter recipient ID" readonly>
                            </div>
                            <div class="input-group">
                                <label for="">Vaccine ID</label>
                                <select name="vax-id" required <?php echo ($editState ? "disabled" : "")?>>
                                    <option value="">...</option>
                                    <?php
                                    $sql = "SELECT `VaccineID` FROM `vaccine_tbl` WHERE `RecipientType`='$recipientType' AND `QtyAvailable` > 0 AND `VaccineStatus`!='Discontinued'";
                                    $vaccines = mysqli_query($conn, $sql);
                                    while ($vaccine = mysqli_fetch_assoc($vaccines)){ ?>
                                    <option value="<?php echo $vaccine['VaccineID'] ?>" <?php echo ($editState && $vaxID ==$vaccine['VaccineID'] ? "selected" : "") ?>><?php echo $vaccine['VaccineID'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="">Date of Vaccination</label>
                                <input type="date" name="sched-date" value="<?php echo ($editState ? $schedDate : "")?>" required>
                            </div>
                            <div class="input-group">
                                <label for="sched-status">Schedule Status</label>
                                <select name="sched-status" required>
                                    <option value="" <?php echo ($editState && $schedStatus =="" ? "selected" : "") ?>>...</option>
                                    <option value="Scheduled" <?php echo ($editState && $schedStatus =="Scheduled" ? "selected" : "") ?>>Scheduled</option>
                                    <option value="Missed" <?php echo ($editState && $schedStatus =="Missed" ? "selected" : "") ?>>Missed</option>
                                    <option value="To Reassign" <?php echo ($editState && $schedStatus =="To Reassign" ? "selected" : "") ?>>To Reassign</option>
                                </select>
                            </div>
                        </fieldset>
                        <div class="form-buttons">
                            <button type="submit" name="add-btn" id="add-btn" class="dark-btn">Add</button>
                            <button type="submit" name="update-btn" id="update-btn" class="dark-btn">Update</button>
                            <button type="button" id="cancel-btn" class="light-btn" onclick="closeForm();">Cancel</button>
                        </div>
                    </form>
                </section>
            </div>

            <?php
            $title = "Cancellation";
            $prompt = "
            <p>Do you want to cancel this schedule? You cannot undo this action.</p>
            <h4>Data Retention</h4>
            <p>This schedule will no longer appear on the records and reports.</p>
            ";
            include "../templates/confirm-box.php";
            ?>
        </main>

        <script type="text/javascript" src="../assets/js/modal.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/wxtan2/Client-Side-Table-Pagination/table-pagination.js"></script>
        <script>
            $('#psched-tbl').createTablePagination({
                rowPerPage: 8
            });

            $('#nbsched-tbl').createTablePagination({
                rowPerPage: 8
            });
        </script>
    </body>
</html>