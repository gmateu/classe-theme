<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php wp_head();?>
</head>
<body>
    <header>
        <section id="search">
            <div class="container">
                buscar
            </div>
        </section>
        <section id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="first-col brand col-3">
                        logo
                    </div>
                    <div class="second-col col-9">
                        <div class="account">cuenta</div>
                        <div class="menu">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'defabrica_main_menu'
                                )
                            );
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>