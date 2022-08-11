<?php
    /*
    Template Name: page-form
    */
?>

<?php
    get_header();
?>
<aside class="form-status">
    <div class="form-status__wrapper">
        <div id="form-status-close">
            <span></span>
            <span></span>
        </div>
        <img class="form-status__decor_1" src="img/background elements/03.png" alt="decoration">
        <img class="form-status__decor_2" src="img/background elements/01.svg" alt="decoration">
        <p>Vielen Dank für Ihre Anfrage, sie ist erfolgreich abgeschickt. Wir melden uns schnellstmöglich bei Ihnen.</p>
    </div>
</aside>
<main>
        <div class="container">
            <nav class="nav-line">
                <a class="p-16-blue-template" href="/">Home</a>  / <span class="p-16-template"> Daten wiederherstellen</span>
            </nav>
            <div class="auftragsformular">
                <h1 class="h2-template">Auftragsformular zur Durchführung einer Analyse</h1>
                <div class="auftragsformular__wrapper">
                    <p class="p-16-template">Sehr geehrte Kunden,<br>
                        Damin Ihre Datenträger schnellstmöglich analysiert werden, füllen Sie bitte das angegebene Formular aus. Je genauer die Angaben sind, desto effektiver können wir Ihnen helfen.<br>
                        Indem Sie unten auf „Absenden“ klicken, stehen Sie unter keinem finanziellen Risiko. Die Diagnose wird in der Datenrettungsklinik kostenfrei und unverbindlich durchgeführt. Falls die Datenwiederherstellung misslingen sollte, werden Ihnen keine Datenrettungskosten berechnet. Es kommen auf Sie keine verdeckten zusätzlichen Kosten, wie Ersatzteilpauschale oder Materialkosten zu.<br>
                        <span>
                            Blanko PDF-Formular zum Ausfüllen herunterladen.
                            <a href="<?php echo bloginfo('template_url')?>/pages/form.pdf" download="Auftragsformular.pdf" class="h-button-template">PDF Download 
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 4.7666C13 4.21432 12.5523 3.7666 12 3.7666C11.4477 3.7666 11 4.21432 11 4.7666H13ZM12 14.7659L11.2929 15.473C11.6834 15.8635 12.3166 15.8635 12.7071 15.473L12 14.7659ZM16.7071 11.473C17.0976 11.0825 17.0976 10.4493 16.7071 10.0588C16.3166 9.66826 15.6834 9.66826 15.2929 10.0588L16.7071 11.473ZM8.70711 10.0588C8.31658 9.66826 7.68342 9.66826 7.29289 10.0588C6.90237 10.4493 6.90237 11.0825 7.29289 11.473L8.70711 10.0588ZM11 4.7666V14.7659H13V4.7666H11ZM12.7071 15.473L16.7071 11.473L15.2929 10.0588L11.2929 14.0588L12.7071 15.473ZM12.7071 14.0588L8.70711 10.0588L7.29289 11.473L11.2929 15.473L12.7071 14.0588Z" fill="#2EA0AE"/>
                                    <path d="M5 18.7666C4.44772 18.7666 4 19.2143 4 19.7666C4 20.3189 4.44772 20.7666 5 20.7666V18.7666ZM19 20.7666C19.5523 20.7666 20 20.3189 20 19.7666C20 19.2143 19.5523 18.7666 19 18.7666V20.7666ZM5 20.7666H19V18.7666H5V20.7666Z" fill="#2EA0AE"/>
                                </svg>
                            </a>
                        </span>

                    </p>
                    <ul class="p-16-template">
                        <li>1. Füllen Sie das Formular ausführlich aus;</li>
                        <li>2. Verpacken Sie Ihren Datenträger sicher;</li>
                        <li>3. Senden Sie Ihren Datenträger zu Datenrettungsklinik;</li>
                        <li>4. Sobald wir Ihren Datenträger erhalten haben, beginnen wir mit der experten Diagnose. Mit dem Diagnoseergebnis erstellen wir Ihnen ein konkretes Angebot zum Festpreis. Nur bei Annahme des Angebotes zur Datenwiederherstellung wird die Datenrettung durch uns durchgeführt.</li>
                    </ul>
                </div>
            </div>
            <form class="big-form" method="POST" action="<?php echo bloginfo('template_url')?>/pages/pdf.php">
                <article class="big-form__block big-form__block_1">
                    <div>
                        <h3 class="h3-template">Serviceart / Modus</h3>
                        <div class="big-form__select  select" style="z-index: 100000;">
                            <div class="select__header">
                                <span class="select__current">Modus*</span>
                                <div class="select__icon">
                                    <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                </div>
                            </div>
                            <div class="select__body" >
                                <div class="select__item">Express Hilfe</div>
                                <div class="select__item">Express Datenrettung</div>
                                <div class="select__item">Standard Datenrettung</div>
                            </div>
                        </div>
                    </div>
                    <div >
                        <h3 class="h3-template">Kundenreferenz</h3>

                        <div class="big-form__block_kundenreferenz">
                            <div id="kundenreferenz" class="big-form__select  select">
                                <div class="select__header">
                                    <span class="select__current">Privat*</span>
                                    <div class="select__icon">
                                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                    </div>
                                </div>
                                <div class="select__body">
                                    <div class="select__item">Privat</div>
                                    <div class="select__item">Firma</div>
                                </div>
                            </div>
                            <div class="firmaoption big-form__select  select input-template_hidden">
                                <div class="select__header">
                                    <span class="select__current">Rechtsformen*</span>
                                    <div class="select__icon">
                                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                    </div>
                                </div>
                                <div class="select__body">
                                    <div class="select__item">GbR</div>
                                    <div class="select__item">OHG</div>
                                    <div class="select__item">GmbH</div>
                                    <div class="select__item">AG</div>
                                    <div class="select__item">UG</div>
                                    <div class="select__item">Einzelunternehmer</div>
                                    <div class="select__item">Sonstiges</div>

                                </div>
                            </div>
                            <input require placeholder="UST-ID*" class="firmaoption input-template input-template_hidden" type="text">
                            <input require placeholder="Firmenname*" class="firmaoption input-template input-template_hidden" type="text">
                        </div>

                    </div>
                </article>
                <article class="big-form__block">
                    <h3 class="h3-template">Auftraggeber</h3>
                    <div class="big-form__block_2">
                        <input placeholder="Vorname*" class="input-template" type="text">
                        <input placeholder="Name*" class="input-template" type="text">
                        <input placeholder="Position in der Firma*" class="firmaoption input-template input-template_hidden" type="text">
                        <input placeholder="Strasse, Hausnummer*" class="input-template" type="text">
                        <input placeholder="Postleitzahl, Ort*" class="input-template" type="text">
                        <input placeholder="Land*" class="input-template" type="text">
                        <input placeholder="Telefon, Mobil*" class="input-template" type="text">
                        <input placeholder="E-Mail*" class="input-template" type="text">
                        <div class="big-form__select  select">
                            <div class="select__header">
                                <span class="select__current">Rabattierung</span>
                                <div class="select__icon">
                                    <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                </div>
                            </div>
                            <div class="select__body">
                                <div class="select__item input-template_hidden firmaoption">Existenzgründer</div>
                                <div class="select__item">Bestandskunde</div> 
                                <div class="select__item privatoption">Rentner</div>
                                <div class="select__item privatoption">Student</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="big-form__block">
                    <h3 class="h3-template">Angaben zum Speichermedium</h3>
                    <p class="p-16-template big-form__block_p">Machen Sie im folgenden Angaben zu allen Speichermedien, die Sie an uns versenden möchten. Die Angabe aller Seriennummern ist unbedingt erforderlich! Die    Seriennummer beginnt fast immer mit S/N. Fragen Sie uns, sollten Sie die Serienummer nicht finden. Beschriften Die das Speichermedium und das Zubehör entsprechend.
                    </p>
                    <div class="big-form__block_3">
                        <div class="big-form__select  select">
                            <div class="select__header">
                                <span class="select__current">Datenträger Typ*</span>
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
                                <div class="select__item">Virtuelle Systeme</div>
                                <div class="select__item">Raid</div>
                                <div class="select__item">Network Attached Storage (NAS)</div>
                                <div class="select__item">Server</div>
                                <div class="select__item">Storage Area Network (San)</div>
                                <div class="select__item">Sonstiger Typ</div>
                            </div>
                        </div>
                        <input placeholder="Hersteller" class="input-template" type="text">
                        <input placeholder="Model" class="input-template" type="text">
                        <input placeholder="Kapazität des Datenträgers, GByte" class="input-template" type="text">
                        <div class="big-form__select  select">
                            <div class="select__header">
                                <span class="select__current">Betriebssystem</span>
                                <div class="select__icon">
                                    <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                </div>
                            </div>
                            <div class="select__body">
                                <div class="select__item">Windows</div>
                                <div class="select__item">Macos</div>
                                <div class="select__item">Linux</div>
                                <div class="select__item">Nicht bekannt</div>
                                <div class="select__item">Sonstiges</div>

                            </div>
                            
                        </div>
                        <div class="big-form__select  select">
                            <div class="select__header">
                                <span class="select__current">Dateisystem</span>
                                <div class="select__icon">
                                    <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                </div>
                            </div>
                            <div class="select__body">
                                <div class="select__item">NTFS</div>
                                <div class="select__item">FAT</div>
                                <div class="select__item">EXFAT</div>
                                <div class="select__item">HFS+</div>
                                <div class="select__item">APFS</div>
                                <div class="select__item">Nicht bekannt</div>
                                <div class="select__item">Sonstiges</div>

                            </div>
                        </div>
                        <div class="big-form__switch">
                            <p>Erkennt das Betriebssysten den Datenträger?</p>
                            <input type="radio" checked name="Betriebssystem" id="form-page-ja">
                            <label for="form-page-ja">Ja</label>
                            <input type="radio" name="Betriebssystem" id="form-page-nein">
                            <label for="form-page-nein">Nein</label>
                        </div>
                        <div  id="form-page-ursachen" class="big-form__select  select input-template_hidden">
                            <div class="select__header">
                                <span class="select__current">Ursachen</span>
                                <div class="select__icon">
                                    <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                </div>
                            </div>
                            <div class="select__body">
                                <div class="select__item">Runtergefallen</div>
                                <div class="select__item">Überspannung</div>
                                <div class="select__item">Flüssigkeitseintritt</div>
                                <div class="select__item">Sonstiges</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="big-form__block">
                    <div class="big-form__block_4">
                        <div>
                            <p>Symptome / Schadensverlauf*</p>
                            <textarea placeholder="z.B.Das Betriebssystem startet nicht und fremde Geräusche gehen vom Datenträger aus (Die Festplatte macht Knacken, Klicken, Piepen)."
                             class="textarea-template" name="textarea" id="textarea-1"></textarea>
                        </div>
                        <div>
                            <p>Eigene Maßnahmen**</p>
                            <textarea placeholder="z.B. Das Gehäuse der Festplatte wurde aufgemacht." class="textarea-template" name="textarea2" id="textarea-2"></textarea>
                        </div>
                        <div>
                            <p>Was sind die wichtigsten Daten?*</p>
                            <textarea placeholder="z.B. Fotos, Videos, Dokumente, Sonstiges (Je genauer die Angaben sind, desto effektiver können wir helfen)" class="textarea-template" name="textarea3" id="textarea-3"></textarea>
                        </div>
                        <p class="p-16-template">Bitte legen Sie ein eigenen Ersatz-Speichermedium falls möglich bei.</p>
                    </div>
                </article>
                <section class="big-form__block">
                    <h3 class="h3-template">Logistik</h3>
                    <div class="big-form__block_5">
                        <div>
                            <div class="big-form__select  select">
                                <div class="select__header">
                                    <span class="select__current">Art von Logistik*</span>
                                    <div class="select__icon">
                                        <img src="<?php echo bloginfo('template_url')?>/assets/icons/arr.svg" alt="arr">
                                    </div>
                                </div>
                                <div class="select__body">
                                    <div class="select__item">Kostenlose Abholung</div>
                                    <div class="select__item">Selbst Versenden</div>
                                    <div class="select__item">Persönliche Abgabe</div>
                                    <div class="select__item firmaoption input-template_hidden">Service Vorort</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Was wird mitgeliefert?* </p>
                            <div class="big-form__checkboxes">
                                <div class="checkbox-template big-form__checkbox">
                                    <input required type="checkbox" name="checkbox1" id="checkbox1">
                                    <label class="checkbox-template__label" for="checkbox1">Auszulesende Speichermedium</label>
                                </div>
                                <div class="checkbox-template big-form__checkbox">
                                    <input required type="checkbox" name="checkbox2" id="checkbox2">
                                    <label class="checkbox-template__label" for="checkbox2">USB-Kabel</label>
                                </div>
                                <div class="checkbox-template big-form__checkbox">
                                    <input required type="checkbox" name="checkbox3" id="checkbox3">
                                    <label class="checkbox-template__label" for="checkbox3">Gehäuse</label>
                                </div>
                                <div class="checkbox-template big-form__checkbox">
                                    <input required type="checkbox" name="checkbox4" id="checkbox4">
                                    <label class="checkbox-template__label" for="checkbox4">Sonstiges</label>
                                </div>
                                <div class="checkbox-template big-form__checkbox">
                                    <input required type="checkbox" name="checkbox5" id="checkbox5">
                                    <label class="checkbox-template__label" for="checkbox5">Netzteil</label>
                                </div>
                            </div>
                            <textarea placeholder="Angabe/Inhalt:" class="textarea-template" name="textarea3" id="textarea-3"></textarea>
                        </div>
                    </div>
                </section>
                <section class="big-form__block big-form__block_6">
                    <p class="p-16-template">
                        Sehr geehrte Kundin, sehr geehrter Kunde, 
                    </p>
                    <p class="p-16-template">
                        mit der Unterzeichnung und Zusendung dieses Formulars gehen Sie kein Risiko ein. Können wir Ihnen nicht helfen, erhalten Sie Ihr Speichermedium kostenfrei zurück! Um Ihren Auftrag kostengünstig bearbeiten zu können, ist es erforderlich dass alle Fragen beantwortet werden. Die Antworten beeinflussen den Ablauf einer Datenrettung. Ihre Antworten helfen uns, die richtige Arbeitsumgebung zu schaffen. 
                    </p>
                    <p class="p-16-template">
                        Vielen Dank – Datenrettungsklinik 
                    </p>
                    <p class="p-16-template">
                        «Ich habe die Informationen zum Thema Datenrettung und die Preisinformationen gelesen und mich über den Ablauf der Datenrettung informiert. Ich weiß, dass ich kein Risiko eingehe und erst bezahle, wenn meine Daten erfolgreich ausgelesen werden konnten. Mir ist bewusst, dass die Datenrettung einer defekten Festplatte aufwändig ist und oft Ersatzteile und sehr teures Equipment benötigt werden, um Daten zu retten. Selbstverständlich bin ich an eine Wiederherstellung meiner Daten interessiert. Besonders wichtige Dateien habe ich benannt. Alle Angaben, auch schriftliche oder mündliche Vereinbarungen, habe ich in das Formular eingetragen. Besonders wichtige Dateien und Verzeichnisse habe ich angegeben. Den Datenspeicher werde ich ausschließlich als < VERSICHERTES PAKET> versenden oder vorbei bringen.»
                    </p>
                    <div class="big-form__checkboxes_2">
                        <div class="checkbox-template big-form__checkbox">
                            <input required type="checkbox" name="checkbox6" id="checkbox6">
                            <label class=" checkbox-template__label" for="checkbox6"><p class="p-16-template">Bitte bestätigen Sie, dass Sie die AGBs der Datenrettungsklinik und die Informationen zum Thema Datenrettung gelesen haben</p> </label>
                        </div>
                        <div class="checkbox-template big-form__checkbox">
                            <input required type="checkbox" name="checkbox7" id="checkbox7">
                            <label class=" checkbox-template__label" for="checkbox7"> <p class="p-16-template">Einwilligungserklärung zur Erhebung / Übermittlung von personenbezogenen Daten gemäß der Europäischen Datenschutz-Grundverordnung (nachfolgend DSGVO genannt)</p> </label>
                        </div>
                    </div>
                    <p class="p-16-template">
                        Einwilligungserklärung  zur  Erhebung  /  Übermittlung  von  personenbezogenen  Daten  gemäß  der  Europäischen          Datenschutz - Grundverordnung (nachfolgend DSGVO genannt).  
                    </p>
                    <p class="p-16-template">Ich erkläre mich einverstanden, dass die Datenrettungsklinik meine personenbezogenen Daten erhoben und     verarbeitet werden. Mir wurde ein Informationsblatt zum <a class="p-16-template" href="<?php the_field('page-form-datenschutz');?>">Datenschutz</a> ausgehändigt, zu welchem ich auch Rückfragen stellen konnte:
                        <ul class="p-16-template">
                            <li>- über den Umfang und die Art meiner Daten</li>
                            <li>- über die Rechtsgrundlagen der Verarbeitung</li>
                            <li>- über die Möglichkeiten, Widerspruch einzulegen und über die Folgen dessen</li>
                        </ul>
                    </p>
                    <p class="p-16-template">Es ist mir bekannt, dass ich diese Erklärung jederzeit ganz oder teilweise für die Zukunft widerrufen kann. Ich bin über die Folgen eines <a class="p-16-template" href="<?php the_field('page-form-widerrufs');?>"> Widerrufs</a>   aufgeklärt worden</p>

                    <div class="big-form__buttons">
                        <a href="<?php echo bloginfo('template_url')?>/pages/form.pdf" download="Auftragsformular.pdf" class="h-button-template">PDF Download 
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 4.7666C13 4.21432 12.5523 3.7666 12 3.7666C11.4477 3.7666 11 4.21432 11 4.7666H13ZM12 14.7659L11.2929 15.473C11.6834 15.8635 12.3166 15.8635 12.7071 15.473L12 14.7659ZM16.7071 11.473C17.0976 11.0825 17.0976 10.4493 16.7071 10.0588C16.3166 9.66826 15.6834 9.66826 15.2929 10.0588L16.7071 11.473ZM8.70711 10.0588C8.31658 9.66826 7.68342 9.66826 7.29289 10.0588C6.90237 10.4493 6.90237 11.0825 7.29289 11.473L8.70711 10.0588ZM11 4.7666V14.7659H13V4.7666H11ZM12.7071 15.473L16.7071 11.473L15.2929 10.0588L11.2929 14.0588L12.7071 15.473ZM12.7071 14.0588L8.70711 10.0588L7.29289 11.473L11.2929 15.473L12.7071 14.0588Z" fill="#2EA0AE"/>
                                <path d="M5 18.7666C4.44772 18.7666 4 19.2143 4 19.7666C4 20.3189 4.44772 20.7666 5 20.7666V18.7666ZM19 20.7666C19.5523 20.7666 20 20.3189 20 19.7666C20 19.2143 19.5523 18.7666 19 18.7666V20.7666ZM5 20.7666H19V18.7666H5V20.7666Z" fill="#2EA0AE"/>
                            </svg>
                        </a>
                        <button class="button-template open-status" type="submit">Absenden</button>
                    </div>

                </section>
            </form>
        </div>

    </main>

<?php
    get_footer();
?>