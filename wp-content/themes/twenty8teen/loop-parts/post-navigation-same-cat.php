<?php
/**
 * Template part for displaying the post navigation links in the same category
 * @package Twenty8teen
 */

if ( is_attachment() || is_single() ) {
	add_filter( 'navigation_markup_template', 'twenty8teen_nav_add_widget_classes', 10, 2 );
	the_post_navigation( array(
		'in_same_term' => true,
		'taxonomy' => 'category',
	));
	remove_filter( 'navigation_markup_template', 'twenty8teen_nav_add_widget_classes', 10 );
}
