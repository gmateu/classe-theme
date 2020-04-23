<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php wp_head();?>
</head>
<body <?php body_class()?>>
    <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'defabrica_main_menu',
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="" id="search">
                            <?php get_search_form()?>
                        </div>                            
                    </div>
                    <div class="acount col-12 col-md-4">
                        <div class="navbar-expand">
                            <ul class="navbar-nav">
                                <?php if(is_user_logged_in(  )):?>
                                <li>
                                    <a href="<?php echo esc_url(get_permalink( get_option( 'woocommerce_myaccount_page_id')))?>" class="nav-link">Mi cuenta</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(wp_logout_url(get_permalink( get_option( 'woocommerce_myaccount_page_id'))  ))?>" class="nav-link">Log out</a>
                                </li>
                                <?php else:?>
                                <li>
                                    <a href="<?php echo esc_url(get_permalink( get_option( 'woocommerce_myaccount_page_id')))?>" class="nav-link">Login</a>
                                </li>
                                <?php endif?>
                            </ul>    
                        </div>
                    </div>        
                    <div class="carrito col-12 col-md-2">
                        <div class="cart text-center text-md-right">
                            <a href="<?php echo wc_get_cart_url()?>">
                                <span class="cart-icon"></span>
                            </a>
                            <span class="items">
                                <?=WC()->cart->get_cart_contents_count();?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
</header>



