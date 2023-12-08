<?php
session_start();
$_SESSION["accRole"] = "Admin";

include("backend/_login-register.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care: Login as Admin</title>
        <link rel="stylesheet" href="pages/assets/css/login-register.css">
        <link rel="icon" type="image/x-icon" href="pages/assets/images/favicon.png">
    </head>

    <body>
        <div class="booklet">
            <section class="active-page left" id="login-container">
                <form method="post" id="login-form">
                    <h1 class="form-title">Login</h1>
                    <p class="form-desc">Hi, admin. Fill in your login credentials.</p>
                    <div class="input-group">
                        <img src="pages/assets/images/user-24px.png" alt="User" required>
                        <input type="text" name="username" class="form-input" placeholder="Enter username" required>
                    </div>
                    <div class="input-group">
                        <img src="pages/assets/images/password-24px.png" alt="Password">
                        <div class="input-icon-group">
                            <input type="password" name="password" id="password" placeholder="Enter password" required>
                            <img src="pages/assets/images/hide-24px.png" onclick="showPass();" id="pass-icon" alt="Password toggle">
                        </div>
                    </div>
                    <button type="submit" id="login-btn" name="login" class="dark-btn">Login</button>
                </form>
            </section>

            <section class="inactive-page right">
                <div class="logo-wrapper">
                    <a href="index.php">
                        <img class="logo" src="pages/assets/images/logo.png" alt="Vax-Care's logo: A mother with a baby in her arms">
                    </a>
                </div>
            </section>
        </div>
        
        <script type="text/javascript" src="pages/assets/js/password.js" defer></script>
        <script type="text/javascript" src="pages/assets/js/modal.js"></script>
    </body>
</html>