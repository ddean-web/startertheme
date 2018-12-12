<?php
/**
 * Red Olive Theme only works in WordPress 4.7 or later.
 */


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function redolive_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'redolive_widgets_init' );

require_once('library/enqueue-scripts.php');
