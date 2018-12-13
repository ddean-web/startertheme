<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package Red Olive
 * @since redolive 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>


	<header class="site-header" role="banner">
		<div class="container bg-black">
			<nav class="site-navigation" role="navigation">
				<?php redolive_main_navigation(); ?>
			</nav>
		</div>
	</header>
