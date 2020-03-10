<?php
function defabrica_config(){
    register_nav_menus(array(
        'defabrica_main_menu'  => 'De Fabrica Main Menu',
    ));   
}

add_action( 'after_setup_theme', 'defabrica_config', 0 );
?>