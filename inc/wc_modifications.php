<?php

function defabrica_wc_modify(){


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

    if (is_shop()){

        //agregar classes bootstrap al side-bar
         add_action('woocommerce_before_main_content','defabrica_add_sidebar_tags',6);
         function defabrica_add_sidebar_tags(){
             ?>
                 <div class="sidebar-shop d-none d-md-block col-lg-3 col-md-4 order-2 order-md-1">
             <?php
         
         }
         
         //i el posam on volem
         add_action('woocommerce_before_main_content','woocommerce_get_sidebar',7);
         
         //cerramos el div de estilos del SIDEBAR
         add_action('woocommerce_before_main_content','defabrica_close_sidebar_tags',8);
         function defabrica_close_sidebar_tags(){
             ?>
                 </div><!--cerramos sidebar tags-->
             <?php
         }
    }
        
    
    /*
    <div class="container">
        <div class="row"> prioridad 5 en before
            <div class="col-4"> prioridad 6 en before
                <div class="sidebar"></div>  prioridat 7 en before 
            </div>  prioridad 8 en before 
            <div class="col-9"> prioridad 9 en before
            
            </div> priorida 4 en after 
        </div> prioridad 5 en after
    </div>
    */
    
    //añadiremos estilos al contenido main
    add_action('woocommerce_before_main_content','defabrica_add_shop_tags',9);
    function defabrica_add_shop_tags(){
        if(is_shop()){
        ?>
            <div class="sidebar-shop col-lg-9 col-md-8 order-1 order-md-2">
        <?php
        }else{
            ?>
            <div class="col">
            <?php
        }
    }
    
    //cerramos los tags del main abajo del todo
    add_action('woocommerce_after_main_content','defabrica_close_shop_tags',4);
    function defabrica_close_shop_tags(){
        ?>
            </div><!--cerramos shop tags-->
        <?php
    }

    add_filter('woocommerce_show_page_title','info_basic_page_title');
    function info_basic_page_title(){
        ?>
        <h1>Camaleon</h1>
        <?php
    
    }
}

add_action('wp','defabrica_wc_modify');

