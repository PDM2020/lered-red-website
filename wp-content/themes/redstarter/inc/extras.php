<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function lrb_modify_arhive_loop( $query ){
 if (is_post_type_archive( array('product')) && !is_admin() && $query ->is_main_query()){
	 $query->set('orderby','title');
	 $query->set('order','ASC');
	 $query->set('post_per_page', 12 );

 }
}
add_action('pre_get_posts', 'lrb_modify_arhive_loop');


// add custom logo and url to login page
function lrb_the_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'lrb_the_url' );

//adds a logo to the admin login page and changes the link to the website root
function lrb_login_logo() {
     echo '<style type="text/css">
         h1 a { background-image:url('.get_template_directory_uri().'/images/lrb-logo.svg) !important;
				 background-size:contain !important;
			   width:100% !important;}
     </style>';
}
add_action('login_head', 'lrb_login_logo');

// custom archive product page title
function lrb_archive_title($title) {
if (is_post_type_archive(array('product'))) {
	$title = 'Our Products Are Made Fresh Daily';

} elseif (is_tax('product-type')) {
   $title = single_term_title('', false);
}
return $title;
}


add_filter('get_the_archive_title', 'lrb_archive_title')

?>