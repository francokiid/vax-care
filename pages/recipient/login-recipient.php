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
        <title>Vax-Care: Login as Recipient</title>
        <link rel="stylesheet" href="../assets/css/login-register.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <div class="booklet" id="booklet">

            <section class="active-page left" id="login-page">
                <form method="post" id="login-form">
                    <h1 class="form-title">Login</h1>
                    <p class="form-desc">Don't have an account yet? <a href="register.php" id="register-link">Register!</a></p>
                    <div class="input-group">
                        <img src="../assets/images/user-24px.png" alt="User" required>
                        <input type="text" name="username" class="form-input" placeholder="Enter username" required>
                    </div>
                    <div class="input-group">
                        <img src="../assets/images/password-24px.png" alt="Password">
                        <div class="input-icon-group">
                            <input type="password" name="password" id="password" placeholder="Enter password" required>
                            <img src="../assets/images/hide-24px.png" onclick="showPass();" id="pass-icon" alt="Show password">
                        </div>
                    </div>
                    <button type="submit" id="login-btn" name="login" class="dark-btn">Log in</button>
                </form>
            </section>

            <section class="inactive-page right" id="inactive-page">
                <div class="logo-wrapper">
                    <a href="../../index.php">
                        <img class="logo" src="../assets/images/logo.png" alt="Vax-Care's logo: A mother with a baby in her arms.">
                    </a>
                </div>
            </section>
        </div>

        <script type="text/javascript" src="../assets/js/password.js" defer></script>
        <script type="text/javascript" src="../assets/js/login-register.js" defer></script>
    </body>
</html>