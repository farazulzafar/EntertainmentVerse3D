<section class="section">

    <div class="container">

        <div class="section-title">

            <h2>Featured Movies</h2>

            <a href="#">View All →</a>

        </div>

        <div class="card-grid">

            <?php

            $movies = [

                [
                    'image'  => 'poster-1.jpg',
                    'title'  => 'The Dark Horizon',
                    'rating' => '9.2',
                    'meta'   => 'Sci-Fi • 2026'
                ],

                [
                    'image'  => 'poster-2.jpg',
                    'title'  => 'Shadow Hunter',
                    'rating' => '8.9',
                    'meta'   => 'Action • 2026'
                ],

                [
                    'image'  => 'poster-3.jpg',
                    'title'  => 'Lost Empire',
                    'rating' => '8.7',
                    'meta'   => 'Adventure • 2026'
                ],

                [
                    'image'  => 'poster-4.jpg',
                    'title'  => 'Infinity War Reborn',
                    'rating' => '9.4',
                    'meta'   => 'Fantasy • 2026'
                ]

            ];

            foreach ($movies as $movie) {

                get_template_part(
                    'template-parts/components/content-card',
                    null,
                    $movie
                );

            }

            ?>

        </div>

    </div>

</section>