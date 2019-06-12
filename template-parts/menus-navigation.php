<?php
/**
 * Template for mobile Menus navigation
 *
 * @package emaidalat
 */

?>

<nav class="menus__nav">
	<h3>Menu:</h3>

	<?php
	$args = [
		'theme_location' => 'menus-nav',
		'container'      => 'false',
		'menu'           => 'Menus Navigation',
		'menu_class'     => 'menus__nav-list',
	];
	wp_nav_menu( $args );
	?>

</nav>
