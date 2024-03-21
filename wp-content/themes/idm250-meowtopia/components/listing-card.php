<a href="<?php the_permalink(); ?>" class="listing-card">
    <article class="listing-card">
    
        <div class="card-img-holder">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail() ?>">
            <?php else: ?>
                <img src="<?php echo get_field('adoption_listing_thumbnail'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
        
        <div class="listing-info">
            <h3>
                
                <?php the_title(); ?>
            </h3>
            <p> Age: <?php echo get_field('adoption_age'); ?> </p>
            <p> Gender: <?php echo get_field('adoption_gender'); ?> </p>
            <p> Size: <?php echo get_field('adoption_size'); ?> </p>
            <!-- Additional details like author or categories can go here -->
        </div>
    </article>
</a>