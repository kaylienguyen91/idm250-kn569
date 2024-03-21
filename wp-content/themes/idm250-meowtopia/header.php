<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo get_the_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/logo-no-text.png" />
        <?php wp_head(); ?>
    </head>
    <?php get_template_part('components/main-header') ?>
