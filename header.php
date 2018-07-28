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
	<div class="site-header__inner">
		<div class="site-header__info">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

			<?php if ( get_bloginfo( 'description' ) ) : ?>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php endif; ?>
		</div>

		<?php
		/*
		<nav class="site-nav">
			<?php wp_nav_menu(); ?>
		</nav>
 */
		?>
	</div>
</header>

<div class="wrapper">
