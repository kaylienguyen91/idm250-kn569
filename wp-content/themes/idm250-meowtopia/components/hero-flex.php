<div class="hero-flex">
    <h1><?php echo get_the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <?php echo get_the_post_thumbnail() ?>
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/default-featured-img.jpg">
    <?php endif; ?>
</div>