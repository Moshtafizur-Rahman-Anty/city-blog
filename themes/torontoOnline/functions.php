<?php

/**
 * Theme Name functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package  Theme Name

 */

/* 

1. ENQUEUING STYLESHEET

2. REGISTERING MENU 

*/


  /*=======================================================================
                  ENQUEUING STYLESHEET INCLUDING BOOTSTRAP 
   =======================================================================*/



function torantoOnline_scripts () {


    
    //THEMES MAIN STYLESHEET

    wp_enqueue_style('torantoOnline_style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) , 'all');
    wp_enqueue_style('bxslidercss', get_stylesheet_directory_uri() . '/css/jquery.bxslider.css', array(), 'all');

    wp_enqueue_script('jquery');
    
    wp_enqueue_script('bxsliderjs', get_stylesheet_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.2', true);
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);

    //GOOGLE FONTS

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap&family=Seaweed+Script&display=swap', [], null);
}


add_action('wp_enqueue_scripts','torantoOnline_scripts');



  /*=======================================================================
                           REGISTERING MENU
   =======================================================================*/


function torantoOnline_config () {


        register_nav_menus(

            array (

                'main-menu' => esc_html__('Main Menu', 'torantoOnline'),
                
            )

        ); 

add_theme_support('title-tag');

}


add_action('after_setup_theme', 'torantoOnline_config');




  /*=======================================================================
                                Widget Zone
   =======================================================================*/

   function widgets_init() {

    register_sidebar( array(

        'name'          => __( 'Testimonial Sidebar', 'torantoOnline' ),
        'id'            => 'testimonials',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'

    ) );


    
    register_sidebar( array(

        'name'          => __( 'image for the Front Page', 'torantoOnline' ),
        'id'            => 'front-page',
        'description'   => __( 'Widget for the front page', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'

    ) );

}
add_action( 'widgets_init', 'widgets_init' );



  /*======================================================================= 
                                Feature Image
   =======================================================================*/              

   add_theme_support('post-thumbnails');

   add_image_size('featured', 1100,418, true);
   add_image_size('medium-blog', 358 ,208, true);


