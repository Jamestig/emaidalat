<?php
/**
 * Template Name: Ribbon Template
 *
 * @package emai
 */

get_header(); ?>

<main>

	<div class="container-right">

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
