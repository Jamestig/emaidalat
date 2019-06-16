<?php
/**
 * Content.php
 *
 * @package emai
 */

?>

<section id='post-<?php the_ID(); ?>' <?php post_class(); ?> >

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

</section>
