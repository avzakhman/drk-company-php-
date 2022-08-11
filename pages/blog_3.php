<?php
    /*
    Template Name: blog_3
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>  / <span class="p-16-template"><a class="p-16-blue-template" href="<?php the_field('blog-page_ref');?>">Blog</a> / Wiederherstellen von gelöschten Ordner und Daten auf dem PC</span>
        </nav>

        <section class="post-contents">
            <h2 class="h2-template">Wiederherstellen von gelöschten Ordner und Daten auf dem PC</h2>
            <div class="post-contents__wrapper">
                <p class="p-16-template post-contents__1">Die zufällige Formatierung oder das Löschen eines Ordners auf Ihrem PC (HDD), der für den Benutzer die wichtigen Informationen enthält, ist nicht so schlimm, wie es scheinen könnte. Die magnetische Speichermethode hinterlässt die Spuren im System. Daher kann man die Daten in meisten Fällen wiederherstellen. Sobald die Daten nicht überschrieben sind, werden die ausgelesen und gerettet.</p>

                <div class="post-contents__2">
                    <h3 class="h3-template">Wie schnell können Sie die Daten vom Datenträger wiederherstellen?</h3>
                    <p class="p-16-template">Wenn Sie keine Zeit auf die Versuche der Datenrettung von einer Festplatte verschwenden und die Aufgabe sofort den Spezialisten anvertrauen, müssen Sie nicht lange auf das Ergebnis warten. Die aktuellen Versionen der Softwarelösungen, die neuen Tools und die optimalen Arbeitsbedingungen ermöglichen dem Team der Datenrettungsklinik, die vollständige Datenrettung der gelöschten PC-Ordner durchzuführen. </p>
                </div>

                <div class="post-contents__3">
                    <picture>
                        <source srcset="<?php echo bloginfo('template_url')?>/assets/img/blog/03.png" media="(min-width: 1025px)" />
                        <source srcset="<?php echo bloginfo('template_url')?>/assets/img/blog/mobile/03.png" media="(max-width: 1024px)" />
                        <img src="<?php echo bloginfo('template_url')?>/assets/img/blog/03.png" />
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