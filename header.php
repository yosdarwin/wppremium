<!DOCTYPE html>
<html <?php echo language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">Logo</div>
            <nav class="main-menu col-md-8 col-12 text-right">
                <?php wp_nav_menu(array(
                    'theme_location' => 'top_menu'
                )); ?>
            </nav>
        </div>        
    </div>