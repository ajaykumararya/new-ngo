 <!-- ===============================Abouts start ================================ -->
 <div class="about_div1   py-3 ">
        <div class="head_item2 pb-2 margin_m">
            <h1 class=''><span> {about_us_page_title} </span></h1>
        </div>
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="{base_url}upload/{about_us_image}" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <!-- <span class="blog-slider__code">26 December 2019</span>
                            <div class="blog-slider__title">Lorem Ipsum Dolor</div> -->
                        <div class="blog-slider__text">
                            {about_us_content}
                        </div>
                        <?php
                        if(isset($about_us_page_button_text) &&$about_us_page_button_text){
                            echo '
                        <br>
                        <a href="'.$about_us_page_button_link.'" class="blog-slider__button">'.$about_us_page_button_text.'</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- <div class="blog-slider__pagination"></div> -->
        </div>
    </div>
   