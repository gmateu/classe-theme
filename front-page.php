<?php
get_header();
?>


<!--CAROUSEL-->
<?php
  //vamos a obtener las hijas de slider
  $pagina=get_page_by_title( 'slider');
  $slides=get_pages(
    array(
      'child_of' => $pagina->ID,
    )
  );
?>
<div id="carousel" class="carousel slide carousel-fade " data-ride="carousel">
  <ol class="carousel-indicators">
  <?php 
    $active="active";
    $i=0;
    foreach($slides as $slide){
  ?>
    <li data-target="#carousel" data-slide-to="<?=$i?>" class="<?=$active?>"></li>
  <?php
    $active="";
    $i++;
    }
  ?>
  </ol>
  <div class="carousel-inner">
    <?php
      $active="active";
      foreach($slides as $slide){
    ?>
    <div class="carousel-item <?=$active?>" data-interval="5000">
        <?php echo get_the_post_thumbnail( $slide->ID,'defabrica_slider',array('class' => 'img-fluid d-block w-100')); ?>
        <div class="carousel-caption d-none d-md-block">
            <h5><?=$slide->post_title?></h5>
            <p><?=$slide->post_content?></p>
        </div>
    </div>
    <?php
      $active="";
      }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--CAROUSEL-->

<!--IMAGENES REDONDAS-->

<!--IMAGENES-->
  
  <div id="productos" class="mt-3">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-md-4">
          <img class="rounded-circle" width="140" height="140" src="<?php echo get_theme_file_uri('img/fruit-1.jpg')?>" alt="">
            <h4>Título</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolore error est nihil ab, consequatur consectetur ut dolorum impedit laborum.
            </p>
            <a href="#" class="btn btn-secondary mb-2">ver >></a>
        </div>
        <div class="col-12 col-md-4">
          <img class="rounded-circle" width="140" height="140" src="<?php echo get_theme_file_uri('img/fruit-2.jpg')?>" alt="">
            <h4>Título</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolore error est nihil ab, consequatur consectetur ut dolorum impedit laborum.
            </p>
            <a href="#" class="btn btn-secondary mb-2">ver >></a>
        </div>
        <div class="col-12 col-md-4">
          <img class="rounded-circle" width="140" height="140" src="<?php echo get_theme_file_uri('img/fruit-3.jpg')?>" alt="">
            <h4>Título</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolore error est nihil ab, consequatur consectetur ut dolorum impedit laborum.
            </p>
            <a href="#" class="btn btn-secondary mb-2">ver >></a>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <!--IMAGENES-->

<!--IMAGENES REDONDAS-->




<?php
get_footer();
?>