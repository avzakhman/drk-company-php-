<?php 

function wpEnqueueScripts(){

    wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'));
    wp_enqueue_script('custom-script');

    wp_register_script('myscript', get_template_directory_uri() . '/assets/js/menu.js', array('jquery'));
    wp_enqueue_script('myscript');

    wp_register_script('script-2', get_template_directory_uri() . '/assets/js/datenrettung.js', array('jquery'));
    wp_enqueue_script('script-2');

    wp_register_script('script-cookies', get_template_directory_uri() . '/assets/js/cookies.js', array('jquery'));
    wp_enqueue_script('script-cookies');

    wp_register_script('script-blog', get_template_directory_uri() . '/assets/js/blog.js', array('jquery'));
    wp_enqueue_script('script-blog');
}    

add_action('wp_enqueue_scripts', 'wpEnqueueScripts');


add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );




function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'pages/page-form.php' ) ) {
        wp_enqueue_style( 'page-form', get_template_directory_uri() . '/assets/css/form-page.css' );
        wp_register_script('formscript', get_template_directory_uri() . '/assets/js/form-page.js', array('jquery'));
        wp_enqueue_script('formscript');
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );


function wpse_enqueue_page_template_styles_2() {
    if ( is_page_template( 'index.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/style.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_2' );




function wpse_enqueue_page_template_styles_3() {
    if ( is_page_template( 'pages/page-ablauf.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/ablauf-page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_3' );

function wpse_enqueue_page_template_styles_4() {
    if ( is_page_template( 'pages/page-agb.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/agb.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_4' );

function wpse_enqueue_page_template_styles_5() {
    if ( is_page_template( 'pages/page-datenshutzerklarung.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenschutzerklarung.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_5' );

function wpse_enqueue_page_template_styles_6() {
    if ( is_page_template( 'pages/page-widerrufsbelehrung.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/widerrufsbelehrung.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_6' );
function wpse_enqueue_page_template_styles_7() {
    if ( is_page_template( 'pages/page-widerrufsformular.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/widerrufsformular.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_7' );
function wpse_enqueue_page_template_styles_8() {
    if ( is_page_template( 'pages/page-kontakt.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/kontakt.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_8' );

function wpse_enqueue_page_template_styles_9() {
    if ( is_page_template( 'pages/page-preise.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/preise.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_9' );

function wpse_enqueue_page_template_styles_10() {
    if ( is_page_template( 'pages/page-impressum.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/impressum.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_10' );

function wpse_enqueue_page_template_styles_11() {
    if ( is_page_template( '404.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/aufbau.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_11' );

function wpse_enqueue_page_template_styles_12() {
    if ( is_page_template( 'pages/page-aufbau.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/aufbau.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_12' );





function wpse_enqueue_page_template_styles_13() {
    if ( is_page_template( 'pages/page-externe-festplatte.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_externe.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_13' );

function wpse_enqueue_page_template_styles_14() {
    if ( is_page_template( 'pages/page-hdd.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_hdd.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_14' );

function wpse_enqueue_page_template_styles_15() {
    if ( is_page_template( 'pages/page-flash.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_flash.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_15' );

function wpse_enqueue_page_template_styles_16() {
    if ( is_page_template( 'pages/page-sd-carte.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_sd.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_16' );

function wpse_enqueue_page_template_styles_17() {
    if ( is_page_template( 'pages/page-ssd.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_ssd.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_17' );

function wpse_enqueue_page_template_styles_18() {
    if ( is_page_template( 'pages/page-usb-stick.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_usb-stick.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_18' );






function wpse_enqueue_page_template_styles_19() {
    if ( is_page_template( 'pages/apple-mac.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_mac.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_19' );

function wpse_enqueue_page_template_styles_20() {
    if ( is_page_template( 'pages/geloschte-dateien.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_geloschte.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_20' );

function wpse_enqueue_page_template_styles_21() {
    if ( is_page_template( 'pages/laptop.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_laptop.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_21' );

function wpse_enqueue_page_template_styles_22() {
    if ( is_page_template( 'pages/nas-datenrettung.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_nas.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_22' );

function wpse_enqueue_page_template_styles_23() {
    if ( is_page_template( 'pages/nas-qnap.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/nas-qnap.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_23' );

function wpse_enqueue_page_template_styles_24() {
    if ( is_page_template( 'pages/nas-synology.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/nas-synology.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_24' );

function wpse_enqueue_page_template_styles_25() {
    if ( is_page_template( 'pages/nas-wd.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/nas-wd.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_25' );

function wpse_enqueue_page_template_styles_26() {
    if ( is_page_template( 'pages/raid-datenrettung.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_raid.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_26' );

function wpse_enqueue_page_template_styles_27() {
    if ( is_page_template( 'pages/san-datenrettung.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_san.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_27' );

function wpse_enqueue_page_template_styles_28() {
    if ( is_page_template( 'pages/server-datenrettung.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/server-datenrettung.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_28' );

function wpse_enqueue_page_template_styles_29() {
    if ( is_page_template( 'pages/virtuelle-systeme.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/datenrettung_virtuelle.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_29' );


function wpse_enqueue_page_template_styles_30() {
    if ( is_page_template( 'pages/blog.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/blog-page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_30' );











function wpse_enqueue_page_template_styles_31() {
    if ( is_page_template( 'pages/blog_1.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/blog-post-page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_31' );

function wpse_enqueue_page_template_styles_32() {
    if ( is_page_template( 'pages/blog_2.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/blog-post-page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_32' );

function wpse_enqueue_page_template_styles_33() {
    if ( is_page_template( 'pages/blog_3.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/blog-post-page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_33' );

function wpse_enqueue_page_template_styles_34() {
    if ( is_page_template( 'pages/blog_4.php' ) ) {
        wp_enqueue_style( 'page-main', get_template_directory_uri() . '/assets/css/blog-post-page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles_34' );




?>

