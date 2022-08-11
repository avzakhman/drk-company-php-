<?php
    /*
    Template Name: page-preise
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container preise">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>
            <span class="p-16-template">
                <?php
                    the_field('preise-description_navline');
                ?>
            </span>
        </nav>
        <h1 class="h2-template">
            <?php
                the_field('preise-description_heading');
            ?>
        </h1>
        <section class="preise-paragraphs">
            <div class="preise-paragraphs__block">
                <p class="p-16-template">
                    <?php
                        the_field('preise-description_paragraph_1');
                    ?>
                </p>
                <ul class="p-16-template">
                    <li><?php the_field('preise-description_paragraph_2');?></li>
                    <li><?php the_field('preise-description_paragraph_3');?></li>
                    <li><?php the_field('preise-description_paragraph_4');?></li>
                    <li><?php the_field('preise-description_paragraph_5');?></li>
                </ul>
            </div>
            
            <div class="preise-paragraphs__block">
                <p class="p-16-template">
                    <?php
                        the_field('preise-description_paragraph_6');
                    ?>
                </p>
            </div>

        </section>
        <section class="preise-table">
            <table>
                <tr>
                    <th><?php the_field('preise-table_leistungen');?></th>
                    <th><?php the_field('preise-table_preise');?></th>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_1');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_1');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_1');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_2');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_2');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_2');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_3');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_3');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_3');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_4');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_4');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_4');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_5');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_5');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_5');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_6');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_6');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_6');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_7');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_7');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_7');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_8');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_8');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_8');?></td>
                </tr>
                <tr>
                    <td><?php the_field('preise-table_heading_9');?>
                        <p class="p-16-template"><?php the_field('preise-table_paragraph_9');?></p>
                    </td> 
                    <td><?php the_field('preise-table_preis_9');?></td>
                </tr>
            </table>
        </section>
        <section class="preise-wieviel">
            <h2 class="h2-template"><?php the_field('preise-wieviel_heading');?></h2>
            <div class="preise-wieviel__wrapper">
                <div class="preise-wieviel__block">
                    <p class="p-16-template"><?php the_field('preise-wieviel_paragraph_1');?></p>
                    <p class="p-16-template"><?php the_field('preise-wieviel_paragraph_2');?></p>
                </div>
                <div class="preise-wieviel__block">
                    <h3 class="h3-template"><?php the_field('preise-wieviel_subheading');?></h3>
                    <ul class="p-16-template">
                        <li>
                            <?php the_field('preise-wieviel_paragraph_3');?>
                            <a href="tel:<?php the_field('preise-wieviel_paragraph_3-ref');?>" class="p-16-blue-template">
                                <?php the_field('preise-wieviel_paragraph_3-2');?>
                            </a>
                        </li>
                        <li>
                            <?php the_field('preise-wieviel_paragraph_4');?>
                            <a href="<?php the_field('preise-wieviel_paragraph_4-ref'); ?>" class="p-16-blue-template"><?php the_field('preise-wieviel_paragraph_4-2');?></a>
                            <?php the_field('preise-wieviel_paragraph_4-3');?>
                        </li>
                    </ul>
                    <p class="p-16-template"> 
                        <?php the_field('preise-wieviel_paragraph_5');?>
                    </p>
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