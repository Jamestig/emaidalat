<?php
/**
 * No content to display
 *
 * @package emaidalat
 */

?>

<section id='post-<?php the_ID(); ?>' <?php post_class(); ?> >

	<header class="entry-header">

		<h1><?php esc_html_e( 'Page Not Found', 'emai' ); ?></h1>

	</header>

	<div class="entry-content">

		<p><?php esc_html_e( 'Sorry, no content here, please try a different link', 'emai' ); ?></p>

	</div>

</section>
