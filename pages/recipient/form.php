<?php
session_start();
if(empty($_SESSION["recipient-username"]) || $_SESSION["recipient-username"] == "") {
    header("location: ../../index.php");
    exit;
}
include "../../backend/recipient/_form.php";
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
        include "../templates/sidebar-recipient.php";
        $pageTitle = "Recipient Form";
        include "../templates/header.php";
        ?>

        <main>
            <section class="form-container">
                <span>Show recipient form for:&nbsp;<span>
                <button class="mini-btn" id="pregnant-btn" onclick="showPregnantForm()">Pregnant Woman</button>
                <button class="mini-btn" id="newborn-btn" onclick="showNewbornForm()">Newborn</button>
            </section>

            <section class="form-container">
                <form class="form-body" id="newborn-form" method="post">

                    <header class="form-header">
                        <h3>Newborn Form</h3>
                    </header>
                    
                    <fieldset class="personal-details">
                        <div class="input-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last-name" placeholder="Enter last name" required>
                        </div>
                        <div class="input-group">
                            <label for="">First Name</label>
                            <input type="text" name="first-name" placeholder="Enter first name" required>
                        </div>
                        <div class="input-group">
                            <label for="">Middle Name</label>
                            <input type="text" name="middle-name" placeholder="Enter middle name">
                        </div>
                        <div class="input-group">
                            <label for="">Date of Birth</label>
                            <input type="date" name="dob" required>
                        </div>
                        <div class="input-group">
                            <label for="sex">Sex</label>
                            <select name="sex" required>
                                <option value="">...</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="">Address</label>
                            <input type="text" name="address" placeholder="Enter address" required>
                        </div>
                    </fieldset>
                    
                    <fieldset class="contact-info">
                        <legend>IN CASE OF EMERGENCY</legend>
                        <div class="input-group">
                            <label for="">Guardian Name</label>
                            <input type="text" name="guardian" placeholder="Enter guardian name" required>
                        </div>
                        <div class="input-group">
                            <label for="">Phone Number</label>
                            <input type="tel" pattern="[0-9]{11}" name="phone-num" value="<?php echo $_SESSION["phoneNum"] ?>" placeholder="e.g. 09123456789" required>
                        </div>
                    </fieldset>

                    <div class="form-buttons">
                        <button type="submit" id="submit-btn" name="add-newborn" class="dark-btn">Submit</button>
                        <button type="reset" id="reset-btn" class="light-btn" onclick="closeForm();">Reset</button>
                    </div>

                </form>

                <form class="form-body" id="pregnant-form" method="post">

                    <header class="form-header">
                        <h3>Pregnant Woman Form</h3>
                    </header>
                    
                    <fieldset class="personal-details">
                        <div class="input-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last-name" placeholder="Enter last name" required>
                        </div>
                        <div class="input-group">
                            <label for="">First Name</label>
                            <input type="text" name="first-name" placeholder="Enter first name" required>
                        </div>
                        <div class="input-group">
                            <label for="">Middle Name</label>
                            <input type="text" name="middle-name" placeholder="Enter middle name">
                        </div>
                        <div class="input-group">
                            <label for="">Last Menstrual Period (LMP)</label>
                            <input type="date" name="lmp" required>
                        </div>
                        <div class="input-group">
                            <label for="">Estimated Due Date (EDD)</label>
                            <input type="date" name="edd" required>
                        </div>
                        <div class="input-group">
                            <label for="trimester">Pregnancy Trimester</label>
                            <select name="trimester" required>
                                <option value="">...</option>
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Third">Third</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="">Address</label>
                            <input type="text" name="address" placeholder="Enter address" required>
                        </div>
                        <div class="input-group">
                            <label for="">Phone Number</label>
                            <input type="tel" pattern="[0-9]{11}" name="phone-num" value="<?php echo $_SESSION["phoneNum"] ?>" placeholder="e.g. 09123456789" required>
                        </div>
                    </fieldset>

                    <div class="form-buttons">
                        <button type="submit" id="submit-btn" name="add-pregnant" class="dark-btn">Submit</button>
                        <button type="reset" id="reset-btn" class="light-btn" onclick="closeForm();">Reset</button>
                    </div>

                </form>
            </section>
        </main>

        <script type="text/javascript" src="../assets/js/form.js" defer></script>
    </body>
</html> 