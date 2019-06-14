<?php
/**
 * Menus content display
 *
 * @package emaidalat
 */

?>

<section id='post-<?php the_ID(); ?>'  <?php post_class(); ?> >

	<?php get_template_part( 'template-parts/menus-navigation' ); ?>

	<header class="entry-header">

		<?php the_title( '<h1>', '</h1>' ); ?>

	</header>

	<div class="entry-content">

		<?php the_content(); ?>

	</div>

	<?php get_template_part( 'template-parts/menus-navigation' ); ?>

</section>
