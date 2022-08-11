<?php
    /*
    Template Name: nas-synology
    */
?>

<?php
    get_header();
?>


<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>  / 
            <a href="https://www.drk-company.de/nas-datenrettung/" class="p-16-blue-template">Network Attached Storage (NAS) Datenrettung</a>  /
            <span class="p-16-template"> NAS Synology Datenrettung</span>
        </nav>

        <section class="synology-descr">
            <h2 class="h2-template">NAS Synology Datenrettung</h2>
            <div class="synology-descr__wrapper">
                <p class="synology-descr__wrapper_1 p-16-template">
                    Die NAS-Systeme von Synology zeichnen sich durch Zuverlässigkeit, Leistung und eine einfache Bedienung aus. Unsere Experten verfügen über alle notwendigen Technologien und umfassendes Know-How zur Datenwiederherstellung von Synology NAS-Servern und können so auch in schwierigen Datenrettungsfällen, etwa bei Festplatten-Headcrash, beim Ausfall mehrerer Festplatten im NAS, sowie bei Feuer- und Wasserschäden die Daten vom Synology NAS retten.
                </p>
                <img class="synology-descr__wrapper_2" src="<?php echo bloginfo('template_url')?>/assets/img/datenrettung/synology/synology.png" alt="synology">
                <div class="synology-descr__wrapper_3">
                    <p class="p-16-template">
                        Die Datenrettung von einer Synology NAS kann eine schwierige Aufgabe sein. Aber die gute Nachricht ist, dass es in der Regel möglich ist, Daten aus einer ausgefallenen NAS-Einheit wiederherzustellen. Solange die korrekten Schritte befolgt und nach dem Ausfall des NAS-Servers keine Selbstversuche gestartet werden.
                    </p>
                    <p class="p-16-template">
                        Die branchenführende Ausstattung mit allen am Markt verfügbaren Datenrettungstechnologien, die aus eigener Forschung und Entwicklung entstandenen Tools zur Synology Datenrettung sowie die fortwährende Weiterbildung und Qualifikation unserer Experten stellen höchste Qualität des Datenrettungsprozesses sowie beste Datenrettungsergebnisse sicher.
                    </p>
                </div>
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
            <h2 class="h2-template">Ursachen der Datenunzugänglichkeit bei RAID-Systemen </h2>
            <div class="paragraph-and-ul__block">
                <h3 class="h3-template">Logische Schäden oder falsches Formatieren</h3>
                <div class="paragraph-and-ul__block-wrapper">
                    <div class="paragraph-and-ul__texts">
                        <p class="p-16-template">
                            Raid-Arrays werden häufig Opfer von logischen Fehlern. Da ein Array definitionsgemäß mehreren Festplatten enthält, ist auch die Wahrscheinlichkeit eines Datenverlusts durch einen logischen Fehler um ein Vielfaches höher, als bei einem einzelnen Speichermedium. Oftmals sind es aber auch menschliche Faktoren –beispielsweise durch Fehlbedienung oder falsche Anbindung. Falls die Festplatten vom Betriebssystem erkannt werden und die Speicherkapazität richtig angezeigt wird, sind die Chancen zur erfolgreichen Datenrettung ziemlich hoch. Aber wären die ausgefallenen Festplatten mit neuen Daten überschrieben worden, ist die Datenrettung unmöglich
                        </p>
                    </div>
                    <div class="paragraph-and-ul__points">
                        <ul>
                            <li class="p-16-template">RAID-Array wird vom Betriebssystem nicht erkannt;</li>
                            <li class="p-16-template">Kein Zugriff auf logische Dateien und Ordner.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="paragraph-and-ul__block">
                <h3 class="h3-template">Defekter Controller</h3>
                <div class="paragraph-and-ul__block-wrapper">
                    <div class="paragraph-and-ul__texts">
                        <p class="p-16-template">
                            Ein defekter RAID Controller führt zum Ausfall des Arrays. Ein Austausch des Controllers kann beim Ausfall eines RAID-Systems nicht immer helfen. Häufige Gründe hierfür sind Bugs, Firmware Fehler oder fehlerhafte Software, die zum Ausfall führen.
                        </p>
                    </div>
                    <div class="paragraph-and-ul__points">
                        <ul>
                            <li class="p-16-template">Eine oder mehrere Festplatten werden nicht erkannt;</li>
                            <li class="p-16-template">Defekte die zum „Downgrade“ geführt haben;</li>
                            <li class="p-16-template">RAID-Array kann nicht zugegriffen werden.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="paragraph-and-ul__block">
                <h3 class="h3-template">Eine oder mehrere Festplatten sind defekt</h3>
                <div class="paragraph-and-ul__block-wrapper">
                    <div class="paragraph-and-ul__texts">
                        <p class="p-16-template">
                            Falls eine oder mehrere Festplatten ausgefallen sind, bekommt man gewöhnlich eine Fehlermeldung wie „Invalid RAID Volume“ oder „Multiple Disk Failure“. Ebenfalls häufig und überall anzutreffende Szenarien sind Ausfälle einzelner oder mehrerer Festplatten in RAID-1; 5 Systemen, die sich mit der Meldung "deprecated oder degraded" äußert. Zwar verzeiht ein solches System den Ausfall mindestens einer Festplatte, wird diese ausgefallene Festplatte jedoch nicht zeitnah ausgewechselt dann reicht ein simples Problem an einer der sich noch in Betrieb befindlichen Festplatten, um das komplette System lahm zu legen.Die Rettung von komplexen RAID-Systemen ist bei Datenrettungsklinik schon seit langem eine Domäne, denn wir verfügen über die notwendige Erfahrung und die Ingenieure, auch komplizierteste Rettungsfälle zur Zufriedenheit unserer Kunden lösen zu können.
                        </p>
                    </div>
                    <div class="paragraph-and-ul__points">
                        <ul>
                            <li class="p-16-template">Raid-Array wird als einzige Festplatte erkannt;</li>
                            <li class="p-16-template">Meldung „Die Festplatte muss formatiert werden“ äußert.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="paragraph-and-ul__block">
                <h3 class="h3-template">Ausfall des RAID-Arrays</h3>
                <div class="paragraph-and-ul__block-wrapper">
                    <div class="paragraph-and-ul__texts">
                        <p class="p-16-template">
                            Ein Ausfall des RAID-Arrays wird vom Controller Fehler verursacht. In der Regel, bedeutet das die verlorene Verbindung zwischen dem Controller und den Festplatten. In der Praxis stellt der Ausfall eines RAID-Controllers einen schweren Hardware-Fehler dar, weshalb üblicherweise Ersatzcontroller bereitgehalten werden. Dabei ist zu berücksichtigen, dass ein bestehendes RAID nicht an einem beliebigen Controller weitergeführt werden kann, sondern lediglich an einem baugleichen Controller bzw. an einer gleichen Controller-Familie. In einzelnen Fällen oder bei älteren Controllern kann es jedoch vorkommen, dass das RAID tatsächlich nur an dem Controller betrieben werden kann, an dem es erstellt wurde. In einem solchen Fall muss nach dem Austausch des Controllers der RAID-Verbund neu aufgesetzt werden. 
                        </p>
                    </div>
                    <div class="paragraph-and-ul__points">
                        <ul>
                            <li class="p-16-template">Die Festplatten werden nicht erkannt und ungeordnet gezeigt;</li>
                            <li class="p-16-template">Ein Fehler mit Anmeldung „Festplatten müssen formatiert werden“ wird angezeigt und die Festplatten werden mit „unbekanntem Dateisystem“ erkannt</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <hr class="hr-template">

        <section class="paragraph-and-ul synology-paragraph-and-ul">
            <h2 class="h2-template">Wenn Ihr NAS Server von Synology ausgefallen ist:</h2>
            <div class="paragraph-and-ul__block">
                <h3 class="h3-template">Logische Schäden oder falsches Formatieren</h3>
                <div class="paragraph-and-ul__block-wrapper">
                    <div class="paragraph-and-ul__texts">
                        <p class="p-16-template">
                            Im Falle eines Raid-oder NAS-Ausfalls einfach einen Rebuild des Raids durchzuführen und darauf zu vertrauen, dass dieser nicht scheitert, ist sehr fragwürdig. Grundsätzlich empfehlen wir den Administratoren von kleinen- und mittelständischen Unternehmen, sich im Falle eines Ausfalls direkt an ein Labor zur Datenrettung zu wenden. Die Datenträger der defekten Synology NAS werden von unseren Experten genauestens untersucht. Anhand der fundierten Schadensanalyse bei den Synology NAS wird das optimale Vorgehen für die Datenwiederherstellung des RAID-Verbunds ermittelt. Auch bei beschädigten Datenträgern und Speichermedien können Daten und Dateien komplett und lückenlos wiederhergestellt werden.
                        </p>
                    </div>
                    <div class="paragraph-and-ul__points">
                        <h3 class="h3-template">
                            Wenn Ihr NAS Synology Server ausfällt. wenden Sie sich and die Experten der Datenrettungsklinik.
                        </h3>
                        <p class="p-16-template">
                            Über unseren 24-Stunden-Service unter <a href="tel:+4908004090908" class="p-16-blue-template">+49 (0) 800 409 09 08</a> können Sie an 7 Tagen pro Woche Kontakt mit uns aufnehmen oder füllen Sie <a href="https://www.drk-company.de/daten-wiederherstellen/" class="p-16-blue-template">das Formular</a>.
                        </p>
                    </div>
                </div>
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