<?php
/* Template Name: Project Listing */

get_header();

// Define WP_Query parameters to fetch projects
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
    'post_type' => 'adoption',
    'posts_per_page' => 6,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'ASC',
];

// Create a new WP_Query instance
$adoption_query = new WP_Query($args);
?>

<div>
    <div>
        <h1><?php echo get_the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
            <p class="content"> <?php echo get_the_excerpt() ?> </p>
        <?php endif; ?>
    </div>
    <div class="listing-flex">
        <?php if ($adoption_query->have_posts()):
            while ($adoption_query->have_posts()) : $adoption_query->the_post();
                get_template_part('components/listing-card');
            endwhile; ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php
        echo paginate_links([
            'total' => $adoption_query->max_num_pages,
            'prev_text' => __('Prev'),
            'next_text' => __('Next'),
        ]);
        ?>
    </div>

    <?php else : ?>
    <p>No projects found.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); // Restore global post data stomped by the_post().?>
    
</div>

<?php get_footer(); ?>