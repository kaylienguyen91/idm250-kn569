<?php
/* Template Name: Page with Hero Flex */

get_header(); ?>

<?php get_template_part('components/hero-flex'); ?>

<div class="content">
    <?php echo get_the_content(); ?>
</div>

<?php get_footer(); ?>