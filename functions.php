<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

define ('THEME_URI', get_stylesheet_directory_uri());
define ('IMAGES_URI', get_stylesheet_directory_uri().'/assets/images');

// require_once('wp-portfolio-navwalker.php');

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );



	wp_enqueue_style( 'style', THEME_URI.'/assets/css/style-1.css' );

	wp_deregister_script( 'jquery' );

	wp_register_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, false);

	wp_enqueue_script('jquery');


} 


add_image_size( 'home-card', 300, 230, true );

add_image_size( 'real-card', 600, 460, true );


/**
 * Custom logo header
 */

function theme_prefix_setup() {

    add_theme_support( 'custom-logo' );

}

add_action( 'after_setup_theme', 'theme_prefix_setup' );

add_theme_support( 'custom-logo', array(

   'height'      => 65,

   'width'       => 231,

   'flex-width' => true,

) );


/**
 * Page d'options ACF
 */


if( function_exists('acf_add_options_page') ) {

	// Page principale

	acf_add_options_page(array(

		'page_title'    => 'MS options',

		'menu_title'    => 'MS options',

		'menu_slug'     => 'options',

		'capability'    => 'edit_posts',

		'redirect'      => true

	));
}


function custom_pagination($numpages = '', $pagerange = '', $paged='') {

	if (empty($pagerange)) {

	$pagerange = 2;

	}

	/**
	* This first part of our function is a fallback
	* for custom pagination inside a regular loop tha
	* uses the global $paged and global $wp_query variables.
	* It's good because we can now override default pagination
	* in our theme, and use this function in default quries
	* and custom queries.
	*/

	global $paged;

	if (empty($paged)) {
		$paged = 1;
	}

	if ($numpages == '') {

		global $wp_query;

		$numpages = $wp_query->max_num_pages;

		if(!$numpages) {

			$numpages = 1;

		}

	}

	/** 
	* We construct the pagination arguments to enter into our paginate_links
	* function. 
	*/

	$pagination_args = array(

		'base'            => get_pagenum_link(1) . '%_%',

		'format'          => 'page/%#%',

		'total'           => $numpages,

		'current'         => $paged,

		'show_all'        => False,

		'end_size'        => 1,

		'mid_size'        => $pagerange,

		'prev_next'       => True,

		'prev_text'       => __('&laquo;'),

		'next_text'       => __('&raquo;'),

		'type'            => 'plain',

		'add_args'        => false,

		'add_fragment'    => ''

	);


	$paginate_links = paginate_links($pagination_args);

	if ($paginate_links) {

		echo "<nav class='custom-pagination custom-pagination justify-content-center d-flex w-100'>";

		//echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";

		echo $paginate_links;

		echo "</nav>";

	}
}