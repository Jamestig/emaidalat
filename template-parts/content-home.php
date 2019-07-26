<?php
/**
 * Content for home page
 *
 * @package emai
 */

?>

<section id='post-<?php the_ID(); ?>' <?php post_class( 'fp-section' ); ?> data-anchor="home-cuisine">

	<div class="wide-image gradient-down">
		<figure>

			<?php the_post_thumbnail(); ?>

		</figure>
	</div>

	<div class="ribbon-container">
		<header class="entry-header">
	
		<?php
		if ( has_secondary_title() ) :
			?>

			<?php the_title(); ?>

			<?php else : ?>

				<?php the_title( '<h1>', '</h1>' ); ?>

		<?php endif; ?>

		</header>

		<div class="entry-content">

			<?php the_content(); ?>

		</div>

		<button class="scrollDown moveSectionDown">
			<span></span>
			<span>Scroll down</span>
		</button>

	</div><!-- end ribbon container -->
</section>
