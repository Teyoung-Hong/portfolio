<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charet'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Teyoung's media</title>

  <!-- stylesheet -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />

  <!-- script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!-- header -->
  <header>
    <div class="wrap_header">
      <div class="header_logo">
        <img class="header_logo--img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo--img.png" alt="bible">
      </div>
      <div class="header_title">Teyoung's media</div>
      <nav class="header_nav">
        <ul class="header_nav--lists">
          <li class="header_nav--list">News</li>
          <li class="header_nav--list">About</li>
          <li class="header_nav--list">Contact</li>
        </ul>
      </nav>
    </div>
  </header>
