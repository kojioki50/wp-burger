<?php

function burger_script() {
wp_enqueue_style('fontawesome',"https://use.fontawesome.com/releases/v5.6.1/css/all.css");
wp_enqueue_style('googleapis',"http://fonts.googleapis.com/icon?family=Material+Icons");
wp_enqueue_style( 'ress', "https://unpkg.com/ress/dist/ress.min.css" );
wp_enqueue_style( 'base', get_template_directory_uri() . '/css/base.css', array(), '1.0' );
wp_enqueue_style( 'base', get_template_directory_uri() . '/css/ress.css', array(), '1.0' );
wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0' );
wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css', array(), '1.0' );
wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0' );
wp_enqueue_style( 'sidebar', get_template_directory_uri() . '/css/sidebar.css', array(), '1.0' );
wp_enqueue_style( 'button', get_template_directory_uri() . '/css/button.css', array(), '1.0' );
wp_enqueue_style( 'articles', get_template_directory_uri() . '/css/articles.css', array(), '1.0' );
wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/gallery.css', array(), '1.0' );
wp_enqueue_style( 'pagination', get_template_directory_uri() . '/css/pagination.css', array(), '1.0' );
wp_enqueue_style( 'utility', get_template_directory_uri() . '/css/utility.css', array(), '1.0' );

wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0');
}
add_action('wp_enqueue_scripts', 'burger_script');