<section class="section">

    <div class="container">

        <div class="section-title">

            <h2>🔥 Trending Now</h2>

            <a href="#">View All →</a>

        </div>

        <div class="card-grid">

            <?php
            $items = [
                "Avengers Secret Wars",
                "The Batman II",
                "One Piece",
                "Cyberpunk 2077"
            ];

            foreach ($items as $item) :
            ?>

            <article class="content-card">

                <div class="card-image"></div>

                <div class="card-body">

                    <h3 class="card-title">
                        <?php echo esc_html($item); ?>
                    </h3>

                    <p class="card-meta">
                        ⭐ 9.1 • Trending
                    </p>

                </div>

            </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>