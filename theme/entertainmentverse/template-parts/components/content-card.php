<?php

$image  = $args['image']  ?? 'poster-1.jpg';
$title  = $args['title']  ?? 'Untitled';
$rating = $args['rating'] ?? '8.5';
$meta   = $args['meta']   ?? 'Action • 2026';

?>

<article class="content-card">

    <div class="card-image">

        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/posters/' . $image); ?>"
            alt="<?php echo esc_attr($title); ?>"
        >

        <div class="card-overlay">

            <button class="play-button">▶</button>

        </div>

        <span class="card-badge">

            ⭐ <?php echo esc_html($rating); ?>

        </span>

    </div>

    <div class="card-body">

        <h3 class="card-title">

            <?php echo esc_html($title); ?>

        </h3>

        <p class="card-meta">

            <?php echo esc_html($meta); ?>

        </p>

    </div>

</article>