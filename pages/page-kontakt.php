<?php
    /*
    Template Name: page-kontakt
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container">
        <nav class="nav-line">
            <a class="p-16-blue-template" href="/">Home</a><span class="p-16-template">
                <?php
                    the_field('kontakt-contacts_navline');
                ?>
            </span>
        </nav>
        <section class="kontakt-map">
            <h1 class="h2-template">
                <?php
                    the_field('kontakt-contacts_heading');
                ?>
            </h1>
            <div class="kontakt-map__wrapper">
                <div class="kontakt-map__contacts">
                    <h2 class="h3-template"> 
                        <?php
                            the_field('kontakt-contacts_heading-2');
                        ?>
                    </h2>
                    <div class="kontakt-map__address">
                        <h3 class="h4-template">
                            <?php
                                the_field('kontakt-contacts_adresse_1');
                            ?>
                        </h3>
                        <address class="p-16-template">
                            <?php
                                the_field('kontakt-contacts_adresse_2');
                            ?>
                        </address>
                    </div>
                    <div class="kontakt-map__socials">
                        <h3 class="h4-template">
                            <?php
                                the_field('kontakt-contacts_hotline_1');
                            ?>
                        </h3>
                        <a class="p-16-blue-template" href="tel:<?php the_field('kontakt-contacts_hotline_ref');?>"> 
                            <?php
                                the_field('kontakt-contacts_hotline_2');
                            ?>
                        </a>
                        <h3 class="h4-template">
                            <?php
                                the_field('kontakt-contacts_telefax_1');
                            ?>
                        </h3>
                        <a class="p-16-blue-template" href="tel:<?php the_field('kontakt-contacts_telefax_ref');?>">
                            <?php
                                the_field('kontakt-contacts_telefax_2');
                            ?>
                        </a>
                        <h3 class="h4-template">
                            <?php
                                the_field('kontakt-contacts_email_1');
                            ?>
                        </h3>
                        <a class="p-16-blue-template" href="mailto:<?php the_field('kontakt-contacts_email_ref');?>">
                        <?php the_field('kontakt-contacts_email_2');?>
                        </a>
                    </div>
                    <div class="kontakt-map__offnungszeiten">
                        <h3 class="h4-template">
                            <?php
                                the_field('kontakt-contacts_offnungszeiten_1');
                            ?>
                        </h3>
                        <p class="p-16-template">
                            <?php
                                the_field('kontakt-contacts_offnungszeiten_2');
                            ?>
                        </p>
                    </div>
                </div>
                <div class="kontakt-map__map">
                    <iframe src="<?php the_field('kontakt-contacts_map');?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <section class="finden">
            <h2 class="h3-template">
                <?php
                    the_field('kontakt-images_heading');
                ?>
            </h2>
            <div class="finden__wrapper">
                <?php
                    $image = get_field('kontakt-images_image_1');

                    if (!empty($image)): ?>
                        <img
                            src ="<?php echo $image['url']; ?>"
                            alt ="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?>
                <?php
                    $image = get_field('kontakt-images_image_2');

                    if (!empty($image)): ?>
                        <img
                            src ="<?php echo $image['url']; ?>"
                            alt ="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?>
                <?php
                    $image = get_field('kontakt-images_image_3');

                    if (!empty($image)): ?>
                        <img
                            src ="<?php echo $image['url']; ?>"
                            alt ="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?>

            </div>
        </section>
        
        <form method="POST" class="kontakt-form">
            <h2 class="h2-template">
                <?php
                    the_field('kontakt-kontaktformular_heading');
                ?>
            </h2>
            <h3 class="h3-template">
                <?php
                    the_field('kontakt-kontaktformular_descr');
                ?>
            </h3>
            <textarea required placeholder="Ihre Nachricht" class="textarea-template" name="kontakt_textarea" id="kontakt-textarea"></textarea>
            <div class="kontakt-form__inputs">
                <div class="kontakt-form__input-block">
                    <h3 class="h3-template">
                        <?php
                            the_field('kontakt-kontaktformular_name');
                        ?>
                    </h3>
                    <input required placeholder="Name*" class="input-template" name="name" type="text">
                </div>
                <div class="kontakt-form__input-block">
                    <h3 class="h3-template">
                        <?php
                            the_field('kontakt-kontaktformular_email');
                        ?>
                    </h3>
                    <input required placeholder="E-mail*" class="input-template" name="email" type="text">
                </div>

            </div>
            <div class="checkbox-template kontakt-form__terms">
                <input required type="checkbox" name="terms" id="terms">
                <label class="checkbox-template__label" for="terms">
                    <?php
                        the_field('kontakt-kontaktformular_dateschutz_1');
                    ?>
                    <a href="<?php the_field('kontakt-kontaktformular_dateschutz_2_ref');?>">
                        <?php
                            the_field('kontakt-kontaktformular_dateschutz_2');
                        ?></a> <?php the_field('kontakt-kontaktformular_dateschutz_3');?>
                </label>
            </div>
            <button type="submit" class="button-template">Nachricht senden</button>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".kontakt-form").submit(function(e) {
                    e.preventDefault();//устанавливаем событие отправки для формы с id=form
                    var form_data = $(this).serialize(); //собераем все данные из формы
                    $.ajax({
                    type: 'POST', //Метод отправки
                    url: '<?php echo bloginfo('template_url')?>/pages/send.php', //путь до php фаила отправителя
                    data: form_data,
                            success: function(data){ // сoбытиe пoслe удaчнoгo oбрaщeния к сeрвeру и пoлучeния oтвeтa
                                alert('отправка завершена'); // пoкaжeм eё тeкст

                            },
                            error: function(data){ 
                                alert('что-то пошло не так'); // пoкaжeм eё тeкст
                            }
                    });
                });
            });    
        </script>
    </div>
</main>

<?php
    get_footer();
?>