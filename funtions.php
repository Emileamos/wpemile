<?php 
	funtion wpemile_title_tag() {
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'wpemile_title_tag');
 	
 	if (!function_exists('_wp_render_title_tag')) {
 		funtion wpemile_render_title() {
?>
			<title><?php wp_title('|', true, 'center') ?></title>
			<?php
 		}
 		add_action('wp_head', 'wpemile_render_title');
 	}
?>