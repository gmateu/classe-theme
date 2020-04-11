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
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item <?php if(is_page('home')) echo 'active'?>">
                <a class="nav-link" href="<?php echo site_url('home');?>">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if(is_page('blog')) echo 'active'?>">
                <a class="nav-link" href="<?php echo site_url("blog")?>">Blog</a>
            </li>
            <li class="nav-item <?php if(is_page('sample-page')) echo 'active'?>">
                <a class="nav-link" href="<?php echo site_url("sample-page")?>">Sample page</a>
            </li>
            </ul>
        </div>
    </nav>
    </header>
    

    
