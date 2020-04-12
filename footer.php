
<hr>
<section id="footer">
    <div class="row text-center text-md-left text-small">
        <div class="col-12 col-md-3">
            <div class="ml-md-5">
                <h4>logo</h4>
                <small class="mb-3 text-muted">© 2020-2021</small>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <h4>Features</h4>
            <?php 
                wp_nav_menu(
                   array(
                       'theme_location' => 'defabrica_footer_menu'
                    ))
            ?>
        </div>
        <div class="col-12 col-md-3">
            <h4>Resources</h4>
            <?php 
                wp_nav_menu(
                   array(
                       'theme_location' => 'defabrica_footer_menu'
                    ))
            ?>
        </div>
        <div class="col-12 col-md-3">
            <h4>About</h4>
            <?php 
                wp_nav_menu(
                   array(
                       'theme_location' => 'defabrica_footer_menu'
                    ))
            ?>
        </div>
    </div>
</section>
    <?php wp_footer();?>
</body>
</html>