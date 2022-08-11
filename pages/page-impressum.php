<?php
    /*
    Template Name: page-impressum
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container impressum">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a><span class="p-16-template">
                <?php
                    the_field('impressum-main_navline');
                ?>
            </span>
        </nav>
        <h1 class="h2-template"><?php the_field('impressum-main_heading');?></h1>
        <section class="impressum__contacts">
            <div>
                <p class="p-16-template"><?php the_field('impressum-main_line_1');?></p>
                <a href="<?php the_field('impressum-main_line_2-ref');?>" class="p-16-blue-template"><?php the_field('impressum-main_line_2');?></a>
                <p class="p-16-template"><?php the_field('impressum-main_line_3');?></p>
                <address class="p-16-template"><?php the_field('impressum-main_line_4');?></address>
            </div>
            <div>
                <p class="p-16-template"><?php the_field('impressum-main_line_5');?></p>
                <p class="p-16-template"><?php the_field('impressum-main_line_6');?></p>
                <p class="p-16-template"><?php the_field('impressum-main_line_7');?></p>
                <p class="p-16-template"><?php the_field('impressum-main_line_8');?>
                    <a href="<?php the_field('impressum-main_line_9-ref');?>" class="p-16-blue-template"><?php the_field('impressum-main_line_9');?></a>
                </p>
                <p class="p-16-template"><?php the_field('impressum-main_line_10');?></p>
            </div>
        </section>
        <section class="impressum__text">
            <article class="article-template">
                <p class="p-16-template">
                    <?php the_field('impressum-main_line_11');?><br>
                    <?php the_field('impressum-main_line_12');?>
                </p>
            </article>
            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-main_subheading');?></h2>
                <p class="p-16-template">
                    <?php the_field('impressum-main_line_13');?><br>
                    <?php the_field('impressum-main_line_14');?>
                </p>
            </article>
            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-articles_header_1');?></h2>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_1_1');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_1_2');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_1_3');?>
                </p>
            </article>
            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-articles_header_2');?></h2>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_2');?>
                </p>
            </article>

            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-articles_header_3');?></h2>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_3_1');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_3_2');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_3_3');?>
                </p>
            </article>
            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-articles_header_4');?></h2>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_1');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_2');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_3');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_4');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_5');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_6');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_7');?>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_4_8');?>
                </p>
            </article>
            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-articles_header_5');?></h2>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_5_1');?>
                    <br><?php the_field('impressum-articles_paragraph_5_2');?>
                    <a href="<?php the_field('impressum-articles_paragraph_5_3-ref');?>" class="p-16-blue-template"> <?php the_field('impressum-articles_paragraph_5_3');?></a>
                    <?php the_field('impressum-articles_paragraph_5_4');?>
                    <br>
                    <?php the_field('impressum-articles_paragraph_5_5');?>
                </p>
            </article>
            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-articles_header_6');?></h2>
                <p class="p-16-template"><?php the_field('impressum-articles_paragraph_6_1');?></p>
                <p class="p-16-template"><?php the_field('impressum-articles_paragraph_6_2');?></p>
                <p class="p-16-template"><?php the_field('impressum-articles_paragraph_6_3');?></p>
                <p class="p-16-template"><?php the_field('impressum-articles_paragraph_6_4');?></p>
                <p class="p-16-template"><?php the_field('impressum-articles_paragraph_6_5');?>
                    <a class="p-16-blue-template" href="mailto:<?php the_field('impressum-articles_paragraph_6_6-ref');?>"><?php the_field('impressum-articles_paragraph_6_6');?></a>
                </p>
                <p class="p-16-template"><?php the_field('impressum-articles_paragraph_6_7');?>
                    <a class="p-16-blue-template" href="<?php the_field('impressum-articles_paragraph_6_8-ref');?>"><?php the_field('impressum-articles_paragraph_6_8');?></a>
                </p>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_6_9');?>
                </p>
            </article>
            <article class="article-template">
                <h2 class="h4-template"><?php the_field('impressum-articles_header_7');?></h2>
                <p class="p-16-template">
                    <?php the_field('impressum-articles_paragraph_7_1');?>
                </p>
            </article>
        </section>
    </div>
</main>

<?php
    get_footer();
?>