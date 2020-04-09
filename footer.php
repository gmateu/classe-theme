<section id="footer">
    <div class="row">
        <div class="footer-widgets col-6 text-center">
            footer widgets
        </div>
        <div class="menu-footer col-6">
        <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'defabrica_main_menu'
                            )
                        );
                    ?>
        </div>
    </div>
</section>
    <?php wp_footer();?>
</body>
</html>