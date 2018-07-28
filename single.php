<?php
/**
 * The main theme file.
 *
 * @package JMW\GermBlog
 */

?>

<?php get_header(); ?>

<main class="site-main">
	<div class="site-main__inner">
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="post-list__item post">
				<h1 class="post__title"><?php the_title(); ?></h1>

				<div class="post__content user-content"><?php the_content(); ?></div>
			</article>

			<?php get_template_part( 'partials/pagination-links' ); ?>
		<?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>
