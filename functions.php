<?php
//cargamos librerias de terceros
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


function defabrica_config(){
    register_nav_menus(array(
        'defabrica_main_menu'  => 'De Fabrica Main Menu',
        'defabrica_footer_menu'  => 'De Fabrica Footer Menu',
    ));
    
    //Añadir soporte de woocommerce
    add_theme_support('woocommerce',array(
        'thumbnail_image_width'     => 255,
        'single_image_width'        => 255,
        'product_grid'              => array(
                'default_rows'    => 10,
                'min_rows'        =>  5,
                'max_rows'        => 10,
                'default_columns' =>  1,
                'min_columns'     =>  1,
                'max_columns'     =>  10, 
        ),
    ));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'defabrica_config',0 );


function defabrica_scripts(){
    //aqui cargamos estilos y javascript de bootstrap
    wp_enqueue_script( "bootstrap_js", get_theme_file_uri("inc/bootstrap.min.js"), array("jquery"),"4.3.1", true );
    wp_enqueue_style( "bootstrap_css", get_theme_file_uri("inc/bootstrap.min.css"),array(), "4.3.1","all" );

    //añade a header.php el fichero style.css
    wp_enqueue_style( "defabrica_style.css",  get_stylesheet_uri(), array(),filemtime(get_template_directory().'/style.css'),'all');
    wp_enqueue_style("fuentes_de_google","https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700|https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;700|https://fonts.googleapis.com/css2?family=Dancing+Script");
}
add_action( 'wp_enqueue_scripts', 'defabrica_scripts');

require get_template_directory().'/inc/wc_modifications.php';

