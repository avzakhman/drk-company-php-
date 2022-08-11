<?php
    /*
    Template Name: blog_2
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>  / <span class="p-16-template"><a class="p-16-blue-template" href="<?php the_field('blog-page_ref');?>">Blog</a> / Datenrettung von RAID-Arrays</span>
        </nav>

        <section class="post-contents">
            <h2 class="h2-template">Datenrettung von RAID-Arrays</h2>
            <div class="post-contents__wrapper">
                <p class="p-16-template post-contents__1">Die Probleme des Datenverlusts von RAID-Arrays sind nicht sehr häufig, aber es kommt dennoch vor und man muss wissen, was man in solchen Situationen machen kann. Als erstes empfehlen wir bei der Arbeit des Arrays sorgfältig aufzupassen. Wenn eine Festplatte ausfällt und für längere Zeit keine Maßnahmen unternommen werden, wird es in der Regel alles verschlimmert und die Dateien werden verloren. Aber auch im schlimmsten Fall gibt es noch Chancen auf eine erfolgreiche Datenrettung.</p>

                <div class="post-contents__2">
                    <h3 class="h3-template">Wie kann man die gelöschten Dateien von RAID 0, 1, 5 wiederherstellen!</h3>
                    <p class="p-16-template">Das Hauptverfahren zur Datenrettung von Daten von RAID 0, 1, 5 ist das programmierte Zusammenstellen vom Array-Muster. Alles wird individuell ausgewählt und vor dem Beginn der Wiederherstellungsarbeiten immer eine Systemdiagnose voraus gemacht wird. Nur wenn die Gründe und der Grund des Fehlers festgestellt wurden, können die Spezialisten genau in Richtung der Datenrettung arbeiten. </p>
                    <p class="p-16-template">Wenn die Daten wichtig sind, empfehlen wir Ihnen nicht, mit den Top-Tipps aus dem Internet zu experimentieren. Einige von ihnen haben das Recht auf Leben, aber man muss immer wissen, wie und wo es angebracht ist, sie anzuwenden.</p>
                    <h3 class="h3-template">Der Preis der Dienstleistungen für die Wiederherstellung</h3>
                    <p class="p-16-template">Es gibt keinen fixierten Preis, alles hängt von der Art des Problems, der Arbeitskomplexität und -Umfang ab. Zuerst stellen wir eine Diagnose des Systems, beurteilen die kommenden Aufgaben und orientieren den Kunden in der Perspektive der Datenrettung, der Fristen und des Preises. Wenn die Bedingungen Ihnen passen, beginnen die Spezialisten mit der Arbeit. Bis dahin lassen wir kein Einwirken zu und garantieren die Vertraulichkeit Ihrer Informationen.</p>
                </div>

                <div class="post-contents__3">
                    <picture>
                        <source srcset="<?php echo bloginfo('template_url')?>/assets/img/blog/02.png" media="(min-width: 1025px)" />
                        <source srcset="<?php echo bloginfo('template_url')?>/assets/img/blog/mobile/02.png" media="(max-width: 1024px)" />
                        <img src="<?php echo bloginfo('template_url')?>/assets/img/blog/02.png" />
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