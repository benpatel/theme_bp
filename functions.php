<?php

function load_css(){


	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/bootstrap.css',array(),false,'all');
	wp_enqueue_style( 'bs_stylesheet', get_template_directory_uri() . '/style.css',array(),false,'all');
	
	wp_enqueue_script( 'jq_script', get_template_directory_uri() . '/js/jquery.min.js', array (),'', true);
	wp_enqueue_script( 'boot_script', get_template_directory_uri() . '/js/bootstrap.min.js', array (),'', true);
	

	


}

add_filter('next_posts_link_attributes', 'posts_links_attributes');
add_filter('previous_posts_link_attributes', 'posts_links_attributes');

function posts_links_attributes() {
    return 'class="btn btn-pink"';
}


add_filter('next_post_link_attributes', 'posts_link_attributes');
add_filter('previous_post_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-pink"';
}

add_action('wp_enqueue_scripts','load_css');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 600, 400 ); // 50 pixels wide by 50 pixels tall, resize mode
?>