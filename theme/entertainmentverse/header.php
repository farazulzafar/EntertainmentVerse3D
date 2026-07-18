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

EntertainmentVerse

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

<button>🔍</button>

<button>🌙</button>

<button>👤</button>

</div>

</div>

</header>