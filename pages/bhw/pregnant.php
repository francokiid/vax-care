<?php
session_start();
if(empty($_SESSION["bhw-username"]) || $_SESSION["bhw-username"] == "") {
    header("location: ../../login-bhw.php");
    exit;
}
include "../../backend/bhw/_pregnant.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Pregnant Women</title>
        <link rel="stylesheet" href="../assets/cssbhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <?php
        $pageTitle = "Pregnant Women";
        include "../templates/sidebar-bhw.php";
        include "../templates/header.php";
        ?>

        <main>
            <section class="grid-item">
                <form method="get">
                    <header class="table-header">
                        <div class="search-container flex-center">
                            <input name="search-data" class="search-input" type="search" placeholder="Search...">
                            <button type="submit" name="search" class="mini-btn">&nbsp;</button>
                        </div>
                        <div class="filter-container flex-center">
                            <a href="pregnant.php?new"><button type="button" class="mini-btn">New</button></a>
                            <select name="status-filter">
                                <option value="" <?php if ($selectedPStatus == "") { echo "selected"; } ?>>All</option>
                                <option value="NI" <?php if ($selectedPStatus == "NI") { echo "selected"; } ?>>Not Immunized</option>
                                <option value="PI" <?php if ($selectedPStatus == "PI") { echo "selected"; } ?>>Partially Immunized</option>
                                <option value="FI" <?php if ($selectedPStatus == "FI") { echo "selected"; } ?>>Fully Immunized</option>
                            </select>
                            <button type="submit" name="filter" class="mini-btn filter-btn"></button>
                        </div>
                    </header>
                </form>

                <div class="table-body">
                    <table class="pregnant-tbl" id="pregnant-tbl">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>LMP</th>
                                <th>EDD</th>
                                <th>Trimester</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Account</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr><tr>
                            <?php
                            if ($pregnant){
                                while ($row = mysqli_fetch_assoc($pregnant)){ ?>
                                    <tr>
                                        <td><?php echo "P".$row["PregnantID"]?></td>
                                        <td><?php echo $row["LastName"].", ".$row["FirstName"]." ".$row["MiddleName"]?></td>
                                        <td><?php echo $row["LMP"]?></td>
                                        <td><?php echo $row["EDD"]?></td>
                                        <td><?php echo $row["Trimester"]?></td>
                                        <td><?php echo $row["Address"]?></td>
                                        <td><?php echo $row["PhoneNumber"]?></td>
                                        <td><?php echo $row["ImmunizationStatus"]?></td>
                                        <td><?php echo $row["Username"]?></td>
                                        <td>
                                            <div class='row-btn-container'>
                                                <a href="pregnant.php?edit=<?php echo $row["PregnantID"];?>">
                                                    <img src="../assets/images/edit-24px.png" class="img-link" alt="Edit" title="Edit">
                                                </a>
                                                <a href="schedules.php?new=<?php echo "P".$row["PregnantID"]; ?>&recipient-type=<?php echo "Pregnant";?>">
                                                    <img src="../assets/images/schedules-24px.png" class="img-link" alt="Add Schedule" title="Add Schedule">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php    
                                }
                            }
                            if (mysqli_num_rows($pregnant) == 0) { ?>
                                <tr>
                                    <td colspan="10">No Records Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <div class="modal" id="modal">
                <section class="modal-content">
                    <form method="post" class="form-body" id="recipient-form">

                        <header class="form-header">
                            <h3>Recipient Form</h3>
                            <button type="button" class="close-btn" onclick="closeForm();"></button>
                        </header>

                        <input type="hidden" name="p-id" value="<?php echo ($editState ? $pID : '');?>">

                        <fieldset class="personal-details">
                            <div class="input-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" name="last-name" value="<?php echo ($editState ? $pLName : ''); ?>" placeholder="Enter last name" required>
                            </div>
                            <div class="input-group">
                                <label for="first-name">First Name</label>
                                <input type="text" name="first-name" value="<?php echo ($editState ? $pFName : ''); ?>" placeholder="Enter first name" required>
                            </div>
                            <div class="input-group">
                                <label for="">Middle Name</label>
                                <input type="text" name="middle-name" value="<?php echo ($editState ? $pMName : ''); ?>" placeholder="Enter middle name">
                            </div>
                            <div class="input-group">
                                <label for="">Last Menstrual Period</label>
                                <input type="date" name="lmp" value="<?php echo ($editState == true ? $pLMP : ''); ?>" required>
                            </div>
                            <div class="input-group">
                                <label for="">Estimated Due Date</label>
                                <input type="date" name="edd" value="<?php echo ($editState == true ? $pEDD : ''); ?>" required>
                            </div>
                            <div class="input-group">
                                <label for="trimester">Pregnancy Trimester</label>
                                <select name="trimester" required>
                                    <option value="" <?php if (($editState) && ($pTrimester == "")) { echo "selected"; } ?>>...</option>
                                    <option value="First" <?php if (($editState) && ($pTrimester == "First")) { echo "selected"; } ?>>First</option>
                                    <option value="Second" <?php if (($editState) && ($pTrimester == "Second")) { echo "selected"; } ?>>Second</option>
                                    <option value="Third" <?php if (($editState) && ($pTrimester == "Third")) { echo "selected"; } ?>>Third</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="">Address</label>
                                <input type="text" name="address" value="<?php echo ($editState ? $pAddress : ''); ?>" placeholder="Enter address" required>
                            </div>
                            <div class="input-group">
                                <label for="">Phone Number</label>
                                <input type="tel" pattern="[0-9]{11}" name="phone-num" value="<?php echo ($editState ? $phoneNum : ''); ?>" placeholder="e.g. 09123456789" required>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>ACCOUNT DETAILS</legend>
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" <?php echo ($editState ? "value=$username readonly" : ''); ?> placeholder="Enter Username" required="required">
                            </div>
                            <div class="input-group">
                                <label for="password">Password</label>
                                <div class="input-icon-group">
                                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be at least 8 characters and contain a mix of upper and lowercase letters, numbers and special characters." value="<?php echo ($editState == true ? $password : ''); ?>" placeholder="Enter password" required="required">
                                    <img src="../assets/images/hide-24px.png" onclick="showPass();" id="pass-icon">
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-buttons">
                            <button type="submit" name="add" id="add-btn" class="dark-btn">Add</button>
                            <button type="submit" name="update" id="update-btn" class="dark-btn">Update</button>
                            <button type="button" id="cancel-btn" class="light-btn" onclick="closeForm();">Cancel</button>
                        </div>
                        
                    </form>
                </section>
            </div>
        </main>

        <script type="text/javascript" src="../assets/js/modal.js" defer></script>
        <script type="text/javascript" src="../assets/js/password.js" defer></script>
    </body>
</html>