
<?php
    /*
    Template Name: privatkunden
    */
?>

<?php
    get_header();
?>


<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>  / <span class="p-16-template"> Privatkunden</span>
        </nav>

        <section class="privatkunden-descr">
            <h2 class="h2-template">Information für Privatkunden</h2>
            <div class="privatkunden-descr__wrapper">
                <p class="privatkunden-descr__wrapper_1 p-16-template">
                    Wichtige Daten sind plötzlich verschwunden oder können nicht (mehr) geöffnet und bearbeitet werden, weil aufgrund einer defekten Festplatte kein Zugriff möglich ist. Die gute Nachricht: Es gibt Mittel und Wege, die Daten zu sichern bzw. “gelöschte” Dateien wiederherzustellen.
                </p>
                <p class="privatkunden-descr__wrapper_2 p-16-template">
                    Haben Sie einen Datenverlust festgestellt, bewahren Sie zunächst Ruhe und führen Sie bitte keine Selbstversuche durch, da diese in den meisten Fällen den Schaden nur verschlimmern. Schalten Sie das Gerät aus und rufen Sie schnellstmöglich unseren Kundendienst an. Bei einer internen Festplatte sollten Sie den Server, den Computer oder das Notebook nicht mehr starten, nur so können schlimmere Folgeschäden vermieden werden. Jeden Tag erhält Datenrettungsklinik verschiedene Anfragen zur Datenrettung und rettet die Daten erfolgreich.
                </p>
                <img class="privatkunden-descr__wrapper_3" src="<?php echo bloginfo('template_url')?>/assets/img/privatkunden.png" alt="privatkunden">
            </div>
        </section>

        <section class="template-points">
            <div class="template-points__number">
                <h3><span>98%</span></h3>
                <p class="p-16-template">Erfolgreiche Wiederherstellungsfälle</p>
            </div>
            <div class="template-points__number">
                <h3><span>75</span> Regionen</h3>
                <p class="p-16-template">aus denen wir Speichermedien zur Wiederherstellung erhalten haben</p>
            </div>
            <div class="template-points__number">
                <h3>Mehr als<span>15</span> Jahre</h3>
                <p class="p-16-template">erfahrung von unseren Experten auf dem Gebiet der Datenrettung</p>
            </div>
        </section>

        <hr class="hr-template">

        <section class="paragraph-and-ul">
            <div class="paragraph-and-ul__block">
                <div class="paragraph-and-ul__block-wrapper">
                    <div class="paragraph-and-ul__texts">
                        <p class="p-16-template">
                            Wir haben uns schon vor vielen Jahren auf die Datenrettung von Festplatten spezialisiert und verfügen über ein eigenes Reinraumlabor mit modernsten Technologien, Geräten und alle nötigen Ersatzteile. Unsere Experten sind in Bereich für die Datenrettung von Datenträgern aller Arten erfahren. Wir arbeiten mit SSD, HDD Festplatten, RAID-Arrays, NAS/SAN Server. Ihre Daten können unabhängig vom Betriebssystem wiederhergestellt werden - Windows, Mac OS, Linux, UNIX und etc.
                        </p>
                        <p class="p-16-template">
                            Jeder Kunde ist uns wichtig! Wir schätzen unsere Kunden gleichermaßen. Wir unterscheiden unsere Kunden nur durch den Grad des Schadens und die Rettungszeit. Sie erhalten von uns ein Festpreisangebot ohne versteckten Kosten. Außerdem, werden Ihre Datenträger, sobald sie uns erreicht haben, von unseren Experten kostenfrei und unverbindlich untersucht. Bei Ablehnung des Angebotes senden wir Ihren Originaldatenträger kostenlos an Sie zurück.
                        </p>
                    </div>
                    <div class="paragraph-and-ul__points">
                        <p class="p-16-template">
                            Unsere <span>Professionelle Diagnose ist kostenfrei</span> für alle unseren Kunden. 
                        </p>
                        <ul>
                            <li class="p-16-template">
                                Senden Sie uns eine unverbindliche
                                <a href="<?php the_field('privatkunden_diagnose_anfrage');?>" class="p-16-blue-template">Diagnose-Anfrage</a>
                            </li>
                            <li class="p-16-template">oder nutzen Sie einfach unsere kostenlose Hotline: 
                                <a href="tel:+4908004090908" class="p-16-blue-template">+49 (0) 800 409 09 08</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="kundenbewertungen">
        <div class="container">
            <div class="kundenbewertungen__slider">
                <div class="kundenbewertungen__wrapper">
                    <div class="kundenbewertungen__text">
                        <h2 class="h2-template">Warum wir?</h2>
                        <p class="p-16-template warum-wir-paragraph">
                            Bei Datenrettungsklinik sind Ihre Daten in guten Händen. Wir garantieren Ihnen die schnelle, effiziente und sichere Rettung Ihrer Daten in allen Fällen von Datenverlust, egal ob einfach oder hoch kompliziert. Wir verlangen keine Vorkasse und der Support beantwortet Ihre Fragen rund um die Uhr telefonisch unter
                            <a href="tel:+4908004090908" class="p-16-blue-template">+49 (0) 800 409 09 08</a>.
                        </p>
                        <p class="p-16-template">Sehr gute und professionelle Beratung. Meine externe Festplatte war sehr alt und teilweise mit tiefen Kratzern. Habe es schon bei zwei anderen versucht, bei der Datenrettungsklinik hat es endlich geklappt. Die Daten konnten, zwar nicht alles, aber mit einem sehr guten Ergebnis gerettet werden. Viel besser als erwartet. Der Preis war angemessen. Die Bearbeitung war schneller als angekündigt. Schnelle und problemlose Lieferung.</p>
                        <div class="kundenbewertungen__name">
                            <h3 class="p-16-template">-Tatjana</h3>
                            <h3 class="p-16-template">14. März</h3>
                        </div>
                    </div>
                    <div class="kundenbewertungen__video">
                        <video width="320" height="240" controls="controls"  poster="<?php echo bloginfo('template_url')?>/assets/img/video.png">
                            <source src="<?php echo bloginfo('template_url')?>/assets/videos/01.mp4" type="video/mp4"/>
                        </video>
                    </div>
                </div>
                <div class="kundenbewertungen__wrapper">
                    <div class="kundenbewertungen__text">
                        <h2 class="h2-template">Warum wir?</h2>
                        <p class="p-16-template warum-wir-paragraph">
                            Bei Datenrettungsklinik sind Ihre Daten in guten Händen. Wir garantieren Ihnen die schnelle, effiziente und sichere Rettung Ihrer Daten in allen Fällen von Datenverlust, egal ob einfach oder hoch kompliziert. Wir verlangen keine Vorkasse und der Support beantwortet Ihre Fragen rund um die Uhr telefonisch unter
                            <a href="tel:+4908004090908" class="p-16-blue-template">+49 (0) 800 409 09 08</a>.
                        </p>
                        <p class="p-16-template">When you suddenly realize that the USB stick is no longer recognized by the computer. Error message "No medium" in the disk management. After my request, I received a very quick response from the Datenrettungsklinik. Anyone who has ever suffered a data loss knows how it makes you feel. I felt very well taken care of here. After a few days, I received an assessment and a cost estimate. It is generally an expensive undertaking to recover data, but here the price is absolutely fair. Compared to some other data recovery companies, the price is significantly lower... </p>
                        <div class="kundenbewertungen__name">
                            <h3 class="p-16-template">-Chanu</h3>
                            <h3 class="p-16-template">18. Februar</h3>
                        </div>
                    </div>
                    <div class="kundenbewertungen__video">
                        <video width="320" height="240" controls="controls" poster="<?php echo bloginfo('template_url')?>/assets/img/video 2.png">
                            <source src="<?php echo bloginfo('template_url')?>/assets/videos/02.mp4" type="video/mp4"/>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

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