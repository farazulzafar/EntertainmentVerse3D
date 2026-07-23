<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">

    <div class="container">

        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <span class="logo-icon">L</span>
                <span class="logo-text">Lumora</span>
            </a>
        </div>

        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <div class="header-actions">

            <div class="search-box">
                <input type="text" placeholder="Search Movies, TV, Anime...">
            </div>

            <button class="theme-toggle">🌙</button>

            <button class="profile-btn">👤</button>

        </div>

    </div>

</header>