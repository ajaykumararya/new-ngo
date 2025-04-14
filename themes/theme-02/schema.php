<?php
if ($isPrimary) {
    $sliders = $this->SiteModel->slider();
    if ($sliders->num_rows()) {
        ?>
        <!-- Banner Section -->
        <section class="banner-section">
            <div class="banner-carousel kausid-carousel owl-theme owl-carousel"
                data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                <?php
                foreach ($sliders->result() as $slider) {
                    echo '
                        <div class="slide-item">
                            <div class="image-layer" style="background-image:url({base_url}upload/'.$slider->image.')"></div>

                            <div class="auto-container">
                                <div class="content-box">
                                    <div class="content">
                                        <div class="inner">
                                            <!--
                                            <div class="sub-title">Strengthening the health sector</div>
                                            <h2>Let’s Make a <br>healthier society</h2>
                                            <div class="links-box"><a href="donate.html" class="theme-btn btn-style-two"><span class="btn-title">Get involved</span></a></div> 
                                            -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>

            </div>
        </section>
        <!--End Banner Section -->
        <?php
    }
}
else{
    ?>
<section class="page-banner">
        <!-- <div class="image-layer" style="background-image: url(images/background/banner.jpg);"></div> -->

        <div class="auto-container">
            <h1>{page_name}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">{page_name}</li>
                </ul>
            </div>
        </div>

    </section>
    <?php
}

?>

{content}