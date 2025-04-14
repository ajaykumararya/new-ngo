<!--About Section-->
<section class="about-section">

    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <div class="sub-title"><span class="icon"></span> {about_us_page_title}</div>
                        <!--   <h2>Warmth & True Support <br>For Needed People</h2>-->
                    </div>
                    <div style="position: relative;min-height:120px;">
                        <!--  <div class="image">
                    <img src="images/resource/video-image-1.jpg" alt="">
                    <a href="https://www.youtube.com/watch?v=C9rVAbcQH_U" class="lightbox-image">
                        <span class="fa fa-play"></span>
                    </a>
                </div> -->
                        <div class="text">
                            {about_us_content}
                        </div>
                        <?php
                        if (isset($about_us_page_button_text) && $about_us_page_button_text) {
                            echo '
                        <br>
                        <div class="link-box">
                            <a href="' . $about_us_page_button_link . '" class="default-link">' . $about_us_page_button_text . '</a>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-column col-lg-5 col-md-12 col-sm-12">
                <div class="about-feature-box">
                    <div class="outer clearfix">
                        <img src="{base_url}upload/{about_us_image}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>