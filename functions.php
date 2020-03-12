<?php
function defabrica_config(){
    register_nav_menus(array(
        'defabrica_main_menu'  => 'De Fabrica Main Menu',
        'defabrica_footer_menu'  => 'De Fabrica Footer Menu',
    ));   
}

add_action( 'after_setup_theme', 'defabrica_config', 0 );


function defabrica_scripts(){
    //aqui cargamos estilos y javascript
    wp_enqueue_script( "bootstrap_js", get_theme_file_uri("inc/bootstrap.min.js"), array("jquery"),"4.3.1", true );
    wp_enqueue_style( "bootstrap_css", get_theme_file_uri("inc/bootstrap.min.css"),array(), "4.3.1","all" );
    wp_enqueue_style( "defabrica_style.css",  get_stylesheet_uri(), array(),'1.0','all');
}
add_action( 'wp_enqueue_scripts', 'defabrica_scripts');

?>