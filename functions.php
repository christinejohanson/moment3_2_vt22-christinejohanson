<?php 
/* registrera meny */
add_action('init', 'register_my_menus');
function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => 'Huvudmeny'
    ));
}

/* aktivera stöd för dynamisk headerbild */
$args = array(
    'width' => 1000,
    'height' => 600,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads' => true
);
add_theme_support('custom-header', $args);

/* featured image */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 135, array('center', 'center'));

/* aktivera widget area */
add_action('widgets_init', 'bildochtext_widget_init');
function bildochtext_widget_init() {
    register_sidebar(array(
        'name'          => 'Bild på startsidan',
        'id'            => 'start-puff',
        'before_widget' => '<div class="picturequote">',
        'after_widget'  => '</div>'
    ));
}

/* javascript */
function ti_custom_javascript() {
wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'ti_custom_javascript');
