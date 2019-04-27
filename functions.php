<?php

function opentera_styles(){
    wp_enqueue_style('normalize',get_stylesheet_directory_uri().'/css/normalize.css');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());


    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
}

add_action('wp_enqueue_scripts', 'opentera_styles');


register_nav_menus(array(
    'menu_principal' => __('Menú Principal', 'OpenTera')
));
if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}


add_theme_support('post-thumbnails');
