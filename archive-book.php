<?php
/**
 * The template for displaying archive book
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();

$description = get_the_archive_description();
?>
<?php if (have_posts()) : ?>
    <div class="portfolio-items">
        <?php while (have_posts()) : the_post(); ?>
            <div class="portfolio-item">
                <article>
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="featured-image" style="text-align: center;" >
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail([300, 200]); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="portfolio-content">
                        <?php the_content(); ?>
                    </div>

                </article>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    <p><?php esc_html_e('No portfolio items found.', 'your-text-domain'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
