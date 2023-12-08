<?php
session_start();
if(empty($_SESSION["bhw-username"]) || $_SESSION["bhw-username"] == "") {
    header("location: ../../login-bhw.php");
    exit;
}
include "../../backend/bhw/_accounts.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Accounts</title>
        <link rel="stylesheet" href="../assets/css/bhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <?php
        $pageTitle = "Accounts";
        include "../templates/sidebar-bhw.php";
        include "../templates/header.php";
        ?>

        <main>
            <section class="grid-item">

                <form method="get">
                    <header class="table-header">
                        <div class="search-container flex-center">
                            <input name="searchdata" class="search-input" type="search" placeholder="Search...">
                            <button type="submit" name="search" class="mini-btn">&nbsp;</button>
                        </div>
                        <div class="filter-container flex-center">
                            <a href="accounts.php?new"><button type="button" class="mini-btn">+Admin</button></a>
                            <select name="role">
                                <option value="" <?php if ($selectedRole == "") echo "selected" ?>>All</option>
                                <option value="Admin" <?php if ($selectedRole == "Admin") echo "selected" ?>>Admin</option>
                                <option value="Recipient" <?php if ($selectedRole == "Recipient") echo "selected" ?>>Recipient</option>
                            </select>
                            <button type="submit" name="filter" class="mini-btn filter-btn"></button>
                        </div>
                    </header>
                </form>

                <div class="table-body">
                    <table id="accounts-tbl">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Username</th>
                                <th>Phone No.</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><tr>
                            <?php
                            {
                                while ($row = mysqli_fetch_assoc($accounts)){ ?>
                                    <tr>
                                        <td><?php echo $row["AccountRole"]?></td>
                                        <td><?php echo $row["Username"]?></td>
                                        <td><?php echo $row["PhoneNumber"]?></td>
                                        <td><?php echo $row["AccountStatus"]?></td>
                                        <td>
                                            <div class='row-btn-container'>
                                                <a href="accounts.php?edit=<?php echo $row["Username"];?>">
                                                    <img src="../assets/images/edit-24px.png" class="img-link" alt="Edit" title="Edit">
                                                </a>
                                                <a href="accounts.php?confirm=<?php echo $row["Username"];?>">
                                                    <img src="../assets/images/deactivate-24px.png" class="img-link" alt="Deactivate" title="Deactivate">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php    
                                }
                            }
                            if (mysqli_num_rows($accounts) == 0) { ?>
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

            <div class="modal" id="modal">
                <section class="modal-content">
                    <form method="post" class="form-body" id="accounts-form">

                        <header class="form-header">
                            <h3>Account Form</h3>
                            <button type="button" class="close-btn" onclick="closeForm();"></button>
                        </header>

                        <fieldset class="account-details">
                            <div class="input-group">
                                <label for="">Username</label>
                                <input type="text" name="username" value="<?php echo ($editState == true ? $username : ''); ?>" placeholder="Enter user ID" required="required">
                            </div>
                            <div class="input-group">
                                <label for="">Phone Number</label>
                                <input type="tel" pattern="[0-9]{11}" name="phone-num" value="<?php echo ($editState == true ? $phoneNum : ''); ?>" placeholder="Enter phone number" required="required">
                            </div>
                            <div class="input-group">
                                <label for="">Password</label>
                                <div class="input-icon-group">
                                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must be at least 8 characters and contain a mix of upper and lowercase letters, numbers and special characters." value="<?php echo ($editState == true ? $password : ''); ?>" placeholder="Enter password" required="required">
                                    <img src="../assets/images/hide-24px.png" onclick="showPass();" id="pass-icon" alt="Show password">
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="account-status">Status</label>
                                <select name="account-status" selected="<?php echo $accStatus ?>" required="required">
                                    <option value="" <?php if (($editState) && ($accStatus == "")) echo "selected" ?>>...</option>
                                    <option value="Active" <?php if (($editState) && ($accStatus == "Active")) echo "selected" ?>>Active</option>
                                    <option value="Deactivated" <?php if (($editState) && ($accStatus == "Deactivated")) echo "selected" ?>>Deactivated</option>
                                </select>
                            </div>
                        </fieldset>

                        <div class="form-buttons">
                            <button type="button" name="cancel" id="cancel-btn" class="light-btn" onclick="closeForm();">Cancel</button>
                            <button type="submit" name="add" id="add-btn" class="dark-btn">Add</button>
                            <button type="submit" name="update" id="update-btn" class="dark-btn">Update</button>
                        </div>
                        
                    </form>
                </section>
            </div>

            <?php
            $title = "Deactivation";
            $prompt = "
            <p>Do you want to deactivate this account? You can reactivate it later, if you wish.</p>
            <h4>Access to Vax-Care</h4>
            <p>This user will no longer be able to access Vax-Care unless reactivated.</p>
            <h4>Data Retention</h4>
            <p>This user's details and schedules will still appear on the records and reports.</p>
            ";
            include "../templates/confirm-box.php";
            ?>
        
        </main>

        <script type="text/javascript" src="../assets/js/modal.js" defer></script>
        <script type="text/javascript" src="../assets/js/password.js" defer></script>
    </body>
</html>