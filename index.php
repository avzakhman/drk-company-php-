<?php
/*
    Template Name: mainpage
*/
?>

<?php
    get_header();
?>
    <aside class="form-window">
        <div class="diagnose__window">
            <h3>Sobald wir Ihre Anfrage erhalten haben, setzen wir uns mit Ihnen in Verbindung.</h3>
            <div id="form-close">
                <span></span>
                <span></span>
            </div>
            <form action="#" class="diagnose-form">
                <div class="diagnose-form__switch"> 
                    <input checked="checked" class="diagnose-form__choice" id="window-privat" type="radio" name="client" value="privat">
                    <label for="window-privat">
                        <svg>
                            <path d="M2.00005 16.0051L2.9745 16.2298L2.00005 16.0051ZM18.0001 16.0051L17.0256 16.2298L18.0001 16.0051ZM2.9745 16.2298C3.5801 13.6027 6.0163 12.0051 10.0001 12.0051V10.0051C5.53932 10.0051 1.92777 11.867 1.02561 15.7805L2.9745 16.2298ZM10.0001 12.0051C13.9838 12.0051 16.42 13.6027 17.0256 16.2298L18.9745 15.7805C18.0723 11.867 14.4608 10.0051 10.0001 10.0051V12.0051ZM17.0256 16.2298C17.0525 16.3464 17.0002 16.2454 17.0981 16.0878C17.1897 15.9403 17.3005 15.9273 17.2254 15.9493C17.1503 15.9714 17.0111 15.9922 16.7761 16.0009C16.5423 16.0097 16.3008 16.0051 16.0001 16.0051V18.0051C16.2516 18.0051 16.5672 18.0101 16.8508 17.9995C17.1331 17.989 17.4714 17.9616 17.7892 17.8682C18.1071 17.7748 18.5262 17.579 18.797 17.1431C19.0741 16.6971 19.0717 16.202 18.9745 15.7805L17.0256 16.2298ZM1.02561 15.7805C0.928446 16.202 0.926031 16.6971 1.20309 17.1431C1.47386 17.579 1.89299 17.7748 2.21089 17.8682C2.52868 17.9616 2.86705 17.989 3.14935 17.9995C3.43288 18.0101 3.74851 18.0051 4.00005 18.0051V16.0051C3.69931 16.0051 3.45778 16.0097 3.224 16.0009C2.98897 15.9922 2.84986 15.9714 2.7747 15.9493C2.69966 15.9273 2.81038 15.9403 2.902 16.0878C2.99991 16.2454 2.9476 16.3464 2.9745 16.2298L1.02561 15.7805ZM12.0001 4.00513C12.0001 5.1097 11.1046 6.00513 10.0001 6.00513V8.00513C12.2092 8.00513 14.0001 6.21427 14.0001 4.00513H12.0001ZM10.0001 6.00513C8.89549 6.00513 8.00005 5.1097 8.00005 4.00513H6.00005C6.00005 6.21427 7.79092 8.00513 10.0001 8.00513V6.00513ZM8.00005 4.00513C8.00005 2.90056 8.89549 2.00513 10.0001 2.00513V0.00512695C7.79092 0.00512695 6.00005 1.79599 6.00005 4.00513H8.00005ZM10.0001 2.00513C11.1046 2.00513 12.0001 2.90056 12.0001 4.00513H14.0001C14.0001 1.79599 12.2092 0.00512695 10.0001 0.00512695V2.00513ZM4.00005 18.0051H16.0001V16.0051H4.00005V18.0051Z"/>
                        </svg>

                        <div class="diagnose-form__circle">
                            <div class="diagnose-form__circle_dot"></div>
                        </div>

                        <span>Privat</span>
                    </label>
                    <input class="diagnose-form__choice" id="window-firma" type="radio" name="client" value="firma">
                    <label for="window-firma">
                        <svg>
                            <path d="M10.0001 6.00513H11.0001V5.00513H10.0001V6.00513ZM14.0001 4.00513C13.4478 4.00513 13.0001 4.45284 13.0001 5.00513C13.0001 5.55741 13.4478 6.00513 14.0001 6.00513V4.00513ZM15.0001 6.00513C15.5523 6.00513 16.0001 5.55741 16.0001 5.00513C16.0001 4.45284 15.5523 4.00513 15.0001 4.00513V6.00513ZM14.0001 9.00513C13.4478 9.00513 13.0001 9.45284 13.0001 10.0051C13.0001 10.5574 13.4478 11.0051 14.0001 11.0051V9.00513ZM15.0001 11.0051C15.5523 11.0051 16.0001 10.5574 16.0001 10.0051C16.0001 9.45284 15.5523 9.00513 15.0001 9.00513V11.0051ZM5.00006 9.00513C4.44778 9.00513 4.00006 9.45284 4.00006 10.0051C4.00006 10.5574 4.44778 11.0051 5.00006 11.0051V9.00513ZM6.00006 11.0051C6.55235 11.0051 7.00006 10.5574 7.00006 10.0051C7.00006 9.45284 6.55235 9.00513 6.00006 9.00513V11.0051ZM14.0001 14.0051C13.4478 14.0051 13.0001 14.4528 13.0001 15.0051C13.0001 15.5574 13.4478 16.0051 14.0001 16.0051V14.0051ZM15.0001 16.0051C15.5523 16.0051 16.0001 15.5574 16.0001 15.0051C16.0001 14.4528 15.5523 14.0051 15.0001 14.0051V16.0051ZM5.00006 14.0051C4.44778 14.0051 4.00006 14.4528 4.00006 15.0051C4.00006 15.5574 4.44778 16.0051 5.00006 16.0051V14.0051ZM6.00006 16.0051C6.55235 16.0051 7.00006 15.5574 7.00006 15.0051C7.00006 14.4528 6.55235 14.0051 6.00006 14.0051V16.0051ZM11.0001 3.00513C11.0001 2.45284 11.4478 2.00513 12.0001 2.00513V0.00512695C10.3432 0.00512695 9.00006 1.34827 9.00006 3.00513H11.0001ZM12.0001 2.00513H17.0001V0.00512695H12.0001V2.00513ZM17.0001 2.00513C17.5523 2.00513 18.0001 2.45284 18.0001 3.00513H20.0001C20.0001 1.34827 18.6569 0.00512695 17.0001 0.00512695V2.00513ZM18.0001 3.00513V17.0051H20.0001V3.00513H18.0001ZM18.0001 17.0051C18.0001 17.5574 17.5523 18.0051 17.0001 18.0051V20.0051C18.6569 20.0051 20.0001 18.662 20.0001 17.0051H18.0001ZM17.0001 18.0051H10.0001V20.0051H17.0001V18.0051ZM11.0001 19.0051V3.00513H9.00006V19.0051H11.0001ZM3.00006 7.00513H10.0001V5.00513H3.00006V7.00513ZM9.00006 6.00513V19.0051H11.0001V6.00513H9.00006ZM10.0001 18.0051H3.00006V20.0051H10.0001V18.0051ZM2.00006 17.0051V8.00513H6.10352e-05V17.0051H2.00006ZM3.00006 18.0051C2.44778 18.0051 2.00006 17.5574 2.00006 17.0051H6.10352e-05C6.10352e-05 18.662 1.34321 20.0051 3.00006 20.0051V18.0051ZM3.00006 5.00513C1.34321 5.00513 6.10352e-05 6.34827 6.10352e-05 8.00513H2.00006C2.00006 7.45284 2.44778 7.00513 3.00006 7.00513V5.00513ZM14.0001 6.00513H15.0001V4.00513H14.0001V6.00513ZM14.0001 11.0051H15.0001V9.00513H14.0001V11.0051ZM5.00006 11.0051H6.00006V9.00513H5.00006V11.0051ZM14.0001 16.0051H15.0001V14.0051H14.0001V16.0051ZM5.00006 16.0051H6.00006V14.0051H5.00006V16.0051Z"/>
                        </svg>

                        <div class="diagnose-form__circle">
                            <div class="diagnose-form__circle_dot"></div>
                        </div>

                        <span>Firma</span>
                    </label> 
                </div>

                <div class="select">
                    <div class="select__header">
                        <span class="select__current">Datenträger*</span>
                        <div class="select__icon">
                            <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                        </div>
                    </div>
                    <div class="select__body">
                        <div class="select__item">Festplatte (HDD)</div>
                        <div class="select__item">Solid State Drive (SSD)</div>
                        <div class="select__item">Externe Festplatte</div>
                        <div class="select__item">Flash-Speicher</div>
                        <div class="select__item">USB-Stick</div>
                        <div class="select__item">SD-Karte</div>
                        <div class="select__item">Notebook/Laptop</div>
                        <div class="select__item">Virtuelle Systeme  </div>
                        <div class="select__item">Raid</div>
                        <div class="select__item">NAS</div>
                        <div class="select__item">Server</div>
                        <div class="select__item">San</div>
                        <div class="select__item">Sonstiger Typ</div>
                    </div>
                </div>
                <input type="text" id="window-firma-input" required placeholder="Ihr Firma*" class="input-template diagnose-form__input diagnose-form__input_1 diagnose-form__hidden" >
                <input type="text" required placeholder="Ihr Name*" class="input-template diagnose-form__input diagnose-form__input_2">
                <input type="text" required placeholder="Telefonnummer*" class="input-template diagnose-form__input diagnose-form__input_3">
                <input type="text" required placeholder="E-mail*" class="input-template diagnose-form__input diagnose-form__input_4">
                <div class="checkbox-template diagnose-form__terms">
                    <input required type="checkbox" name="terms-w" id="terms-w">
                    <label class="checkbox-template__label" for="terms-w">
                        Ich stimme dem
                        <a href="<?php the_field('mainpage-form_ref');?>">Datenschutz</a>
                        zu
                    </label>
                </div>
                <button type="submit" class="button-template diagnose-form__submit open-status">Diagnose anfragen</button>
            </form>
        </div>
    </aside>

    <aside class="form-status">
        <div class="form-status__wrapper">
            <div id="form-status-close">
                <span></span>
                <span></span>
            </div>
            <img class="form-status__decor_1" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/03.png" alt="decoration">
            <img class="form-status__decor_2" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/01.svg" alt="decoration">
            <p>Vielen Dank für Ihre Anfrage, sie ist erfolgreich abgeschickt. Wir melden uns schnellstmöglich bei Ihnen.</p>
        </div>
    </aside>

    <main>
        <section class="mainscreen-slider">
            <div class="mainscrlider-block">
                <div class="mainscrlider-block__content">
                    <div class="mainscrlider-block__text">
                        <h2 class="h2-template" >
                                <?php
                                    the_field('main_slider_1_heading');
                                ?>
                        </h2>
                        <p class="descriptor-template">
                                <?php
                                    the_field('main_slider_1_descr');
                                ?>
                            </p>
                        <button class="button-template trigger-form">Hilfe bekommen</button>
                    </div>
                    <div class="mainscrlider-block__images">
                        <?php
                            $image = get_field('main_slider_1_img');

                            if (!empty($image)): ?>
                                <img
                                    src ="<?php echo $image['url']; ?>"
                                    alt ="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>
                    </div>
                </div>
                <?php
                    $image = get_field('main_slider_1_bcgrnd');
                    if (!empty($image)): ?>
                        <img
                            class="mainscrlider-block__background"
                            src ="<?php echo $image['url']; ?>"
                            alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                ?>
            </div>
            <div class="mainscrlider-block">
                <div class="mainscrlider-block__content">
                    <div class="mainscrlider-block__text">
                        <h2 class="h2-template" >
                            <span>
                                <?php
                                    the_field('main_slider_2_heading');
                                ?>
                            </span>
                        </h2>
                        <p class="descriptor-template">
                            <span>
                                <?php
                                    the_field('main_slider_2_descr');
                                ?>
                            <span>
                        </p>
                        <button class="button-template trigger-form">Hilfe bekommen</button>
                    </div>
                    <div class="mainscrlider-block__images">
                        <?php
                            $image = get_field('main_slider_2_img');

                            if (!empty($image)): ?>
                                <img
                                    src ="<?php echo $image['url']; ?>"
                                    alt ="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>
                    </div>
                </div>
                <?php
                    $image = get_field('main_slider_2_bcgrnd');
                    if (!empty($image)): ?>
                        <img
                            class="mainscrlider-block__background"
                            src ="<?php echo $image['url']; ?>"
                            alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                ?>
            </div>
            <div class="mainscrlider-block">
                <div class="mainscrlider-block__content">
                    <div class="mainscrlider-block__text">
                        <h2 class="h2-template" >
                                <?php
                                    the_field('main_slider_3_heading');
                                ?>
                        </h2>
                        <p class="descriptor-template">
                                <?php
                                    the_field('main_slider_3_descr');
                                ?>
                            </p>
                        <button class="button-template trigger-form">Hilfe bekommen</button>
                    </div>
                    <div class="mainscrlider-block__images">
                        <?php
                            $image = get_field('main_slider_3_img');

                            if (!empty($image)): ?>
                                <img
                                    src ="<?php echo $image['url']; ?>"
                                    alt ="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>
                    </div>
                </div>
                <?php
                    $image = get_field('main_slider_3_bcgrnd');
                    if (!empty($image)): ?>
                        <img
                            class="mainscrlider-block__background"
                            src ="<?php echo $image['url']; ?>"
                            alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                ?>
            </div>
            <div class="mainscrlider-block">
                <div class="mainscrlider-block__content">
                    <div class="mainscrlider-block__text">
                        <h2 class="h2-template" >
                            <span>
                                <?php
                                    the_field('main_slider_4_heading');
                                ?>
                            </span>
                        </h2>
                        <p class="descriptor-template">
                            <span>
                                <?php
                                    the_field('main_slider_4_descr');
                                ?>
                            </span>
                        </p>
                        <button class="button-template trigger-form">Hilfe bekommen</button>
                    </div>
                    <div class="mainscrlider-block__images">
                        <?php
                            $image = get_field('main_slider_4_img');

                            if (!empty($image)): ?>
                                <img
                                    src ="<?php echo $image['url']; ?>"
                                    alt ="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>
                    </div>
                </div>
                <?php
                    $image = get_field('main_slider_4_bcgrnd');
                    if (!empty($image)): ?>
                        <img
                            class="mainscrlider-block__background"
                            src ="<?php echo $image['url']; ?>"
                            alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                ?>
            </div>
        </section>
        <section class="information">
            <div class="information__decor">
                <img class="information__decor_1" img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/09.svg" alt="04">
                <img class="information__decor_2" img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/05.png" alt="05">
            </div>
            <div class="container">
                <div class="information__wrapper">
                    <p class="p-16-template information__paragraph">
                        <span class="information__only-desktop">
                            <?php
                                the_field('information_text_1');
                            ?>
                            <span class="p-16-blue-template information__paragraph_blue">
                                <?php
                                    the_field('information_text_2');
                                ?>
                            </span> 
                            <?php
                                the_field('information_text_3');
                            ?>
                        </span>
                        
                        <span class="p-16-blue-template information__paragraph_blue">
                            <?php
                                the_field('information_text_4');
                            ?>
                        </span> 
                        <?php
                            the_field('information_text_5');
                        ?>
                    </p>
                    <ul class="information__list">
                        <li>Experten Diagnose</li>
                        <li>Professionelle Prüfungstools</li>
                        <li>Technologischer Reinraum</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="fragen">
            <div class="container">
                <div class="fragen__contents">
                    <h2 class="h2-template" >
                        <?php
                            the_field('fragen_heading');
                        ?>
                    </h2>
                    <div class="fragen__cards" >
                        <article class="fragen-card">
                            <div class="fragen-card__image">
                                <picture>
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/hdd.png" media="(min-width: 1025px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/tablet/hdd.png" media="(min-width: 577px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/mobile/hdd.png" media="(min-width: 320px)" />
                                    <img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/hdd.png" />
                                </picture>
                            </div>
                            <div class="fragen-card__content">
                                <h3 class="h3-template">
                                    <?php
                                        the_field('fragen-block_heading_1');
                                    ?>
                                </h3>
                                <p class="p-14-template fragen-card__disposable">Festplatten sind die gängigsten Speichermedien in Computern, Laptops und Servern. Ein Festplattenausfall ist selten und unvorhersehbar, und wenn er auftritt, ist er sehr frustrierend (fatal). Aber keine Sorge: Ihre Daten sind noch nicht komplett weg. </p>
                                <p class="p-14-template">Anzahl von Spenderfestplatten. Dadurch können wir Informationen von allen Festplatten wiederherstellen, von den ältesten bis zu den modernsten Modellen: Fujitsu, Hitachi, Maxtor, Samsung, Seagate, Western Digital usw.</p>
                                <span class="fragen-card__price">
                                    <?php
                                        the_field('fragen-block_preise_1');
                                    ?>
                                </span>
                                <a href="
                                    <?php
                                        the_field('fragen_mehr-erfahren_1');
                                    ?>
                                " class="button-template">Mehr erfahren</a>
                            </div>
                        </article>
                        <article class="fragen-card">
                            <div class="fragen-card__image">
                                <picture>
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/ssd.png" media="(min-width: 1025px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/tablet/ssd.png" media="(min-width: 577px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/mobile/ssd.png" media="(min-width: 320px)" />
                                    <img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/ssd.png" />
                                </picture>
                            </div>
                            <div class="fragen-card__content">
                                <h3 class="h3-template">
                                    <?php
                                        the_field('fragen-block_heading_2');
                                    ?>
                                </h3>
                                <p class="p-14-template"><span class="fragen-card__disposable">Eine SDD ist ein Hochgeschwindigkeits-Speichergerät, das auf NAND-Flash-Speicher basiert. Solid-State-Laufwerke haben viele Vorteile gegenüber Festplatten, aber es ist schwieriger, gelöschte Dateien wieder darauf zu bekommen.</span>Infolge des technologisch komplexen Designs (elektronisch, nicht mechanisch) ist spezielles Fachwissen über den Wiederherstellungsprozess von SSD-Medien erforderlich. Die Spezialisten der Datenrettungsklinik verfügen über umfangreiche Erfahrung mit diesen Medien. </p>
                                <span class="fragen-card__price">
                                    <?php
                                        the_field('fragen-block_preise_2');
                                    ?>
                                </span>
                                <a href="
                                    <?php
                                        the_field('fragen_mehr-erfahren_2');
                                    ?>
                                " class="button-template">Mehr erfahren</a>
                            </div>
                        </article>
                        <article class="fragen-card">
                            <div class="fragen-card__image">
                                <picture>
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/nas.png" media="(min-width: 1025px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/tablet/nas.png" media="(min-width: 577px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/mobile/nas.png" media="(min-width: 320px)" />
                                    <img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/nas.png" />
                                </picture>
                            </div>
                            <div class="fragen-card__content">
                                <h3 class="h3-template">
                                    <?php
                                        the_field('fragen-block_heading_3');
                                    ?>
                                </h3>
                                <p class="p-14-template fragen-card__disposable">NAS ist ideal zum Speichern großer Datenmengen. Geräte bestehen aus Netzwerkcontrollern und einer bestimmten Anzahl von Festplatten. Systeme ermöglichen den schnellen Zugriff auf dieselbe Datei von verschiedenen PCs. Trotz ihrer anerkannten Zuverlässigkeit können sie aber manchmal ausfallen.</p>
                                <p class="p-14-template"><span class="fragen-card__disposable">Es ist möglich Daten wiederherzustellen, wenn externe oder interne Probleme auf den Festplatten von NAS-Speicher-Arrays erkannt werden. Dies ist jedoch ein arbeitsaufwändiger Prozess und die ausreichende Erfahrung und Kompetenzen sind erforderlich.</span> NAS-Datenrettung gehört zu unserem Profil und Spezialität. Fachleute der Datenrettungsklinik beschäftigen sich mit der Datenwiederherstellung von NAS-Geräten aller Hersteller, unabhängig von Ausfällen.</p>
                                <span class="fragen-card__price">
                                    <?php
                                        the_field('fragen-block_preise_3');
                                    ?>
                                </span>
                                
                                <a href="
                                    <?php
                                        the_field('fragen_mehr-erfahren_3');
                                    ?>
                                " class="button-template">Mehr erfahren</a>
                            </div>
                        </article>
                        <article class="fragen-card">
                            <div class="fragen-card__image">
                                <picture>
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/raid.png" media="(min-width: 1025px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/tablet/raid.png" media="(min-width: 577px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/mobile/raid.png" media="(min-width: 320px)" />
                                    <img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/raid.png" />
                                </picture>
                            </div>
                            <div class="fragen-card__content">
                                <h3 class="h3-template">
                                    <?php
                                        the_field('fragen-block_heading_4');
                                    ?>
                                </h3>
                                <p class="p-14-template fragen-card__disposable">Das Wiederherstellen von RAID-Systemen ist ein komplexer Prozess aber unter bestimmten Bedingungen realisierbar. Die Gründe für den Verlust oder Beschädigungen von Daten können folgende sein: Ausfall des Controllers, Ausfall mehrerer Festplatten gleichzeitig, Änderung der Konfiguration des RAID Systems. Außerdem kann eine Datenwiederherstellung des RAID-Systems erforderlich sein infolge von Nutzerfehlern oder logischer Zerstörung von Daten.</p>
                                <p class="p-14-template">Die Wiederherstellung von RAID-Systemen ist eine der häufigsten ausgestellten Dienstleistungen von Datenrettungsklinik. <span class="fragen-card__disposable">Firmenkunden fragen uns oft an, um die Daten von RAID-Systemen wiederherstellen zu lassen. </span> Durch den Einsatz innovativer Technologien und unserer langjährigen Erfahrung auf dem Gebiet der Datenrettung (RAID), helfen wir unseren Kunden RAID-Systeme wiederherzustellen und finanzielle Verluste zu vermeiden.</p>
                                <span class="fragen-card__price">
                                    <?php
                                        the_field('fragen-block_preise_4');
                                    ?>
                                </span>
                                <a href="
                                    <?php
                                        the_field('fragen_mehr-erfahren_4');
                                    ?>
                                " class="button-template">Mehr erfahren</a>
                            </div>
                        </article>
                        <article style="margin-top: 17px;" class="fragen-card">
                            <div class="fragen-card__image">
                                <picture>
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/usb.png" media="(min-width: 1025px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/tablet/usb.png" media="(min-width: 577px)" />
                                    <source img src="<?php echo bloginfo('template_url')?>/assets/img/images/mobile/usb.png" media="(min-width: 320px)" />
                                    <img src="<?php echo bloginfo('template_url')?>/assets/img/images/desktop/usb.png" />
                                </picture>
                            </div>
                            <div class="fragen-card__content">
                                <h3 class="h3-template">
                                    <?php
                                        the_field('fragen-block_heading_5');
                                    ?>
                                </h3>
                                <p class="p-14-template fragen-card__disposable">Der Prozess der Wiederherstellung von Informationen von Flash-Speichern hat seine eigenen Merkmale, die mit den Besonderheiten der Struktur verbunden sind. Die Architektur von Flash-Speicher unterscheidet sich deutlich von anderen Datenträgern. Der Prozess der Datenrettung erfordert Spezialausrüstung und spezielles Fachwissen des Geräts, der Controller-Funktionen und der Speichereinheiten.</p>
                                <p class="p-14-template">Wir stellen Daten von Flash-Speichern auf Hardwareebene wieder her. Wir zerlegen dabei den Flash-Speicher, entlöten den Speicherchip, lesen ihn aus und stellen die Daten wieder her indem wir die Daten des Controllers simulieren. Mit Hilfe unserer modernsten Geräte sind wir in der Lage mit einer sehr hohen Erfolgswahrscheinlichkeit (98%) verlorene Daten zu retten.</p>
                                <span class="fragen-card__price">
                                    <?php
                                        the_field('fragen-block_preise_5');
                                    ?>
                                </span>
                                <a href="
                                    <?php
                                        the_field('fragen_mehr-erfahren_5');
                                    ?>
                                " class="button-template">Mehr erfahren</a>
                            </div>
                        </article>
                    </div>
                    <div class="sl-count"><span class="sl-count__current">1</span> / <span class="sl-count__total"></span></div>
                </div>
                <div class="andere-fragen">
                    <p class="p-16-template andere-fragen__text">
                        Zusätzlich zu den oben genannten Laufwerken/Speichern stellen die Experten der Datenrettungsklinik Daten wieder her: <span  class="p-16-blue-template"> SD- und Micro-SD-Karten, virtuellen Systemen, externen Festplatten, Laptops, Macbooks usw.</span> Wenn Sie auf unserer Website kein Gerät gefunden haben, das eine Datenwiederherstellung erfordert, rufen Sie uns bitte an da wir vielleicht bereits ein ähnliches Gerät gerettet haben.<span class="p-16-template andere-fragen__text_addition"> Rufen Sie uns an: <span class="p-16-blue-template"><a href="tel:+4908004090908">+49 (0) 800 409 09 08</a></span>Kostenfrei anrufen</span>
                        
                    </p>
                    <div class="andere-fragen__phone">
                        <div class="andere-fragen__decoration">
                            <img class="andere-fragen__decoration_1" img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/01.svg" alt=".">
                            <img class="andere-fragen__decoration_2" img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/06.png" alt=".">
                        </div>
                        <h3 class="h3-template">
                            <?php
                                the_field('fragen_phone-ref_heading');
                            ?>
                        </h3>
                        <a href="tel:+4908004090908">
                            <?php
                                the_field('fragen_phone-ref_phone');
                            ?>
                        </a>
                        <span>Kostenfrei anrufen</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="diagnose">
            <div class="diagnose__decoration">
                <img class="diagnose__decoration_1" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/08.png" alt=".">
                <img class="diagnose__decoration_2" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/03.png" alt=".">
                <img class="diagnose__decoration_3" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/02.png" alt=".">
                <img class="diagnose__decoration_4" src="<?php echo bloginfo('template_url')?>/assets/img/background elements/04.png" alt=".">
            </div>
            <div class="container">
                <div class="diagnose__content">
                    <div class="diagnose__descr">
                        <h2 class="h2-template">
                            <?php
                                the_field('mainpage-form_heading');
                            ?>
                        </h2>
                        <p class="descriptor-template">
                            <?php
                                the_field('mainpage-form_descr');
                            ?>
                        </p>
                    

                    </div>
                    <div class="diagnose__window">
                        <h3>
                            <?php
                                the_field('mainpage-form_window-descr');
                            ?>
                        </h3>
                        <form action="#" class="diagnose-form">
                            <div class="diagnose-form__switch"> 
                                <input checked="checked" class="diagnose-form__choice" id="privat" type="radio" name="client" value="privat">
                                <label for="privat">
                                    <svg>
                                        <path d="M2.00005 16.0051L2.9745 16.2298L2.00005 16.0051ZM18.0001 16.0051L17.0256 16.2298L18.0001 16.0051ZM2.9745 16.2298C3.5801 13.6027 6.0163 12.0051 10.0001 12.0051V10.0051C5.53932 10.0051 1.92777 11.867 1.02561 15.7805L2.9745 16.2298ZM10.0001 12.0051C13.9838 12.0051 16.42 13.6027 17.0256 16.2298L18.9745 15.7805C18.0723 11.867 14.4608 10.0051 10.0001 10.0051V12.0051ZM17.0256 16.2298C17.0525 16.3464 17.0002 16.2454 17.0981 16.0878C17.1897 15.9403 17.3005 15.9273 17.2254 15.9493C17.1503 15.9714 17.0111 15.9922 16.7761 16.0009C16.5423 16.0097 16.3008 16.0051 16.0001 16.0051V18.0051C16.2516 18.0051 16.5672 18.0101 16.8508 17.9995C17.1331 17.989 17.4714 17.9616 17.7892 17.8682C18.1071 17.7748 18.5262 17.579 18.797 17.1431C19.0741 16.6971 19.0717 16.202 18.9745 15.7805L17.0256 16.2298ZM1.02561 15.7805C0.928446 16.202 0.926031 16.6971 1.20309 17.1431C1.47386 17.579 1.89299 17.7748 2.21089 17.8682C2.52868 17.9616 2.86705 17.989 3.14935 17.9995C3.43288 18.0101 3.74851 18.0051 4.00005 18.0051V16.0051C3.69931 16.0051 3.45778 16.0097 3.224 16.0009C2.98897 15.9922 2.84986 15.9714 2.7747 15.9493C2.69966 15.9273 2.81038 15.9403 2.902 16.0878C2.99991 16.2454 2.9476 16.3464 2.9745 16.2298L1.02561 15.7805ZM12.0001 4.00513C12.0001 5.1097 11.1046 6.00513 10.0001 6.00513V8.00513C12.2092 8.00513 14.0001 6.21427 14.0001 4.00513H12.0001ZM10.0001 6.00513C8.89549 6.00513 8.00005 5.1097 8.00005 4.00513H6.00005C6.00005 6.21427 7.79092 8.00513 10.0001 8.00513V6.00513ZM8.00005 4.00513C8.00005 2.90056 8.89549 2.00513 10.0001 2.00513V0.00512695C7.79092 0.00512695 6.00005 1.79599 6.00005 4.00513H8.00005ZM10.0001 2.00513C11.1046 2.00513 12.0001 2.90056 12.0001 4.00513H14.0001C14.0001 1.79599 12.2092 0.00512695 10.0001 0.00512695V2.00513ZM4.00005 18.0051H16.0001V16.0051H4.00005V18.0051Z"/>
                                    </svg>

                                    <div class="diagnose-form__circle">
                                        <div class="diagnose-form__circle_dot"></div>
                                    </div>

                                    <span>Privat</span>
                                </label>
                                <input class="diagnose-form__choice" id="firma" type="radio" name="client" value="firma">
                                <label for="firma">
                                    <!-- <svg>
                                        <path d="M10.0001 6.00513H11.0001V5.00513H10.0001V6.00513ZM14.0001 4.00513C13.4478 4.00513 13.0001 4.45284 13.0001 5.00513C13.0001 5.55741 13.4478 6.00513 14.0001 6.00513V4.00513ZM15.0001 6.00513C15.5523 6.00513 16.0001 5.55741 16.0001 5.00513C16.0001 4.45284 15.5523 4.00513 15.0001 4.00513V6.00513ZM14.0001 9.00513C13.4478 9.00513 13.0001 9.45284 13.0001 10.0051C13.0001 10.5574 13.4478 11.0051 14.0001 11.0051V9.00513ZM15.0001 11.0051C15.5523 11.0051 16.0001 10.5574 16.0001 10.0051C16.0001 9.45284 15.5523 9.00513 15.0001 9.00513V11.0051ZM5.00006 9.00513C4.44778 9.00513 4.00006 9.45284 4.00006 10.0051C4.00006 10.5574 4.44778 11.0051 5.00006 11.0051V9.00513ZM6.00006 11.0051C6.55235 11.0051 7.00006 10.5574 7.00006 10.0051C7.00006 9.45284 6.55235 9.00513 6.00006 9.00513V11.0051ZM14.0001 14.0051C13.4478 14.0051 13.0001 14.4528 13.0001 15.0051C13.0001 15.5574 13.4478 16.0051 14.0001 16.0051V14.0051ZM15.0001 16.0051C15.5523 16.0051 16.0001 15.5574 16.0001 15.0051C16.0001 14.4528 15.5523 14.0051 15.0001 14.0051V16.0051ZM5.00006 14.0051C4.44778 14.0051 4.00006 14.4528 4.00006 15.0051C4.00006 15.5574 4.44778 16.0051 5.00006 16.0051V14.0051ZM6.00006 16.0051C6.55235 16.0051 7.00006 15.5574 7.00006 15.0051C7.00006 14.4528 6.55235 14.0051 6.00006 14.0051V16.0051ZM11.0001 3.00513C11.0001 2.45284 11.4478 2.00513 12.0001 2.00513V0.00512695C10.3432 0.00512695 9.00006 1.34827 9.00006 3.00513H11.0001ZM12.0001 2.00513H17.0001V0.00512695H12.0001V2.00513ZM17.0001 2.00513C17.5523 2.00513 18.0001 2.45284 18.0001 3.00513H20.0001C20.0001 1.34827 18.6569 0.00512695 17.0001 0.00512695V2.00513ZM18.0001 3.00513V17.0051H20.0001V3.00513H18.0001ZM18.0001 17.0051C18.0001 17.5574 17.5523 18.0051 17.0001 18.0051V20.0051C18.6569 20.0051 20.0001 18.662 20.0001 17.0051H18.0001ZM17.0001 18.0051H10.0001V20.0051H17.0001V18.0051ZM11.0001 19.0051V3.00513H9.00006V19.0051H11.0001ZM3.00006 7.00513H10.0001V5.00513H3.00006V7.00513ZM9.00006 6.00513V19.0051H11.0001V6.00513H9.00006ZM10.0001 18.0051H3.00006V20.0051H10.0001V18.0051ZM2.00006 17.0051V8.00513H6.10352e-05V17.0051H2.00006ZM3.00006 18.0051C2.44778 18.0051 2.00006 17.5574 2.00006 17.0051H6.10352e-05C6.10352e-05 18.662 1.34321 20.0051 3.00006 20.0051V18.0051ZM3.00006 5.00513C1.34321 5.00513 6.10352e-05 6.34827 6.10352e-05 8.00513H2.00006C2.00006 7.45284 2.44778 7.00513 3.00006 7.00513V5.00513ZM14.0001 6.00513H15.0001V4.00513H14.0001V6.00513ZM14.0001 11.0051H15.0001V9.00513H14.0001V11.0051ZM5.00006 11.0051H6.00006V9.00513H5.00006V11.0051ZM14.0001 16.0051H15.0001V14.0051H14.0001V16.0051ZM5.00006 16.0051H6.00006V14.0051H5.00006V16.0051Z"/>
                                    </svg>

                                     -->
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 19.0051V20.0051C19.5523 20.0051 20 19.5574 20 19.0051H19ZM8 6.00513H9V5.00513H8V6.00513ZM1 19.0051H0C0 19.5574 0.447715 20.0051 1 20.0051L1 19.0051ZM12 4.00513C11.4477 4.00513 11 4.45284 11 5.00513C11 5.55741 11.4477 6.00513 12 6.00513V4.00513ZM19 6.00513C19.5523 6.00513 20 5.55741 20 5.00513C20 4.45284 19.5523 4.00513 19 4.00513V6.00513ZM12 9.00513C11.4477 9.00513 11 9.45284 11 10.0051C11 10.5574 11.4477 11.0051 12 11.0051V9.00513ZM19 11.0051C19.5523 11.0051 20 10.5574 20 10.0051C20 9.45284 19.5523 9.00513 19 9.00513V11.0051ZM5 9.00513C4.44772 9.00513 4 9.45284 4 10.0051C4 10.5574 4.44772 11.0051 5 11.0051V9.00513ZM8 11.0051C8.55228 11.0051 9 10.5574 9 10.0051C9 9.45284 8.55228 9.00513 8 9.00513V11.0051ZM12 14.0051C11.4477 14.0051 11 14.4528 11 15.0051C11 15.5574 11.4477 16.0051 12 16.0051V14.0051ZM19 16.0051C19.5523 16.0051 20 15.5574 20 15.0051C20 14.4528 19.5523 14.0051 19 14.0051V16.0051ZM5 14.0051C4.44772 14.0051 4 14.4528 4 15.0051C4 15.5574 4.44772 16.0051 5 16.0051V14.0051ZM8 16.0051C8.55228 16.0051 9 15.5574 9 15.0051C9 14.4528 8.55228 14.0051 8 14.0051V16.0051ZM10 2.00513H17V0.00512695H10V2.00513ZM18 3.00513V19.0051H20V3.00513H18ZM19 18.0051H8V20.0051H19V18.0051ZM9 19.0051V3.00513H7V19.0051H9ZM17 2.00513C17.5523 2.00513 18 2.45284 18 3.00513H20C20 1.34827 18.6569 0.00512695 17 0.00512695V2.00513ZM10 0.00512695C8.34315 0.00512695 7 1.34827 7 3.00513H9C9 2.45284 9.44771 2.00513 10 2.00513V0.00512695ZM3 7.00513H8V5.00513H3V7.00513ZM7 6.00513V19.0051H9V6.00513H7ZM8 18.0051H1V20.0051H8V18.0051ZM2 19.0051V8.00513H0V19.0051H2ZM3 5.00513C1.34315 5.00513 0 6.34827 0 8.00513H2C2 7.45284 2.44772 7.00513 3 7.00513V5.00513ZM12 6.00513H19V4.00513H12V6.00513ZM12 11.0051H19V9.00513H12V11.0051ZM5 11.0051H8V9.00513H5V11.0051ZM12 16.0051H19V14.0051H12V16.0051ZM5 16.0051H8V14.0051H5V16.0051Z" fill="#A1A3C0"/>
                                    </svg>

                                    <div class="diagnose-form__circle">
                                        <div class="diagnose-form__circle_dot"></div>
                                    </div>

                                    <span>Firma</span>
                                </label> 
                            </div>

                            <div class="diagnose-form__select select">
                                <div class="select__header">
                                    <span class="select__current">Datenträger*</span>
                                    <div class="select__icon">
                                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                    </div>
                                </div>
                                <div class="select__body">
                                    <div class="select__item">Festplatte (HDD)</div>
                                    <div class="select__item">Solid State Drive (SSD)</div>
                                    <div class="select__item">Externe Festplatte</div>
                                    <div class="select__item">Flash-Speicher</div>
                                    <div class="select__item">USB-Stick</div>
                                    <div class="select__item">SD-Karte</div>
                                    <div class="select__item">Notebook/Laptop</div>
                                    <div class="select__item">Virtuelle Systeme  </div>
                                    <div class="select__item">Raid</div>
                                    <div class="select__item">NAS</div>
                                    <div class="select__item">Server</div>
                                    <div class="select__item">San</div>
                                    <div class="select__item">Sonstiger Typ</div>
                                </div>
                            </div>
                            <input type="text" id="firma-input" required placeholder="Ihr Firma*" class="input-template diagnose-form__input diagnose-form__input_1 diagnose-form__hidden" >
                            <input type="text" required placeholder="Ihr Name*" class="input-template diagnose-form__input diagnose-form__input_2">
                            <input type="text" required placeholder="Telefonnummer*" class="input-template diagnose-form__input diagnose-form__input_3">
                            <input type="text" required placeholder="E-mail*" class="input-template diagnose-form__input diagnose-form__input_4 ">
                            <div class="checkbox-template diagnose-form__terms">
                                <input required type="checkbox" name="terms" id="terms">
                                <label class="checkbox-template__label" for="terms">
                                    Ich stimme dem
                                    <a href="<?php the_field('mainpage-form_ref');?>">Datenschutz</a>
                                    zu
                                </label>
                            </div>
                            <button type="submit" class="button-template diagnose-form__submit open-status">Diagnose anfragen</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="datenretter">
            <div class="container">
                <div class="datenretter__wrapper">
                    <h2 class="h2-template">
                        <?php
                            the_field('mainpage-datenretter_heading');
                        ?>
                    </h2>
                    <article class="datenretter__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/datenretter/01.svg" alt="01">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenretter_block-heading_1');
                            ?>
                        </h3>
                        <p class="p-14-template">
                            <?php
                                the_field('mainpage-datenretter_block-paragraph_1');
                            ?>
                        </p>
                    </article>
                    <article class="datenretter__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/datenretter/02.svg" alt="02">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenretter_block-heading_2');
                            ?>
                        </h3>
                        <p class="p-14-template">
                            <?php
                                the_field('mainpage-datenretter_block-paragraph_2');
                            ?>
                        </p>
                    </article>
                    <article class="datenretter__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/datenretter/03.svg" alt="03">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenretter_block-heading_3');
                            ?>
                        </h3>
                        <p class="p-14-template">
                            <?php
                                the_field('mainpage-datenretter_block-paragraph_3');
                            ?>
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="uber-uns">
            <div class="uber-uns__decoration">
                <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/07.png" alt="1" class="uber-uns__decoration_1">
                <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/10.svg" alt="2" class="uber-uns__decoration_2">
                <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/09.svg" alt="3" class="uber-uns__decoration_3">
            </div>
            <div class="container">
                <div class="uber-uns__wrapper">
                    <article class="uber-uns__paragraph">
                        <h2 class="h2-template">
                            <?php
                                the_field('mainpage-uber-uns_heading');
                            ?>
                        </h2>
                        <p class="p-16-template">
                            <?php
                                the_field('mainpage-uber-uns_paragraph');
                            ?>
                        </p>
                    </article>
                    <article class="uber-uns__numbers">
                        <div class="uber-uns__number">
                            <h3><span>98%</span></h3>
                            <p class="p-16-template">
                                <?php
                                    the_field('mainpage-uber-uns_descr_1');
                                ?>
                            </p>
                        </div>
                        <div class="uber-uns__number">
                            <h3><span>75</span> Regionen</h3>
                            <p class="p-16-template">
                                <?php
                                    the_field('mainpage-uber-uns_descr_2');
                                ?>
                            </p>
                        </div>
                        <div class="uber-uns__number">
                            <h3>Mehr als<span>15</span> Jahre</h3>
                            <p class="p-16-template">
                                <?php
                                    the_field('mainpage-uber-uns_descr_3');
                                ?>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="michel">
            <div class="container">
                <div class="michel__wrapper">
                    <div class="michel__text">
                        <h2 class="h2-template">
                            <?php
                                the_field('mainscreen-michel_heading');
                            ?>
                        </h2>
                        <h3 class="h3-template">
                            <?php
                                the_field('mainscreen-michel_descr');
                            ?>
                        </h3>
                        <p class="p-16-template">
                            <?php
                                the_field('mainscreen-michel_paragraph');
                            ?>
                        </p>
                        <div class="michel__name">
                            <h3 class="h3-template">
                                <?php
                                    the_field('mainscreen-michel_name');
                                ?>
                            </h3>
                            <p class="p-14-template">
                                <?php
                                    the_field('mainscreen-michel_name-descr');
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="michel__img">
                        <?php
                            $image = get_field('mainscreen-michel_photo');

                            if (!empty($image)): ?>
                                <img
                                    src ="<?php echo $image['url']; ?>"
                                    alt ="<?php echo $image['alt']; ?>">
                            <?php endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="kundenbewertungen">
            <div class="container">
                <div class="kundenbewertungen__slider">
                    <div class="kundenbewertungen__wrapper">
                        <div class="kundenbewertungen__text">
                            <h2 class="h2-template">
                                <?php
                                    the_field('mainpage-kundenbewertungen_heading');
                                ?>
                            </h2>
                            <p class="p-16-template">
                                <?php
                                    the_field('mainpage-kundenbewertungen_paragraph_1');
                                ?>
                            </p>
                            <div class="kundenbewertungen__name">
                                <h3 class="p-16-template">
                                    <?php
                                        the_field('mainpage-kundenbewertungen_name_1');
                                    ?>
                                </h3>
                                <h3 class="p-16-template">
                                    <?php
                                        the_field('mainpage-kundenbewertungen_date_1');
                                    ?>
                                </h3>
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
                            <h2 class="h2-template">
                                <?php
                                    the_field('mainpage-kundenbewertungen_heading');
                                ?>
                            </h2>
                            <p class="p-16-template">
                                <?php
                                    the_field('mainpage-kundenbewertungen_paragraph_2');
                                ?> 
                            </p>
                            <div class="kundenbewertungen__name">
                                <h3 class="p-16-template">
                                    <?php
                                        the_field('mainpage-kundenbewertungen_name_2');
                                    ?>
                                </h3>
                                <h3 class="p-16-template">
                                    <?php
                                        the_field('mainpage-kundenbewertungen_date_2');
                                    ?>
                                </h3>
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
        <section class="ablauf">
            <div class="ablauf__decoration">
                <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/10.svg" alt="10" class="ablauf__decoration_1">
                <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/05.png" alt="5" class="ablauf__decoration_2">
                <img src="<?php echo bloginfo('template_url')?>/assets/img/background elements/09.svg" alt="9" class="ablauf__decoration_3">
            </div>
            <div class="container">
                <h2 class="h2-template">
                    <?php
                        the_field('mainpage-datenrettung_heading');
                    ?>
                </h2>
                <div class="ablauf__wrapper">
                    <div class="ablauf__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/ablauf/01.svg" alt="01">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenrettung_heading_1');
                            ?>
                        </h3>
                        <p class="p-14-template">
                            <?php the_field('mainpage-datenrettung_paragraph_1-1');?>

                            <a class="p-14-template" href="<?php the_field('mainpage-datenrettung_paragraph_1-2-ref');?>"><?php the_field('mainpage-datenrettung_paragraph_1-2');?></a>

                            <?php the_field('mainpage-datenrettung_paragraph_1-3');?>
                            <br>

                            <a class="p-14-template" href="tel:<?php the_field('mainpage-datenrettung_paragraph_1-4-ref');?>">
                                <?php the_field('mainpage-datenrettung_paragraph_1-4');?>
                            </a>
                            <br>

                            <?php the_field('mainpage-datenrettung_paragraph_1-5');?>
                        </p>
                    </div>
                    <div class="ablauf__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/ablauf/02.svg" alt="01">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenrettung_heading_2');
                            ?>
                        </h3>
                        <p class="p-14-template">
                            <?php
                                the_field('mainpage-datenrettung_paragraph_2');
                            ?>
                        </p>
                    </div>
                    <div class="ablauf__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/ablauf/03.svg" alt="01">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenrettung_heading_3');
                            ?> 
                        </h3>
                        <p class="p-14-template">
                            <?php
                                the_field('mainpage-datenrettung_paragraph_3');
                            ?>
                        </p>
                    </div>
                    <div class="ablauf__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/ablauf/04.svg" alt="01">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenrettung_heading_4');
                            ?>
                        </h3>
                        <p class="p-14-template">
                            <?php the_field('mainpage-datenrettung_paragraph_4-1');?>
                            </p>
                            <ul class="p-14-template__ul">
                                <li><?php the_field('mainpage-datenrettung_paragraph_4-2');?></li>
                                <li><?php the_field('mainpage-datenrettung_paragraph_4-3');?></li>
                            </ul>
                        <p class="p-14-template"><?php the_field('mainpage-datenrettung_paragraph_4-4');?></p>
                    </div>
                    <div class="ablauf__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/ablauf/05.svg" alt="01">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenrettung_heading_5');
                            ?>
                        </h3>
                        <p class="p-14-template">
                        <?php
                            the_field('mainpage-datenrettung_paragraph_5');
                        ?>
                        </p>
                    </div>
                    <div class="ablauf__block">
                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/ablauf/06.svg" alt="01">
                        <h3 class="h3-template">
                            <?php
                                the_field('mainpage-datenrettung_heading_6');
                            ?>
                        </h3>
                        <p class="p-14-template">
                            <?php
                                the_field('mainpage-datenrettung_paragraph_6');
                            ?>
                        </p>
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
        <section class="expertenblog">
            <div class="container">
                <div class="expertenblog__wrapper">
                    <div class="expertenblog__descr">
                        <h2 class="h2-template">
                            <?php
                                the_field('mainpage-expertenblog_heading');
                            ?>
                        </h2>
                        <p class="p-16-template">
                            <?php
                                the_field('mainpage-expertenblog_descr');
                            ?>
                        </p>
                        <div class="expertenblog__michel">

                            <?php
                                $image = get_field('mainpage-expertenblog_photo');

                                if (!empty($image)): ?>
                                    <img
                                        src ="<?php echo $image['url']; ?>"
                                        alt ="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>

                            <h3><?php the_field('mainpage-expertenblog_name');?><br><span class="p-14-template"><?php the_field('mainpage-expertenblog_erfahrung');?></span></h3>
                            
                        </div>
                    </div>
                    <div class="expertenblog__cards">
                        <a href="<?php the_field('post_ref_1');?>" class="expertenblog-block">
                            <?php
                                $image = get_field('mainpage-expertenblog_image_1');

                                if (!empty($image)): ?>
                                    <img
                                        src ="<?php echo $image['url']; ?>"
                                        alt ="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                            <h4 class="p-14-template">
                                <?php
                                    the_field('mainpage-expertenblog_heading_1');
                                ?>
                            </h4>
                        </a>
                        <a href="<?php the_field('post_ref_2');?>" class="expertenblog-block">
                            <?php
                                $image = get_field('mainpage-expertenblog_image_2');

                                if (!empty($image)): ?>
                                    <img
                                        src ="<?php echo $image['url']; ?>"
                                        alt ="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                            <h4 class="p-14-template">
                                <?php
                                    the_field('mainpage-expertenblog_heading_2');
                                ?>
                            </h4>
                        </a>
                        <a href="<?php the_field('post_ref_3');?>" class="expertenblog-block">
                            <?php
                                $image = get_field('mainpage-expertenblog_image_3');

                                if (!empty($image)): ?>
                                    <img
                                        src ="<?php echo $image['url']; ?>"
                                        alt ="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                            <h4 class="p-14-template">
                                <?php
                                    the_field('mainpage-expertenblog_heading_3');
                                ?>
                            </h4>
                        </a>
                        <a href="<?php the_field('post_ref_4');?>" class="expertenblog-block">
                            <?php
                                $image = get_field('mainpage-expertenblog_image_4');

                                if (!empty($image)): ?>
                                    <img
                                        src ="<?php echo $image['url']; ?>"
                                        alt ="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                            <h4 class="p-14-template">
                                <?php
                                    the_field('mainpage-expertenblog_heading_4');
                                ?>
                            </h4>
                        </a>
                    </div>
                </div>
                <a class="expertenblog__link" href="<?php the_field('mainpage-expertenblog_ref');?>">Zum Expertenblog</a>
            </div>
        </section> 
    </main>
    
<?php
    get_footer();
?>