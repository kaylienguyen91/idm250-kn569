<header>
    <div class="nav-wrapper">
        <a href="<?php echo get_home_url(); ?>"><img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo-horizontal.png" alt="Logo"></a>
        <?php
            wp_nav_menu([
                'theme_location' => 'primary'
            ]);
        ?>
        <!-- <ul class="nav-menu">
            <li>
                <a class="nav-link" href="index.html#projects"> Adopt </a>
            </li>
            <li>
                <a class="nav-link" href="ux-design.html"> Process </a>
            </li>
            <li>
                <a class="nav-link" href="ux-research.html"> About </a>
            </li>
            <li>
                <a class="nav-link" href=""> Contact </a>
            </li>
        </ul> -->
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</header>