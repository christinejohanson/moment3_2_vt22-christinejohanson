<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name') ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- för att hitta css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- fonts include -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <!-- hook för headern. för plugins o js osv -->
    <?php wp_head(); ?>
</head>

<body>
    <!--huvudinnehåll hela content-->
    <div id="content">
        <header id="mainheader">
            <nav>
                <div class="container">
                    <a href="index.html">
                    <img src="<?php bloginfo('template_url'); ?>/images/logga.png"/></a>
                      
                    <div class="themenu">
                <?php
                wp_nav_menu();
                ?>
                
                    </div>
                    <a href="javascript:void(0);" class="icon" onclick="theFunction()">
                        <button class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </a>
                </div>
                <div class="streck"></div>
            </nav>
            
        </header>

        <nav id="small_nav">
            <a href="<?php echo site_url('/');?>">HEM</a>
            <a href="<?php echo site_url('/om-oss');?>">OM OSS</a>
            <a href="<?php echo site_url('/category/nyheter');?>">NYHETER</a>
            <a href="<?php echo site_url('/kontakt');?>">KONTAKT</a>
        </nav>
