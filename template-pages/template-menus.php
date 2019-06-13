<?php
/**
 * Template Name: Menus Template
 *
 * @package emaidalat
 */

get_header(); ?>

<main class="menus-main wine-menu">

	<div class="menus-container">

		<?php get_template_part( 'template-parts/menus-navigation' ); ?>

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>

				<?php get_template_part( 'template-parts/content', 'menus' ); ?>

			<?php endwhile; else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			<?php get_template_part( 'template-parts/menus-navigation' ); ?>

	</div><!-- end ribbon-containen-right -->

</main>

<?php get_footer(); ?>
