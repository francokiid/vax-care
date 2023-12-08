<input type="checkbox" id="menu-toggle">

<aside class="sidebar">
    
    <div class="sidebar-logo flex-center">
        <label for="menu-toggle">
            <img class="toggle" src="../assets/images/menu-30px.png">
        </label>
        <a href="../../index.php" target="_blank">
            <img class="logo" src="../assets/images/logo.png" width="100px"  alt="Vax-Care's logo: A mother with a baby in her arms."/>
        </a>
    </div>

    <div class="sidebar-menu flex-center">
        <ul>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/bhw/dashboard.php") { echo 'active'; } ?>">
                <a href="dashboard.php" target="_self">
                    <img src="../assets/images/dashboard-24px.png" alt="Dashboard icon">
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/bhw/accounts.php") { echo 'active'; } ?>">
                <a href="accounts.php" target="_self">
                    <img src="../assets/images/accounts-24px.png" alt="Account icon">
                    <span>Accounts</span>
                </a>
            </li>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/bhw/inventory.php") { echo ' active'; } ?>">
                <a href="inventory.php" target="_self">
                    <img src="../assets/images/vaccines-24px.png" alt="Vaccine icon">
                    <span>Inventory</span>
                </a>
            </li>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/bhw/pregnant.php") { echo ' active'; } ?>">
                <a href="pregnant.php" target="_self">
                    <img src="../assets/images/pregnant-24px.png" alt="Pregnant icon">
                    <span>Pregnant</span>
                </a>
            </li>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/bhw/newborns.php") { echo ' active'; } ?>">
                <a href="newborns.php" target="_self" alt="Newborn icon">
                    <img src="../assets/images/newborn-24px.png">
                    <span>Newborns</span>
                </a>
            </li>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/bhw/schedules.php") { echo ' active'; } ?>">
                <a href="schedules.php" target="_self">
                    <img src="../assets/images/schedules-24px.png" alt="Schedule icon">
                    <span>Schedules</span>
                </a>
            </li>
            <li class="menu-item <?php if ($_SERVER['SCRIPT_NAME']=="/vax-care/pages/bhw/reports.php") { echo ' active'; } ?>">
                <a href="reports.php" target="_self">
                    <img src="../assets/images/reports-24px.png" alt="Report icon">
                    <span>Reports</span>
                </a>
            </li>
        </ul>
    </div>

</aside>