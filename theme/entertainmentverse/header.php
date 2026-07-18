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

<span class="logo-icon">EV</span>

<span class="logo-text">EntertainmentVerse</span>

</a>

</div>

<nav class="main-nav">

<ul>

<li><a href="#">Home</a></li>

<li><a href="#">Movies</a></li>

<li><a href="#">TV Shows</a></li>

<li><a href="#">Anime</a></li>

<li><a href="#">Games</a></li>

<li><a href="#">Music</a></li>

<li><a href="#">News</a></li>

</ul>

</nav>

<div class="header-actions">

<div class="search-box">

<input type="text" placeholder="Search movies, anime, games...">

</div>

<button class="theme-toggle">🌙</button>

<button class="profile-btn">👤</button>

</div>

</div>

</header>