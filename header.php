<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ハンバーガーメニューを作る</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- /slick CSS -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="l-wrapper">
    <div class="l-main-area">


      <header class="l-header">
        <div class="openbtn"><span>MENU</span><span></span></div>
        <div class="header-logo">
          <a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pc_logo@2x.png"></a>
        </div>
        <?php get_search_form(); ?>
      </header>