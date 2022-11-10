<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCU Fansite</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Passion+One&display=swap" rel="stylesheet">

</head>
<body <?php body_class(); ?>>

    <div class="container">


        <header>

        <?php 

        if( function_exists('the_custom_logo')) {
            the_custom_logo();
        }

        ?>

            <h1><?php the_title(); ?></h1>

           <img src="http://localhost:8888/MCUsite/wp-content/uploads/2022/11/marvel.jpg" alt="logo">
            
        </header>

            <nav>

            <?php 
        
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'container_class' => 'top-nav'
                    )
                    );
                
            ?>
                
            </nav>