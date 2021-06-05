<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">

    <header id="masthed" class="site-header" role="banner">

        <div class="container">
            <div class="logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">  <img src="<?php echo get_theme_file_uri('image/logo.svg') ?>" alt=""></a>
            </div><!-- .logo -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php 
                
                    wp_nav_menu(array(
                        'theme_location'  =>    'main-menu'
                    ));
                
                ?>
            </nav>

        </div><!-- .container -->
    </header>

<div class="container content">

  