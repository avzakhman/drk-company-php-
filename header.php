
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>

    <?php  

        wp_head();

    ?>
</head>

<body>

    <header class="header">
        <div class="header__wrapper">
            <div class="header__info">
                <div class="container">
                    <a href="/"><img src="<?php echo bloginfo('template_url')?>/assets/icons/logo.svg" alt="logo"></a>
                    <p>Öffnungszeiten: <br>Mo-Fr 9.00-17.00 Uhr</p>
                    <p>Beratung: <br>rund um die Uhr</p>
                    <div class="header__phone">
                        <a href="tel:+4908004090908">+49 (0) 800 409 09 08</a><br>
                        kostenfrei anrufen
                    </div>
                    <button class="header__lang">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/lang.svg" alt="icons">
                        DE
                        <?php 
                            wp_nav_menu( [
                                'menu'            => 'Languages',
                                'container'       => false,
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul  class="header__lang-list">%3$s</ul>',
                                'depth'           => 1
                            ] );
                        ?>
                        <!-- <ul class="">
                            <li><a href="#">Deutsch (DE)</a></li>
                            <li><a href="#">English (EN)</a></li>
                            <li><a href="#">Français (FR)</a></li>
                        </ul> -->
                    </button>
                    <a href="https://www.drk-company.de/daten-wiederherstellen/" class="button-template header__button">
                        Daten Wiederherstellen
                    </a>
                    <!-- <a href="form.html" class="button-template header__button">Daten wiederherstellen</a> -->
                </div>
            </div>
            <div class="header-menu">
                <div class="header-menu__header">
                    <div class="container">
                        <button class="header-menu__button">
                            <div class="header-menu__button-spans">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <p>Datenrettung</p>
                        </button>
                            <ul style="list-style:none" class="header-menu__link">
                                <!-- <a href="preise.html">Preise</a> -->
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Preise',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 1
                                    ] );
                                ?>
                            </ul>
                            <ul style="list-style:none" class="header-menu__link">
                                <!-- <a href="ablauf.html" >Ablaufe</a> -->
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Ablauf',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 1
                                    ] );
                                ?>
                            </ul>
                            <ul style="list-style:none" class="header-menu__link">
                                <!-- <a href="aufbau.html">Express-Servise</a> -->
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Express-Servise',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 1
                                    ] );
                                ?>
                            </ul>    
                        <div href="#" class="header-menu__link">
                            <p>Unternehmen / Privatkunden</p>
                            <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="link">
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Unternehmen / Privatkunden',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul  class="header-menu__sublinks">%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                            <!-- <ul class="header-menu__sublinks">
                                
                                <li><a href="aufbau.html">Unternehmen</a></li>
                                <li><a href="aufbau.html">Privatkunden</a></li>
                            </ul> -->
                        </div>
                        <div class="header-menu__link">
                            <p>Informationen</p>
                            <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="link">
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Informationen',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul  class="header-menu__sublinks">%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                            <!-- <ul class="header-menu__sublinks">
                                <li><a href="aufbau.html">Über uns</a></li>
                                <li><a href="aufbau.html">FAQ</a></li>
                                <li><a href="aufbau.html">Blog</a></li>
                                <li><a href="impressum.html">Impressum</a></li>
                                <li><a href="agb.html">AGB</a></li>
                                <li><a href="widerrufsformular.html">Widerrursformular</a></li>
                                <li><a href="widerrufsbelehrung.html">Widerrufsbelehrung</a></li>
                                <li><a href="datenschutzerklarung.html">Datenschutzerklärung</a></li>
                                <li><a href="kontakt.html">Kontakt</a></li>
                            </ul> -->
                        </div>
                        <a href="https://www.drk-company.de/daten-wiederherstellen/" class="button-template header__button">
                        Daten Wiederherstellen
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-menu__body">
                <div class="header-menu__decor">
                    <img class="header-menu__decor_1" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/10.svg" alt="03">
                    <img class="header-menu__decor_2" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/11.svg" alt="02">
                    <img class="header-menu__decor_3" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/09.svg" alt="01">
                    <img class="header-menu__decor_4" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/11.svg" alt="02">
                </div>
                <div class="container">
                    <h1>Alle Datenwiederherstellungsdienste in Datenrettungsklinik</h1>
                    <div class="header-menu__refs">
                        <div class="header-menu__ref-block">
                            <h2>Festplatten</h2>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Festplatten',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul>%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                            <!-- <ul>
                                <li><a href="aufbau.html">Datenrettung Festplatte (HDD)</a></li>
                                <li><a href="aufbau.html">Datenrettung SSD</a></li>
                                <li><a href="aufbau.html">Datenrettung externe Festplatte</a></li>
                            </ul> -->
                            <h2>Flash-Speicher</h2>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Flash-Speicher',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul>%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                            <!-- <ul>
                                <li><a href="aufbau.html">Datenrettung externe Festplatte</a></li>
                                <li><a href="aufbau.html">Datenrettung USB-Stick</a></li>
                                <li><a href="aufbau.html">Datenrettung SD-Karte <br>und MikroSD Karte</a></li>
                            </ul> -->
                            <h2>Dateien</h2>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'Dateien',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul>%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                        </div>
                        <div class="header-menu__ref-block">
                            <h2>System</h2>
                            <?php
                                wp_nav_menu( [
                                    'menu'            => 'System',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul>%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                            <h2>Raid/Server</h2>
                            <ul>
                                <li><a href="https://www.drk-company.de/raid-datenrettung/">Raid Datenrettung</a></li>
                            <li class="header-menu__ref-stack">
                                <a href="https://www.drk-company.de/nas-datenrettung/">NAS Datenrettung</a>
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'NAS Datenrettung',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                        'depth'           => 1
                                    ] );
                                ?>
                            </li>
                            <li><a href="https://www.drk-company.de/server-datenrettung/">Server Datenrettung</a></li>
                            <li><a href="https://www.drk-company.de/san-datenrettung/">SAN Datenrettung</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-mobile">
                    <div class="menu-mobile__header">
                        <button class="header__lang">
                            <img src="<?php echo bloginfo('template_url')?>/assets/icons/lang.svg" alt="icons">
                            DE
                            <?php 
                                wp_nav_menu( [
                                    'menu'            => 'Languages',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul  class="header__lang-list">%3$s</ul>',
                                    'depth'           => 1
                                ] );
                            ?>
                            <!-- <ul class="header__lang-list">
                                <li><a href="#">Deutsch (DE)</a></li>
                                <li><a href="#">English (EN)</a></li>
                                <li><a href="#">Français (FR)</a></li>
                            </ul> -->
                        </button>
                        <button id="menu-close">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="menu-mobile__options">
                        <div id="test-line_1" class="menu-mobile__option menu-mobile__option_contains">
                            <h2>Datenrettung</h2>
                            <div class="menu-mobile__suboptions">
                                <p class="menu-mobile__zuruck">Zurück</p>
                                <h2>Festplatten</h2>
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Festplatten',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                        'depth'           => 1
                                    ] );
                                ?>
                                <h2>Flash-Speicher</h2>
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Flash-Speicher',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                        'depth'           => 1
                                    ] );
                                ?>
                                <h2>Dateien</h2>
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'Dateien',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                        'depth'           => 1
                                    ] );
                                ?>
                                <h2>System</h2>
                                <?php
                                    wp_nav_menu( [
                                        'menu'            => 'System',
                                        'container'       => false,
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                        'depth'           => 1
                                    ] );
                                ?>
                                <h2>Raid/Server</h2>
                                <ul>
                                    <li><a href="https://www.drk-company.de/raid-datenrettung/">Raid Datenrettung</a></li>
                                    <li>
                                        <a href="https://www.drk-company.de/nas-datenrettung/">NAS Datenrettung</a>
                                        <?php
                                            wp_nav_menu( [
                                                'menu'            => 'NAS Datenrettung',
                                                'container'       => false,
                                                'echo'            => true,
                                                'fallback_cb'     => 'wp_page_menu',
                                                'items_wrap'      => '<ul>%3$s</ul>',
                                                'depth'           => 1
                                            ] );
                                        ?>
                                    </li>
                                    <li><a href="https://www.drk-company.de/server-datenrettung/">Server Datenrettung</a></li>
                                    <li><a href="https://www.drk-company.de/san-datenrettung/">SAN Datenrettung</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul>
                            <li class="menu-mobile__option">
                                <a href="https://www.drk-company.de/datenrettung-preise/">Preise</a>
                            </li>
                            <li class="menu-mobile__option">
                                <a href="https://www.drk-company.de/datenrettung-ablauf/">Ablauf</a>
                            </li>
                            <li class="menu-mobile__option">
                                <a href="https://www.drk-company.de/page-aufbau/">Express-Servise</a>
                            </li>
                        </ul>
                        <div id= "test-line_2" class="menu-mobile__option menu-mobile__option_contains">
                            <h2>Unternehmen / Privatkunden</h2>
                            <ul class="menu-mobile__suboptions">
                                <p class="menu-mobile__zuruck">Zurück</p>
                                <!-- <li><a href="aufbau.html">Unternehmen</a></li>
                                <li><a href="aufbau.html">Privatkunden</a></li> -->
                                <?php
                                wp_nav_menu( [
                                    'menu'            => 'Unternehmen / Privatkunden',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 1
                                ] );
                                ?>
                            </ul>
                        </div>
                        <div id= "test-line_3" class="menu-mobile__option menu-mobile__option_contains">
                            <h2>Informationen</h2>
                            <ul class="menu-mobile__suboptions">
                                <p class="menu-mobile__zuruck">Zurück</p>
                                <!-- <ul>
                                    <li><a href="aufbau.html">Über uns</a></li>
                                    <li><a href="aufbau.html">FAQ</a></li>
                                    <li><a href="aufbau.html">Blog</a></li>
                                    <li><a href="impressum.html">Impressum</a></li>
                                    <li><a href="agb.html">AGB</a></li>
                                    <li><a href="widerrufsformular.html">Widerrursformular</a></li>
                                    <li><a href="widerrufsbelehrung.html">Widerrufsbelehrung</a></li>
                                    <li><a href="datenschutzerklarung.html">Datenschutzerklärung</a></li>
                                    <li><a href="kontakt.html">Kontakt</a></li>
                                </ul> -->
                                <?php
                                wp_nav_menu( [
                                    'menu'            => 'Informationen',
                                    'container'       => false,
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '%3$s',
                                    'depth'           => 1
                                ] );
                            ?> 
                            </ul>
                        </div>
                    </div>
                    <div class="menu-mobile__info">
                        <?php 
                            wp_nav_menu( [
                                'menu'            => 'Daten wiederherstellen',
                                'container'       => false,
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="button-template menu-mobile__button">%3$s</ul>',
                                'depth'           => 1
                            ] );
                        ?>
                        <a href="tel:+4908004090908" class="menu-mobile__phone">+49 (0) 800 409 09 08 <br>
                            <span>kostenfrei anrufen</span>
                        </a>
                        <p>Beratung: rund um die Uhr</p>
                        <p>Öffnungszeiten: <br>
                            Mo-Fr 9.00-17.00 Uhr</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside class="cookies cookies__hidden">
        <div class="container">
            <div class="cookies__wrapper">
                <p>
                    Diese Seite verwendet Cookies. Indem Sie unsere Website besuchen, akzeptieren Sie unsere Nutzung von Cookies. Sollten Sie nicht damit einverstanden sein, informieren Sie sich, wie Cookies deaktiviert werden können.
                </p>
                <div class="cookies__buttons">
                    <button class="acceptCookies button-template">Ja, ich akzeptiere</button>
                    <a href="https://www.drk-company.de/datenrettung-datenshutzerklarung/">Mehr info</a>
                </div>
            </div>
        </div>
    </aside>

    <button class="button-template scrollUp scrollUp__hidden">
        <img src="<?php echo bloginfo('template_url')?>/assets/icons/scrollup.png" alt="">
    </button>
