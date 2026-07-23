<section class="section">

    <div class="container">

        <div class="section-title">

            <h2>📺 TV Shows</h2>

            <a href="#">View All →</a>

        </div>

        <div class="card-grid">

            <?php for($i=1; $i<=4; $i++) : ?>

            <article class="content-card">

                <div class="card-image"></div>

                <div class="card-body">

                    <h3 class="card-title">
                        TV Show <?php echo $i; ?>
                    </h3>

                    <p class="card-meta">
                        Drama • Sci-Fi
                    </p>

                </div>

            </article>

            <?php endfor; ?>

        </div>

    </div>

</section>