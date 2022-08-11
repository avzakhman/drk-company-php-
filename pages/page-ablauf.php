<?php
    /*
    Template Name: page-ablauf
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a>
            <span class="p-16-template">
                <?php
                    the_field('ablauf-description_navline');
                ?>
            </span>
        </nav>
        <section class="ablauf-descr">
            <h1 class="h2-template"><?php the_field('ablauf-description_heading');?></h1>
            <p class="p-16-template">
                <?php the_field('ablauf-description_paragraph');?>
            </p>
        </section>
        <section class="ablauf-articles">
            <article class="ablauf-article">
                <div class="ablauf-article__descr">
                    <h2 class="h3-template"><?php the_field('ablauf-articles_heading_1');?></h2>
                    <p class="p-16-template"><?php the_field('ablauf-articles_paragraph_1_1');?></p>
                    <ul class="p-16-template">
                        <li>
                            <?php the_field('ablauf-articles_paragraph_1_2');?>
                            <a href="<?php the_field('ablauf-articles_paragraph_1_3-ref');?>" class="p-16-blue-template"><?php the_field('ablauf-articles_paragraph_1_3');?></a>
                            <?php the_field('ablauf-articles_paragraph_1_4');?>
                        </li>
                        <li>
                            <?php the_field('ablauf-articles_paragraph_1_5');?>
                            <a href="tel:<?php the_field('ablauf-articles_paragraph_1_6-ref');?>" class="p-16-blue-template"><?php the_field('ablauf-articles_paragraph_1_6');?></a>.
                        </li>
                    </ul>
                    <p class="p-16-template"><?php the_field('ablauf-articles_paragraph_1_7');?></p>
                </div>
                <div class="ablauf-article__image">
                    <?php
                        $image = get_field('ablauf-articles_image_1');

                        if (!empty($image)): ?>
                            <img
                                src ="<?php echo $image['url']; ?>"
                                alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?>
                </div>
            </article>
            <article class="ablauf-article">
                <div class="ablauf-article__descr">
                    <h2 class="h3-template"><?php the_field('ablauf-articles_heading_2');?></h2>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_2_1');?>
                    </p>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_2_2');?>
                    </p>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_2_3');?>
                    </p>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_2_4');?>
                    </p>
                </div>
                <div class="ablauf-article__image">
                    <?php
                        $image = get_field('ablauf-articles_image_2');

                        if (!empty($image)): ?>
                            <img
                                src ="<?php echo $image['url']; ?>"
                                alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?>
                </div>
            </article>
            <article class="ablauf-article">
                <div class="ablauf-article__descr">
                    <h2 class="h3-template"><?php the_field('ablauf-articles_heading_3');?></h2>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_3_1');?>
                        <span class="p-16-blue-template"><?php the_field('ablauf-articles_paragraph_3_2');?></span> 
                        <?php the_field('ablauf-articles_paragraph_3_3');?>
                    </p>
                </div>
                <div class="ablauf-article__image">
                    <?php
                        $image = get_field('ablauf-articles_image_3');

                        if (!empty($image)): ?>
                            <img
                                src ="<?php echo $image['url']; ?>"
                                alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?>
                </div>
            </article>
            <article class="ablauf-article">
                <div class="ablauf-article__descr">
                    <h2 class="h3-template"><?php the_field('ablauf-articles_heading_4');?></h2>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_4_1');?>
                    </p>
                    <ul class="p-16-template">
                        <li><?php the_field('ablauf-articles_paragraph_4_2');?></li>
                        <li><?php the_field('ablauf-articles_paragraph_4_3');?></li>
                        <li><?php the_field('ablauf-articles_paragraph_4_4');?></li>
                    </ul>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_4_5');?>
                    </p>
                </div>
                <div class="ablauf-article__image">
                    <?php
                        $image = get_field('ablauf-articles_image_4');

                        if (!empty($image)): ?>
                            <img
                                src ="<?php echo $image['url']; ?>"
                                alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?>
                </div>
            </article>
            <article class="ablauf-article">
                <div class="ablauf-article__descr">
                    <h2 class="h3-template"><?php the_field('ablauf-articles_heading_5');?></h2>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_5_1');?>
                        <span class="p-16-blue-template"><?php the_field('ablauf-articles_paragraph_5_2');?></span>
                        <?php the_field('ablauf-articles_paragraph_5_3');?>
                    </p>
                </div>
                <div class="ablauf-article__image">
                    <?php
                        $image = get_field('ablauf-articles_image_5');

                        if (!empty($image)): ?>
                            <img
                                src ="<?php echo $image['url']; ?>"
                                alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?>
                </div>
            </article>
            <article class="ablauf-article">
                <div class="ablauf-article__descr">
                    <h2 class="h3-template"><?php the_field('ablauf-articles_heading_6');?></h2>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_6_1');?>  
                    </p>
                    <ul class="p-16-template">
                        <li><?php the_field('ablauf-articles_paragraph_6_2');?></li>
                        <li><?php the_field('ablauf-articles_paragraph_6_3');?></li>
                        <li><?php the_field('ablauf-articles_paragraph_6_4');?></li>
                    </ul>
                    <p class="p-16-template">
                        <?php the_field('ablauf-articles_paragraph_6_5');?>  
                    </p>
                </div>
                <div class="ablauf-article__image">
                    <?php
                        $image = get_field('ablauf-articles_image_6');

                        if (!empty($image)): ?>
                            <img
                                src ="<?php echo $image['url']; ?>"
                                alt ="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?>
                </div>
            </article>
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