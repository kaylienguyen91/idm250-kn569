<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo get_the_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
    <?php get_template_part('components/header') ?>
