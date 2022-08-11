<?php
    /*
    Template Name: 404
    */
?>

<?php
    get_header();
?>

<main>
    <div class="container">
        <section class="aufbau error-404">
            <img class="not-found" src=" <?php echo bloginfo('template_url')?>/assets/img/404.png" alt="404">
            <h1 class="h2-template">Oops..<br>Seite nicht gefunden
            </h1>
            <h2 class="p-16-template">Die gesuchte Seite existiert nicht <br> oder wurde verschoben.</h2>
            <a href="/" class="button-template">Zur Startseite</a>
        </section>
    </div>
</main>

<?php
    get_footer();
?>