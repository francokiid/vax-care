<?php
session_start();
$_SESSION["accRole"] = "Recipient";
include("../../backend/_login-register.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Register as Recipient</title>
        <link rel="stylesheet" href="../assets/css/login-register.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <div class="booklet" id="booklet">
            <section class="active-page right" id="register-page">
                <form method="post" id="register-form">
                    <h1 class="form-title">Register</h1>
                    <p class="form-desc">Already have an account? <a href="login-recipient.php" id="login-link">Login!</a></p>

                    <div class="input-group">
                        <img src="../assets/images/user-24px.png" alt="User">
                        <input type="text" name="r-username" class="form-input" placeholder="Enter username" required>
                    </div>
                    <div class="input-group">
                        <img src="../assets/images/contact-24px.png" alt="Contact">
                        <input type="tel" pattern="[0-9]{11}" name="r-phone-num" placeholder="e.g. 09123456789" title="Must be 11 digits and start with '09'" required>
                    </div>
                    <div class="input-group">
                        <img src="../assets/images/password-24px.png" alt="Password">
                        <div class="input-icon-group">
                            <input type="password" name="r-password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter password" title="Must be at least 8 characters and contain a mix of upper and lowercase letters, numbers and special characters." required>
                            <img src="../assets/images/hide-24px.png" onclick="showPass();" id="pass-icon" alt="Show password">
                        </div>
                    </div>
                    <div class="input-group">
                        <img src="../assets/images/cpassword-24px.png" alt="Password">
                        <div class="input-icon-group">
                            <input type="password" name="r-c-password" id="c-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm password" required>
                            <img src="../assets/images/hide-24px.png" onclick="showPass();" id="pass-icon" alt="Show password">
                        </div>
                    </div>

                    <button type="submit" name='register' id="register-btn" class="dark-btn">Register</button>
                    
                </form>
            </section>

            <section class="inactive-page left" id="inactive-page">
                <div class="logo-wrapper">
                    <a href="index.php">
                        <img class="logo" src="../assets/images/logo.png" alt="Vax-Care's logo: A mother with a baby in her arms">
                    </a>
                </div>
            </section>
        </div>

        <script type="text/javascript" src="../assets/js/password.js" defer></script>
        <script type="text/javascript" src="../assets/js/login-register.js" defer></script>
    </body>
</html>