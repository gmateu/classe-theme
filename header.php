<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php wp_head();?>
</head>
<body>
    <header class="row p-3 border-bottom shadow">
        <div class="col-6">
            <h4 class="font-weight-normal">Company name</h4>
        </div>
        <nav class="col-6 text-right">
            <a class="p-2" href="<?php echo site_url("home")?>">Home</a>
            <a class="p-2" href="<?php echo site_url("blog")?>">Blog</a>
            <a class="p-2" href="#">Store</a>
            <a class="p-2" href="#">About us</a>
            <a class="btn btn-outline-primary" href="#">Sing up</a>
        </nav>
    </header>
    

    
