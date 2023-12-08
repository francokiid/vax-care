<?php
session_start();
if(empty($_SESSION["bhw-username"]) || $_SESSION["bhw-username"] == "") {
    header("location: ../../login-bhw.php");
    exit;
}
include "../../backend/bhw/_newborns.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Newborns</title>
        <link rel="stylesheet" href="../assets/css/bhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <?php
        $pageTitle = "Newborns";
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
                            <a href="newborns.php?new"><button type="button" class="mini-btn">New</button></a>
                            <select name="status">
                                <option value="" <?php if ($selectedNBStatus == "") { echo "selected"; } ?>>All</option>
                                <option value="NI" <?php if ($selectedNBStatus == "NI") { echo "selected"; } ?>>Not Immunized</option>
                                <option value="PI" <?php if ($selectedNBStatus == "PI") { echo "selected"; } ?>>Partially Immunized</option>
                                <option value="FI" <?php if ($selectedNBStatus == "FI") { echo "selected"; } ?>>Fully Immunized</option>
                            </select>
                            <button type="submit" name="filter" class="mini-btn filter-btn" title="Filter"></button>
                        </div>
                    </header>
                </form>

                <div class="table-body">
                    <table id="newborns-tbl">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Sex</th>
                                <th>Address</th>
                                <th>Guardian</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Account</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr><tr>
                            <?php
                            if ($newborns){
                                while ($row = mysqli_fetch_assoc($newborns)){ ?>
                                    <tr>
                                        <td><?php echo "NB".$row["NewbornID"]?></td>
                                        <td><?php echo $row["LastName"].", ".$row["FirstName"]." ".substr($row["MiddleName"], 0, 1)."."?></td>
                                        <td><?php echo $row["DOB"]?></td>
                                        <td><?php echo $row["Sex"]?></td>
                                        <td><?php echo $row["Address"]?></td>
                                        <td><?php echo $row["Guardian"]?></td>
                                        <td><?php echo $row["PhoneNumber"]?></td>
                                        <td><?php echo $row["ImmunizationStatus"]?></td>
                                        <td><?php echo $row["Username"]?></td>
                                        <td>
                                            <div class='row-btn-container'>
                                                <a href="newborns.php?edit=<?php echo $row["NewbornID"];?>">
                                                    <img src="../assets/images/edit-24px.png" class="img-link" alt="Edit" title="Edit">
                                                </a>
                                                <a href="schedules.php?new=<?php echo "NB".$row["NewbornID"]; ?>&recipient-type=<?php echo "Newborn";?>" name="new">
                                                    <img src="../assets/images/schedules-24px.png" class="img-link" alt="Edit" title="Edit">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php    
                                }
                            }
                            if (mysqli_num_rows($newborns) == 0) { ?>
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

                        <input type="hidden" name="nb-id" value="<?php echo ($editState ? $nbID : '');?>">
                        
                        <fieldset class="personal-details">
                            <div class="input-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last-name" value="<?php echo ($editState ? $nbLName : ''); ?>" placeholder="Enter last name" required>
                            </div>
                            <div class="input-group">
                                <label for="">First Name</label>
                                <input type="text" name="first-name" value="<?php echo ($editState ? $nbFName : ''); ?>" placeholder="Enter first name" required>
                            </div>
                            <div class="input-group">
                                <label for="">Middle Name</label>
                                <input type="text" name="middle-name" value="<?php echo ($editState ? $nbMName : ''); ?>" placeholder="Enter middle name">
                            </div>
                            <div class="input-group">
                                <label for="">Date of Birth</label>
                                <input type="date" name="dob" value="<?php echo ($editState == true ? $nbDOB : ''); ?>" required>
                            </div>
                            <div class="input-group">
                                <label for="sex">Sex</label>
                                <select name="sex" required>
                                    <option value="" <?php if (($editState) && ($nbSex == "")) { echo "selected"; } ?>>...</option>
                                    <option value="M" <?php if (($editState) && ($nbSex == "M")) { echo "selected"; } ?>>Male</option>
                                    <option value="F" <?php if (($editState) && ($nbSex == "F")) { echo "selected"; } ?>>Female</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="">Address</label>
                                <input type="text" name="address" value="<?php echo ($editState ? $nbAddress : ''); ?>" placeholder="Enter address" required>
                            </div>
                        </fieldset>
                        
                        <fieldset class="contact-info">
                            <legend>IN CASE OF EMERGENCY</legend>
                            <div class="input-group">
                                <label for="">Guardian Name</label>
                                <input type="text" name="guardian" value="<?php echo ($editState ? $nbGuardian : ''); ?>" placeholder="Enter guardian name" required>
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
                                    <input type="passwordd" name="password" id="passwordd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be at least 8 characters and contain a mix of upper and lowercase letters, numbers and special characters." value="<?php echo ($editState == true ? $password : ''); ?>" placeholder="Enter passwordd" required="required">
                                    <img src="../assets/images/hide-24px.png" onclick="showPass();" id="pass-icon" alt="Show password">
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