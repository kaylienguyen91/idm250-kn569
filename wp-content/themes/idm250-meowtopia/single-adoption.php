<?php get_header(); ?>

<h1><?php echo get_the_title(); ?></h1>

<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="<?php echo get_field('adoption_pic_1'); ?>">
    </div>

    <div class="mySlides fade">
        <img src="<?php echo get_field('adoption_pic_2'); ?>">
    </div>

    <div class="mySlides fade">
        <img src="<?php echo get_field('adoption_pic_3'); ?>">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<div class="adoption-section content">
    <h2> About Me </h2>
    <div>
        <table class="adoption">
            <tr>
                <th> Breed </th>
                <td> <?php echo get_field('adoption_breed'); ?> </td>
            </tr>
            <tr>
                <th> Color </th>
                <td> <?php echo get_field('adoption_color'); ?> </td>
            </tr>
            <tr>
                <th> Age </th>
                <td> <?php echo get_field('adoption_age'); ?> </td>
            </tr>
            <tr>
                <th> Gender </th>
                <td> <?php echo get_field('adoption_gender'); ?> </td>
            </tr>
            <tr>
                <th> Size </th>
                <td> <?php echo get_field('adoption_size'); ?> </td>
            </tr>
            <tr>
                <th> Coat Length </th>
                <td> <?php echo get_field('adoption_coat_length'); ?> </td>
            </tr>
            <tr>
                <th> Adoption Fee </th>
                <td> <?php echo get_field('adoption_fee'); ?> </td>
            </tr>
        </table>

        <div class="adoption" id="about-me-secondary">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/characteristics.png" alt="Pet Training">
                <div>
                    <h3> Characteristics </h3>
                    <p> <?php echo get_field('adoption_characteristics'); ?> </p>
                </div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pet-training.png" alt="Pet Training">
                <div>
                    <h3> House-trained </h3>
                    <p> <?php echo get_field('adoption_house_train'); ?> </p>
                </div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/health.png" alt="Pet Training">
                <div>
                    <h3> Health </h3>
                    <p> <?php echo get_field('adoption_health'); ?> </p>
                </div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pet-house.png" alt="Pet Training">
                <div>
                    <h3> Good in home with </h3>
                    <p> <?php echo get_field('adoption_pet_home'); ?> </p>
                </div>
            </div>
        </div>
    </div>
    <h2> My Story </h2>
    <p> <?php echo get_field('adoption_my_story'); ?> </p>
</div>

<button>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/button.png">
    <p> Adopt Me! </p>
</button>

<div class="content">
    <?php echo get_the_content(); ?>
</div>

<?php get_footer(); ?>