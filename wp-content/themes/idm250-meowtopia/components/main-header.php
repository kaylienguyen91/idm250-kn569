<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <header>
        <div class="nav-wrapper">
            <a href="<?php echo get_home_url(); ?>">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                 echo '<img id="header-logo" src="' . esc_url( $logo[0]) . '" />';
                } else {
                 echo '<img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo-horizontal.png" alt="Logo">';
                }
                ?>

                <!-- <img id="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo-horizontal.png" alt="Logo"> -->
            </a>
            <?php
                wp_nav_menu([
                    'theme_location' => 'primary'
                ]);
            ?>
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </header>
    <main>