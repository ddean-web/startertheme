<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					// Remove for now @TODO
					// the_archive_description( '<div class="page-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
			endwhile;

			// If no content, include the "No posts found" template.
		else :

		endif;
		?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
