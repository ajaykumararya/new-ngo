<!--Join events Section-->
<section class="join-events" style="background-color: #ebf6e5;">
    <!--Upper Box-->
    <div class="upper-box">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20"
            data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-care"></span></div>

        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <figure class="image wow slideInLeft">
                            <img style="height:400px"
                                src="<?= base_url('upload/' . ES('our_event_page_image')) ?>" alt="">
                        </figure>
                    </div>
                </div>
                <!--Left Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title"><span class="icon"></span><?= ES('our_event_page_title') ?></div>
                        </div>
                        <div class="text-content">
                            <div class="text">
                                <?= ES('our_event_page_content') ?>
                            </div>
                            <div class="link-box">
                                <?php
                                $button_title = ES('our_event_page_button_text');
                                if ($button_title):
                                    echo '<a href="' . ES('our_event_page_button_link') . '" class="default-link">' . $button_title . '</a>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>