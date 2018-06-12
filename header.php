<?php
/**
 * The theme header file.
 *
 * @package JMW\GermBlog
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<div class="site-header__info">
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</div>

	<nav class="site-nav">
		<?php wp_nav_menu(); ?>
	</nav>
</header>

<div class="wrapper">