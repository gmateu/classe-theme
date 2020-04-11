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

<!--IMAGENES REDONDAS-->




<?php
get_footer();
?>