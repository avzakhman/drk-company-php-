<?php
    /*
    Template Name: blog-page
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>  / <span class="p-16-template"> Blog</span>
        </nav>

        <section class="blog-contents">
            <h2 class="h2-template">Blog und Infoportal Datenrettung</h2>
            <h3 class="h3-template">Die Markierung</h3>

            <nav class="blog-contents__tags">
                <button id="windows" class="blog-contents__tags_pressed">
                    Windows
                </button>
                <button id="windows-10">
                    Windows 10 
                </button>
                <button id="geloschte-dateien">
                    Gelöschte Dateien
                </button>
                <button id="usb-stick">
                    USB-Stick
                </button>
                <button id="die-festplatte">
                    Die Festplatte
                </button>
                <button id="sd-karte">
                    SD-Karte
                </button>
                <button id="raid">
                    RAID
                </button>
                <button id="dateien-wiederherstellen">
                    Dateien wiederherstellen
                </button>
                <button id="externe-festplatte">
                    Externe Festplatte
                </button>
                <button id="nas">
                    NAS
                </button>
                <button id="hdd-festplatte">
                    HDD Festplatte
                </button>
                <button id="datenrettung-mac">
                    Datenrettung MAC
                </button>
                <button id="ssd-festplatten">
                    SSD Festplatten
                </button>
                <button id="festplatte-reparieren">
                    Festplatte Reparieren
                </button>
                <button id="server-datenrettung">
                    Server Datenrettung
                </button>
                <button id="raid-festplatte">
                    RAID Festplatte
                </button>
            </nav>
            <div class="blog-contents__posts">
                <a href="<?php the_field('post_ref_1');?>" class="blog-post die-festplatte geloschte-dateien hdd-festplatte raid raid-festplatte">
                    <img src="<?php echo bloginfo('template_url')?>/assets/img/blog/01.png" alt="01">
                    <h3 class="h3-template">Datenrettung von defekten und gelöschten Festplatten</h3>
                    <div class="blog-post__tags">
                        <button class="post-tag" id="die-festplatte">Die Festplatte</button>
                        <button class="post-tag" id="geloschte-dateien">Gelöschte Dateien</button>
                        <button class="post-tag" id="hdd-festplatte">HDD Festplatte</button>
                        <button class="post-tag" id="raid">RAID</button>
                        <button class="post-tag" id="raid-festplatte">RAID Festplatte</button>
                    </div>
                </a>
                <a href="<?php the_field('post_ref_2');?>" class="blog-post geloschte-dateien raid raid-festplatte server-datenrettung nas">
                    <img src="<?php echo bloginfo('template_url')?>/assets/img/blog/02.png" alt="02">
                    <h3 class="h3-template">Datenrettung von RAID-Arrays</h3>
                    <div class="blog-post__tags">
                        <button class="post-tag" id="geloschte-dateien">Gelöschte Dateien</button>
                        <button class="post-tag" id="raid">RAID</button>
                        <button class="post-tag" id="raid-festplatte">RAID Festplatte</button>
                        <button class="post-tag" id="server-datenrettung">Server Datenrettung</button>
                        <button class="post-tag" id="nas">NAS</button>
                    </div>
                </a>
                <a href="<?php the_field('post_ref_3');?>" class="blog-post geloschte-dateien sd-karte dateien-wiederherstellen">
                    <img src="<?php echo bloginfo('template_url')?>/assets/img/blog/03.png" alt="03">
                    <h3 class="h3-template">Wiederherstellen von gelöschten Ordner und Daten auf dem PC</h3>
                    <div class="blog-post__tags">
                        <button class="post-tag" id="geloschte-dateien">Gelöschte Dateien</button>
                        <button class="post-tag" id="sd-karte">SD-Karte</button>
                        <button class="post-tag" id="dateien-wiederherstellen">Dateien wiederherstellen</button>
                    </div>
                </a>
                <a href="<?php the_field('post_ref_4');?>" class="blog-post geloschte-dateien dateien-wiederherstellen windows windows-10">
                    <img src="<?php echo bloginfo('template_url')?>/assets/img/blog/04.png" alt="04">
                    <h3 class="h3-template">Wiederherstellen von gelöschten Dateien (Windows 7, 10)</h3>
                    <div class="blog-post__tags">
                        <button class="post-tag" id="geloschte-dateien">Gelöschte Dateien</button>
                        <button class="post-tag" id="dateien-wiederherstellen">Dateien wiederherstellen</button>
                        <button class="post-tag" id="windows">Windows</button>
                        <button class="post-tag" id="windows-10">Windows 10</button>
                    </div>
                </a>
            </div>
            <div class="blog-contents__notfound blog-post_hidden">
                <h2 class="h2-template">no posts found :(</h2>
            </div>
        </section>


    </div>

    <section class="analyse">
        <div class="analyse__decoration">
            <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/10.svg" alt="10" class="analyse__decoration_1">
            <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/08.png" alt="5" class="analyse__decoration_2">
            <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/09.svg" alt="5" class="analyse__decoration_3">
            <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/02.png" alt="5" class="analyse__decoration_4">
        </div>
        <div class="container">
            <div class="analyse__wrapper">
                <h2 class="h2-template">
                    <?php
                        the_field('template-analyse_heading');
                    ?>
                </h2>
                <h3 class="h3-template">
                    <?php
                        the_field('template-analyse_descr');
                    ?>
                </h3>
                <a href="<?php the_field('template-analyse_ref');?>" class="button-template"> Daten wiederherstellen</a>
            </div>
        </div>
    </section>
    <section class="fragen-tabs">
        <div class="container">
            <h2 class="h2-template">
                <?php
                    the_field('template-fragen-tabs_heading');
                ?>
            </h2>
            <div class="fragen-tabs__wrapper">
                <article class="fragen-tabs__card">
                    <header>
                        <h3 class="h3-template">
                            <?php
                                the_field('template-fragen-tabs_heading_1');
                            ?>
                        </h3>
                        <div class="fragen-tabs__open">
                            <span></span>
                            <span></span>
                        </div>
                    </header>
                    <div class="fragen-tabs__content">
                        <p class="p-16-template">
                            <?php
                                the_field('template-fragen-tabs_paragraph_1');
                            ?>
                        </p>
                    </div>
                </article>
                <article class="fragen-tabs__card">
                    <header>
                        <h3 class="h3-template">
                            <?php
                                the_field('template-fragen-tabs_heading_2');
                            ?>
                        </h3>
                        <div class="fragen-tabs__open">
                            <span></span>
                            <span></span>
                        </div>
                    </header>
                    <div class="fragen-tabs__content">
                        <p class="p-16-template">
                            <?php
                                the_field('template-fragen-tabs_paragraph_2');
                            ?>
                        </p>
                    </div>
                </article>
                <article class="fragen-tabs__card">
                    <header>
                        <h3 class="h3-template">
                            <?php
                                the_field('template-fragen-tabs_heading_3');
                            ?>
                        </h3>
                        <div class="fragen-tabs__open">
                            <span></span>
                            <span></span>
                        </div>
                    </header>
                    <div class="fragen-tabs__content">
                        <ul>
                            <li><p class="p-16-template"> <?php the_field('template-fragen-tabs_paragraph_3-1');?></p></li>
                            <li><p class="p-16-template"> <?php the_field('template-fragen-tabs_paragraph_3-2');?></p></p>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="fragen-tabs__card">
                    <header>
                        <h3 class="h3-template">
                            <?php
                                the_field('template-fragen-tabs_heading_4');
                            ?>
                        </h3>
                        <div class="fragen-tabs__open">
                            <span></span>
                            <span></span>
                        </div>
                    </header>
                    <div class="fragen-tabs__content">
                        <p class="p-16-template">
                            <?php
                                the_field('template-fragen-tabs_paragraph_4');
                            ?>
                        </p>
                    </div>
                </article>
                <article class="fragen-tabs__card">
                    <header>
                        <h3 class="h3-template">
                            <?php
                                the_field('template-fragen-tabs_heading_5');
                            ?>
                        </h3>
                        <div class="fragen-tabs__open">
                            <span></span>
                            <span></span>
                        </div>
                    </header>
                    <div class="fragen-tabs__content">
                        <p class="p-16-template">
                            <?php
                                the_field('template-fragen-tabs_paragraph_5');
                            ?>
                        </p>
                    </div>
                </article>
            </div>
            <a href="<?php the_field('template-fragen-tabs_ref');?>">Zu häufig gestellte Fragen</a>
        </div>
    </section>
</main>



<?php
    get_footer();
?>