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

  wp_enqueue_script('teyoung_slide--pc');
  
}


 ?>
