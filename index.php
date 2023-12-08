<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Welcome to Vax-Care!</title>
        <link rel="stylesheet" href="pages/assets/css/homepage.css">
        <link rel="icon" href="pages/assets/images/favicon.png">
    </head>
    <body>
        <header>
            <nav class="nav-bar">
                <div>
                    <a href="index.php">
                        <img class="logo" src="pages/assets/images/logo-hr-70px.png" alt="Vax-Care's logo: A mother with a baby in her arms">
                    </a>  
                </div> 
                <div class="nav-toggle">
                    <img class="nav-toggle-icon" src="pages/assets/images/menu-16px.png" alt="Menu.">
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME']=='/vax-care/index.php#home') { echo 'active'; } ?>" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <button id="sign-in-btn" class="dark-btn" onclick="window.location.href = 'pages/recipient/login-recipient.php';">Login</button>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="home" class="section-container grid">
                <div class="home-data">
                    <h1 class="home-title">Safeguarding pregnant women and infants</h1>
                    <p class="home-desc">The maintenance of immunization records ensures that pregnant women and infants' needs are met comprehensively. By leveraging Vax-Care, BHWs can manage electronic immunization records while retaining their integrity and authenticity.</p>
                </div>
                <div class="home-img">
                    <img src="pages/assets/images/syringe-400px.png" alt="A vaccine syringe.">
                    <img src="pages/assets/images/vaccine-400px.png" alt="A vaccine bottle.">
                </div>
            </section>
            <section id="about" class="section-container">
                <h2 class="about-title">Unlocking Efficiency, Empowering Progress</h2><br>
                <p class="about-desc">Vax-Care is a cutting-edge records management system designed to streamline the cumbersome process of handling immunization data.  From vaccine schedules to historical records, the system provides a centralized and standardized repository, fostering collaboration and effiency among BHWs.</p><br>
                <div class="about-container grid">
                    <div class="about-card"> 
                        <div class="about-img">
                            <img src="pages/assets/images/check-40px.png" alt="A decorative check icon.">
                        </div>
                        <div class="about-data accuracy">
                            <h3 class="about-data-title">Accuracy</h3>
                            <ul class="about-data-desc">
                                <li>Standardized data formats</li>
                                <li>Elimination of redundant data</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-card">
                        <div class="about-img">
                            <img src="pages/assets/images/check-40px.png" alt="A decorative check icon.">
                        </div>
                        <div class="about-data quality">
                            <h3 class="about-data-title">Quality</h3>
                            <ul class="about-data-desc">
                                <li>Automated recordkeeping</li>
                                <li>Vaccination traceability</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about-card">
                        <div class="about-img">
                            <img src="pages/assets/images/check-40px.png" alt="A decorative check icon.">
                        </div>
                        <div class="about-data confidentiality">
                            <h3 class="about-data-title">Confidentiality</h3>
                            <ul class="about-data-desc">
                                <li>User authentication</li>
                                <li>Access controls</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="section-container grid">
                <div class="contact-data">
                    <h1 class="contact-title">Get in Touch</h1><br>
                    <h3 class="contact-desc">Are you ready to schedule your vaccination? Or maybe you still have some questions?</h3><br>
                    <p class="contact-desc">We have all the answers!</p>
                    <p class="contact-desc">Give us a call during work hours, and we will get back to you as quickly as possible.</p>
                </div>
                <div class="contact-img">
                    <img src="pages/assets/images/telephone-300px.png" alt="A pink telephone.">
                </div>
            </section>
            <footer class="footer-section grid">
                <div class="footer-container">
                    <div class="footer-data">
                        <p class="footer-title">CONTACT US</p>
                        <p class="footer-content">(043) xxx xxxx<br>(+63) xxx xxx xxxx</p>
                    </div>
                    <div class="footer-data">
                        <p class="footer-title">ABOUT US</p>
                        <a class="footer-link" href="#about">Our Commitment</a><br>
                        <a class="footer-link" href="#">Our Services</a>
                    </div>
                    <div class="footer-data">
                        <p class="footer-title">GET STARTED</p>
                        <a class="footer-link" href="#">Register</a><br>
                        <a class="footer-link" href="#">Login</a>
                    </div>
                </div>
                <div class="footer-data">
                    <p class="footer-content copyright-notice">© 2023 Vax-Care. All rights reserved.</p>
                </div>
            </footer>
        </main>
    </body>
</html>