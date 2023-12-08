<input type="checkbox" id="menu-toggle">

<aside class="sidebar">
    <div class="sidebar-logo flex-center">
        <label for="menu-toggle">
            <img class="toggle" src="../assets/images/menu-30px.png" alt="Menu">
        </label>
        <a href="../../index.php" target="_blank">
            <img class="logo" src="../assets/images/logo.png" width="100px"  alt="Vax-Care's logo: A mother with a baby in her arms"/>
        </a>
    </div>

    <div class="sidebar-menu flex-center">
        <ul>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/recipient/home.php") { echo 'active'; } ?>">
                <a href="home.php" target="_self">
                    <img src="../assets/images/home-24px.png" alt="Home">
                    <span>Home</span>
                </a>
            </li>
            <?php
            if ($_SESSION["submitted"]){ ?>
                <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/recipient/ibooklet.php") { echo 'active'; } ?>"">
                    <a href="ibooklet.php" target="_blank">
                        <img src="../assets/images/ibooklet-24px.png" alt="I-Booklet">
                        <span>I-Booklet</span>
                    </a>
                </li>
            <?php
            }
            else { ?>
                <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/recipient/form.php") { echo 'active'; } ?>">
                    <a href="form.php">
                        <img src="../assets/images/form-24px.png" alt="Form">
                        <span>Recipient Form</span>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</aside>