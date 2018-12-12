<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus(
	array(
		'main-nav'  => esc_html__( 'Main Menu', 'foundationpress' ),
		'mobile-nav' => esc_html__( 'Mobile Menu', 'foundationpress' ),
	)
);


/**
 * Main navigation
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'redolive_main_navigation' ) ) {
	function redolive_main_navigation() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'main_nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'main-nav',
				'depth'          => 3,
				'fallback_cb'    => false,
			)
		);
	}
}

/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'redolive_mobile_nav' ) ) {
	function redolive_mobile_nav() {
		wp_nav_menu(
			array(
				'container'      => false,                         // Remove nav container
				'menu'           => 'mobile_nav',
				'menu_class'     => 'vertical menu',
				'theme_location' => 'mobile-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
				'fallback_cb'    => false,
			)
		);
	}
}