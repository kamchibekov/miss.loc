<?php



    function registerMenu(){

        add_theme_support('menus');
        register_nav_menus( array('miss-menu' => esc_html__( 'Miss Menu', 'missmenu' )) );
    }




add_action('customize_register', function($customizer) {

/* Main slider Begin! */
    $customizer->add_section( 'main-slider', array('title' => 'Главный слайдер','description' => '','priority' => 2,));

        $customizer->add_setting('img-slider-main-1');
        $customizer->add_control( new WP_Customize_Image_Control($customizer,'img-slider-main-1', array('label' => 'Фото 1','section' => 'main-slider','settings' => 'img-slider-main-1')));

        $customizer->add_setting( 'img-slider-href-1', array('default' => '#'));
        $customizer->add_control( 'img-slider-href-1', array('label' => 'Ссылка Фото 1','section' => 'main-slider','type' => 'text',));

        $customizer->add_setting('img-slider-main-2');
        $customizer->add_control( new WP_Customize_Image_Control($customizer,'img-slider-main-2', array('label' => 'Фото 2','section' => 'main-slider','settings' => 'img-slider-main-2')));

        $customizer->add_setting( 'img-slider-href-2', array('default' => '#'));
        $customizer->add_control( 'img-slider-href-2', array('label' => 'Ссылка Фото 2','section' => 'main-slider','type' => 'text',));

        $customizer->add_setting('img-slider-main-3');
        $customizer->add_control( new WP_Customize_Image_Control($customizer,'img-slider-main-3', array('label' => 'Фото 3','section' => 'main-slider','settings' => 'img-slider-main-3')));

        $customizer->add_setting( 'img-slider-href-3',   array('default' => '#'));
        $customizer->add_control( 'img-slider-href-3', array('label' => 'Ссылка Фото 3','section' => 'main-slider','type' => 'text',));

        $customizer->add_setting('img-slider-main-4');
        $customizer->add_control( new WP_Customize_Image_Control($customizer,'img-slider-main-4', array('label' => 'Фото 4','section' => 'main-slider','settings' => 'img-slider-main-4')));

        $customizer->add_setting( 'img-slider-href-4',   array('default' => '#'));
        $customizer->add_control( 'img-slider-href-4', array('label' => 'Ссылка Фото 4','section' => 'main-slider','type' => 'text',));

    /* Main slider end! */

/* Small Banner Begin! */

    $customizer->add_section( 'small-banner', array('title' => 'Баннер','description' => '','priority' => 3,));

        $customizer->add_setting('img-banner-1');
        $customizer->add_control( new WP_Customize_Image_Control($customizer,'img-banner-1', array('label' => 'Баннер 1','section' => 'small-banner','settings' => 'img-banner-1')));

        $customizer->add_setting( 'img-banner-href-1', array('default' => '#'));
        $customizer->add_control( 'img-banner-href-1', array('label' => 'Ссылка баннер 1','section' => 'small-banner','type' => 'text',));

        $customizer->add_setting('img-banner-2');
        $customizer->add_control( new WP_Customize_Image_Control($customizer,'img-banner-2', array('label' => 'Баннер 2','section' => 'small-banner','settings' => 'img-banner-2')));

        $customizer->add_setting( 'img-banner-href-2', array('default' => '#'));
        $customizer->add_control( 'img-banner-href-2', array('label' => 'Ссылка баннер 2','section' => 'small-banner','type' => 'text',));

        $customizer->add_setting('img-banner-3');
        $customizer->add_control( new WP_Customize_Image_Control($customizer,'img-banner-3', array('label' => 'Баннер 3','section' => 'small-banner','settings' => 'img-banner-3')));

        $customizer->add_setting( 'img-banner-href-3',   array('default' => '#'));
        $customizer->add_control( 'img-banner-href-3', array('label' => 'Ссылка баннер 3','section' => 'small-banner','type' => 'text',));



/* Small Banner End! */

});























/* Miss Scripts and Css Begin! */

function missScripts() {

    /*----------------- Google Fonts --------------------------------------*/

    /*------------------- CSS Style ---------------------------------*/

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');

    wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

    /* Owl carousel*/
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/owlcarousel/css/owl.carousel.min.css');

    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/owlcarousel/css/owl.theme.default.min.css');

    wp_enqueue_style( 'miss-style', get_stylesheet_uri() );


    /*------------------- JavaScript ---------------------------------------*/

    wp_register_script('miss-jquery', get_template_directory_uri() . '/js/jquery.js','','1.1', true);
    wp_enqueue_script( 'miss-jquery');

    wp_register_script('miss-bootstrap', get_template_directory_uri() . '/js/bootstrap.js','','1.1', true);
    wp_enqueue_script( 'miss-bootstrap');

    wp_register_script('miss-owl', get_template_directory_uri() . '/owlcarousel/js/owl.carousel.min.js','','1.1', true);
    wp_enqueue_script( 'miss-owl');

    wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js','','1.1', true);
    wp_enqueue_script( 'custom-js');

}


/* All Actions Begin! */

add_action('init', 'registerMenu');
add_action( 'wp_enqueue_scripts', 'missScripts' );

/* All Actions End! */

/* Miss Scripts and Css End! */