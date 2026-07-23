<section class="section">

    <div class="container">

        <div class="section-title">

            <h2>🌸 Anime</h2>

            <a href="#">View All →</a>

        </div>

        <div class="card-grid">

            <?php for($i=1; $i<=4; $i++) : ?>

            <article class="content-card">

                <div class="card-image"></div>

                <div class="card-body">

                    <h3 class="card-title">
                        Anime <?php echo $i; ?>
                    </h3>

                    <p class="card-meta">
                        Fantasy • Adventure
                    </p>

                </div>

            </article>

            <?php endfor; ?>

        </div>

    </div>

</section>