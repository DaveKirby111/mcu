<?php
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_action('after_switch_theme', 'flush_rewrite_rules');


// import styles
function mcu_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . "/style.css", array(), '1.1');
}
add_action('wp_enqueue_scripts', 'mcu_styles');

// register nav menu
function register_menus() {
    register_nav_menus(

        array(
            'header-menu' => 'Header Nav',
            'side-menu' => 'Side Nav',
            'footer-menu' => 'Footer Nav'
        )

    );
}
add_action('init', 'register_menus');




// custom post types
function phase1_post() {

    $args = array(

        'labels' => array(

            'name' => 'Phase 1',
            'singular_name' => 'Phase 1'

        ),

        'hierarchical' => true,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('Phase 1', $args);

}

add_action('init', 'phase1_post');


function phase2_post() {

    $args = array(

        'labels' => array(

            'name' => 'Phase 2',
            'singular_name' => 'Phase 2'

        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('Phase 2', $args);

}

add_action('init', 'phase2_post');


function phase3_post() {

    $args = array(

        'labels' => array(

            'name' => 'Phase 3',
            'singular_name' => 'Phase 3'

        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('Phase 3', $args);

}

add_action('init', 'phase3_post');


function phase4_post() {

    $args = array(

        'labels' => array(

            'name' => 'Phase 4',
            'singular_name' => 'Phase 4'

        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('Phase 4', $args);

}

add_action('init', 'phase4_post');


function shows_post() {

    $args = array(

        'labels' => array(

            'name' => 'Shows',
            'singular_name' => 'Show'

        ),

        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('Shows', $args);

}

add_action('init', 'shows_post');


// link featured images to custom post type page
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) . '">' . $html . '</a>';
  return $html;

}

?>