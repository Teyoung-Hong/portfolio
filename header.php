<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charet'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Teyoung's media</title>

  <!-- stylesheet -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/reset.css" type="text/css" />
  <?php 
    if (is_single()):
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/single.css" type="text/css" />
    endif;
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!-- header -->
  <header>
    <div class="wrap_header">
      <div class="header_logo">
        <img class="header_logo--img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo--img.png" alt="bible">
      </div>
      <div class="header_title"><a href="<?php echo home_url(); ?>">Teyoung's media</a></div>
      <nav class="header_nav">
        <ul class="header_nav--lists">
          <li class="header_nav--list"><a href="<?php echo get_template_directory_uri(); ?>/about">News</a></li>
          <li class="header_nav--list"><a href="<?php 
            if (is_home()){
              echo "#about";
            } else {
              echo "";
            }
           ?>">About</a></li>
          <li class="header_nav--list"><a href="
          <?php
            if (is_home()){
              echo "#contact";  
            } else {
              echo "";  
            }
          ?>
          ">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
