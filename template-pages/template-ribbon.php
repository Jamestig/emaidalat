<?php
/**
 * Template Name: Ribbon Template
 *
 * @package emaidalat
 */

get_header(); ?>

<main class="menus-main">

	<div class="menus-container">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

	</div>

</main>

<?php get_footer(); ?>
