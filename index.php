<?php
/**
 * The main theme file.
 *
 * @package JMW\GermBlog
 */

?>

<?php get_header(); ?>

<main class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <article class="post">
            <h1 class="post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>

            <div class="post__content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
