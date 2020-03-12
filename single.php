<?php
get_header();
?>

<div class="content-area">
    <div class="blog-info">
        <?php
        while(have_posts()){
            the_post();
            ?>
            <article>
                <h2><a href="<?=the_permalink()?>"><?=the_title()?></a></h2>
                <p>
                   <?=the_content()?>
                </p>
            </article>    
            <?php
        }
        ?>
    </div>
</div>
<?php
get_footer();
?>