<?php
get_header();
?>


<!--CAROUSEL-->
<div id="carousel" class="carousel slide carousel-fade " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item" data-interval="1000">
        <img src="<?echo get_theme_file_uri('img/bathroom.jpg')?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>
    <div class="carousel-item active" data-interval="2000">
      <img src="<?echo get_theme_file_uri('img/bedroom.jpg')?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>
    <div class="carousel-item" data-interval="1000">
      <img src="<?echo get_theme_file_uri('img/kitchen.jpg')?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>
    <div class="carousel-item" data-interval="1000">
      <img src="<?echo get_theme_file_uri('img/tv.jpg')?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Fourth slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
    </div>
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