<?php
/**
 * Template Name: Content Right
 *
 * @package emaidalat
 */

get_header(); ?>

<main class="wine-menu">

	<div class="ribbon-container-right">

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>


	</div><!-- end ribbon-containen-right -->

</main>

<?php get_footer(); ?>