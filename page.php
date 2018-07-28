<?php
/**
 * The default page template.
 *
 * @package JMW\GermBlog
 */

?>

<?php get_header(); ?>

<main class="site-main">
	<div class="site-main__inner">
		<section class="post-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="post-list__item post">
					<h1 class="post__title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>

					<div class="post__content user-content"><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		</section>
	</div>
</main>


<?php get_footer(); ?>
