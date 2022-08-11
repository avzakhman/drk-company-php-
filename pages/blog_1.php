<?php
    /*
    Template Name: blog_1
    */
?>

<?php
    get_header();
?>


<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>  / <span class="p-16-template"><a class="p-16-blue-template" href="<?php the_field('blog-page_ref');?>">Blog</a> / Datenrettung von defekten und gelöschten Festplatten</span>
        </nav>

        <section class="post-contents">
            <h2 class="h2-template">Datenrettung von defekten und gelöschten Festplatten</h2>
            <div class="post-contents__wrapper">
                <p class="p-16-template post-contents__1">Datenrettungsklinik in Freiburg – bittet ein Service zur Datenrettung  des jeglichen Zwecks aus allen Arten von Trägern an. Wir beschäftigen uns mit der Datenrettung von defekten Speichermedium, auch nach den erfolglosen Versuchen der anderen Unternehmen. Wir empfehlen nicht, selbst die Daten mit der Hilfe von den kostenlosen Dienstprogrammen wiederherzustellen. Denn das fremde Einwirken wird die Situation nur erschweren und das Risiko eines dauerhaften Verlusts von Dateien erhöhen.</p>

                <div class="post-contents__2">
                    <p class="p-16-template">Unsere Hauptrichtung ist die Wiederherstellung von Festplatten HDD (Hard Disk Drive), SSD (Solid State Drive), Flash Drives (USB Flash Drive, CD, MMC, CF, etc.), RAID-Arrays verschiedener Level (0, 1, 4, 5, 6, 10, 50, Hybrid) mit unterschiedlichem Schadensgrad (logisch und physisch).</p>
                </div>

                <div class="post-contents__3">
                    <picture>
                        <source srcset="<?php echo bloginfo('template_url')?>/assets/img/blog/01.png" media="(min-width: 1025px)" />
                        <source srcset="<?php echo bloginfo('template_url')?>/assets/img/blog/mobile/01.png" media="(max-width: 1024px)" />
                        <img src="<?php echo bloginfo('template_url')?>/assets/img/blog/01.png" />
                    </picture>
                </div>
                <p class="p-16-template post-contents__4">Falls Sie einen Datenverlust zu beklagen haben, kontaktieren Sie uns unverbindlich und kostenfrei unter <a href="tel:+4908004090908" class="p-16-blue-template">+ 49 (0) 800 409 09 08.</a></p>
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