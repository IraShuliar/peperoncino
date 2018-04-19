<?php
function enqueue_styles() {

	wp_register_style( 'reset-style', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style('reset-style');
	
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700');
	wp_enqueue_style( 'font-style');

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');

	wp_register_script('javascript', get_template_directory_uri() . '/js/script.js', array('jquery'));
	wp_enqueue_script('javascript');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

register_nav_menus( array(
	 'header_menu' => 'Header menu',
	 'footer_menu' => 'Footer menu'
) );
add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function the_time_view($postId = null) {
	 $timeViewText = get_field('time_view', $postId);
		if ($timeViewText) : ?>
			<div class="post-preview__time-view"><?php the_field('time_view', $postId); ?></div>
		<?php endif; 
}