<?php
if ($isPrimary) {
    $sliders = $this->SiteModel->slider();
    if ($sliders->num_rows()) {
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $i = 0;
                foreach ($sliders->result() as $slider) {
                    $active = $i == 0 ? 'active' : '';
                    echo '
            <li data-target="#carouselExampleIndicators" data-bs-slide-to="' . $i++ . '" class="' . $active . '" aria-current="true"
                aria-label="Slide ' . $i . '"></li>';
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $i = 1;
                foreach ($sliders->result() as $slider) {
                    $active = $i++ == 1 ? 'active' : '';
                    ?>
                    <div class="carousel-item <?= $active ?>">
                        <img src="{assets}<?= $slider->image ?>" class="d-block w-100" alt="...">
                    </div>
                    <?php
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script>
            $(document).ready(function () {
                // Initialize the carousel
                $('#carouselExampleIndicators').carousel({
                    interval: 3000, // 3 seconds between slides
                    pause: 'hover', // Pause the carousel when hovering
                    wrap: true // Enable looping of slides
                });

                // Handle previous and next button clicks
                $('.carousel-control-prev').click(function (e) {
                    e.preventDefault();
                    $('#carouselExampleIndicators').carousel('prev');
                });

                $('.carousel-control-next').click(function (e) {
                    e.preventDefault();
                    $('#carouselExampleIndicators').carousel('next');
                });

                // Handle indicator clicks
                $('.carousel-indicators li').click(function () {
                    const slideTo = $(this).data('bs-slide-to');
                    $('#carouselExampleIndicators').carousel(slideTo);
                });
            });

        </script>
        <?php
    }
    ?>

    <div>
        <?php
        echo $this->parser->parse('pages/home_page', [], true);
        // echo '<div class="row">';

} else
    echo '<div style="margin-top:130px;" class="row">';
?>




    {content}

</div>
<div class="overlay"></div>