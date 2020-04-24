<?php
/**
 * Template part for displaying secondary navigation
 *
 * @package Twenty8teen
 */

?>
<nav id="second-nav" aria-label="<?php esc_attr_e( 'Secondary menu', 'twenty8teen' ); ?>" <?php twenty8teen_widget_get_classes( 'site-navigation', true ); ?>>
	<input type="checkbox" id="second-nav-sub0" tabindex="-1">
	<label for="second-nav-sub0" class="menu-toggle">
		<?php esc_html_e( 'Menu', 'twenty8teen' ); ?></label>
	<?php
		// make the fallback args match.
		add_filter( 'wp_page_menu_args', 'twenty8teen_page_menu_args' );
		add_filter( 'walker_nav_menu_start_el', 'twenty8teen_nav_menu_start_el', 9, 4);
		wp_nav_menu( array(
			'theme_location' => 'secondmenu',
			'container_id'   => 'second-menu',
		) );
		remove_filter( 'wp_page_menu_args', 'twenty8teen_page_menu_args' );
		remove_filter( 'walker_nav_menu_start_el', 'twenty8teen_nav_menu_start_el', 9 );
	?>
</nav><!-- #second-nav -->
