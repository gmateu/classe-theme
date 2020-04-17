<?php

add_action('woocommerce_before_main_content','defabrica_abrir_container_row',5);
function defabrica_abrir_container_row(){
    ?>
        <div class="container">
            <div class="row">
    <?php
}


add_action('woocommerce_after_main_content','defabrica_cerrar_container_row',5);
function defabrica_cerrar_container_row(){
    ?>
            </div><!--cerramos row-->
        </div><!--cerramos container-->
    <?php
}


//AQUI VAMOS A QUITAR EL SIDEBAR
remove_action('woocommerce_sidebar','woocommerce_get_sidebar');
//i el posam on volem
add_action('woocommerce_before_main_content','woocommerce_get_sidebar',7);