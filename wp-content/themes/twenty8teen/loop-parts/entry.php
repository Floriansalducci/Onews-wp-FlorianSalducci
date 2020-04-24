<?php
/**
 * Template part for displaying posts
 *
 * @package Twenty8teen
 */

	twenty8teen_widget_set_classes( wp_basename( __FILE__, '.php' ), null );
	get_template_part( 'loop-parts/entry-header' );
	get_template_part( 'loop-parts/featured-image' );
	get_template_part( 'loop-parts/entry-content', get_post_format() );
	get_template_part( 'loop-parts/entry-footer' );
