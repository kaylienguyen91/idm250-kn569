<?php get_header(); ?>

<?php get_template_part('components/hero-flex'); ?>

<div class="hero-flex reverse">
    <div>
        <h2><?php echo get_field('homepage_subtitle'); ?></h2>
        <p><?php echo get_field('homepage_subcontent'); ?></p>
    </div>
    <img src="<?php echo get_field('homepage_second_img'); ?>">
</div>

<div class="content">
    <?php echo get_the_content(); ?>
</div>

<!-- Related Posts -->
<?php

$related_posts = new WP_Query([
    'post_type' => 'adoption',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC',
]);

if ($related_posts->have_posts()) : ?>
    <h2 style="text-align: center;">Our Featured Cats</h2>
    <div class="listing-flex">
        <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
        <?php get_template_part('components/listing-card'); ?>
        <?php endwhile; ?>
    </div>
<?php endif;
wp_reset_postdata(); ?>

<?php get_footer(); ?>