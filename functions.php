<?php 

add_action(
	'widgets_init', 
	function(){
		register_sidebar(array(
			'id' => 'widget_id001',
			'name' => 'right-sidebar',
			'description' => 'Add widgets here to appear in right side of indexphp',
		));
	}
);

function teyoung_scripts(){
  wp_enqueue_script(
    'post-slide',
    get_stylesheet_directory_uri().'/js/teyoung_slide--pc.js',
    array('jquery'),
    '1.0',
  );
}
add_action('wp_footer', 'teyoung_scripts');

add_theme_support('post-thumbnails');

add_action('init', 'create_post_type');
function create_post_type(){
  register_post_type( 'news', [
    'labels' => [
      'name' => "ニュース",
      'singular_name' => "news",
    ],
    "public" => true,
    "has_archive" => false,
    "menu_position" => 5,
    "show_in_rest" => true,
  ]);
}
?>
