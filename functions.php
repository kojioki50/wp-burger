<?php
  add_theme_support('menus');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');

  //タイトル出力
  function humburger_title($title) {
    if ( is_front_page() && is_home()) {
      $title = get_bloginfo('name', 'display');
    } elseif (is_singular()){
      $title = single_post_title('', false);
    }
    return $title;
  }
  add_filter('pre_get_document_title', 'humburger_title');

//css,jQuery
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


//ウィジェット
function humberger_widgets_init(){
  register_sidebar(
    array(
       'name'          => 'バーガー',
       'id'            => 'burger_widget',
       'description'   => 'バーガー用ウィジェットです',
      //  'before_widget' => '<div id="%1$s" class="widget %2$s">',
      //  'after_widget'  => '</div>',
       'before_title'  => '<h2>',
       'after_title'   => "</h2>\n",
    )
    );

    register_sidebar(
    array(
       'name'          => 'サイド',
       'id'            => 'side_widget',
       'description'   => 'サイド用ウィジェットです',
      //  'before_widget' => '<div id="%1$s" class="widget %2$s">',
      //  'after_widget'  => '</div>',
       'before_title'  => '<h2>',
       'after_title'   => "</h2>\n",
    )
    );

    register_sidebar(
    array(
       'name'          => 'ドリンク',
       'id'            => 'drink_widget',
       'description'   => 'サイド用ウィジェットです',
      //  'before_widget' => '<div id="%1$s" class="widget %2$s">',
      //  'after_widget'  => '</div>',
       'before_title'  => '<h2>',
       'after_title'   => "</h2>\n",
    )
    );
}
    add_action('widgets_init', 'humberger_widgets_init');

    //アーカイブページ作成
function post_has_archive($args, $post_type)
{
  if('post' == $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'archive';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive' ,10,2);