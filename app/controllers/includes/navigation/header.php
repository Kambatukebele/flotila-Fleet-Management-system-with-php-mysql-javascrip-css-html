<?php require_once "controller/controller_choose_lg.php"; ?>
<header>
        <div class="wrapper">
            <div class="wrapper_logo">
                <a href="index.php"><img src="model/public/images/transparentlogo.png" alt="logo"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php"><?php echo $lang['menu_home']; ?></a></li>
                    <li><a href="contact.php"><?php echo $lang['menu-contact']; ?></a></li>
                    <li><a href="registration.php"><?php echo $lang['menu-registration-driver']; ?></a></li>
                    <li><a href="change_fleet.php"><?php echo $lang['menu_change-fleet']; ?></a></li>
                    <li><button><a href="?lang=en"><?php echo $lang['lang_en']; ?></a></button></li>
                    <li><button><a href="?lang=cz"><?php echo $lang['lang_cz']; ?></a></button></li>
                </ul>
            </nav>
        </div>
    </header>

     <!-- ========== HIDDEN HEADER NAVIGATION ========== -->
    <header class="hidden_menu">
        <div class="hidden_menu_all">
            <div class="hidden_logo">
                <a href="index.php"><img src="model/public/images/transparentlogo.png" alt="logo"></a>
            </div>

            <div class="hidden_navigation_hamburger">
                <i class="fa-solid fa-bars fa-xl"></i>
            </div>
        </div>

        <div class="hidden_navigation">
            <nav>
                <ul>
                    <li><a href="index.php">Úvod</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                    <li><a href="registration.php">Zaregistruj se</a></li>
                    <li><a href="change_fleet.php">Změna flotily</a></li>
                    <li><button><a href="?lang=en"><?php echo $lang['lang_en']; ?></a></button></li>
                    <li><button><a href="?lang=cz"><?php echo $lang['lang_cz']; ?></a></button></li>
                </ul>
            </nav>
            <div class="hidden_nagivation_close">
                <i class="fa-solid fa-xmark fa-2xl"></i>
            </div>
        </div>
    </header>