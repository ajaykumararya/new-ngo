<!--Contact Section-->
<section class="contact-section">
    <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20"
        data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
        <span class="flaticon-heart-2"></span>
    </div>

    <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
        <span class="flaticon-heart-2"></span>
    </div>

    <div class="icon-three paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
        <span class="flaticon-dove"></span>
    </div>

    <div class="auto-container">

        <div class="sec-title centered">
            <div class="upper-icon"></div>
            <h2><?= ES('enquiry_form_section_title') ?></h2>
            <div class="text"><?= ES('enquiry_form_section_short_descrption') ?></div>
        </div>
        <div class="row clearfix">
            <!--Form Column--->
            <div class="form-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="shape-box">
                        <h3>
                            <?= ES('enquiry_form_title') ?>
                        </h3>
                    </div>
                    <div class="default-form contact-form">
                        <form method="post" action="" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <div class="field-label">Your Name</div>
                                    <input type="text" name="name" placeholder="" required="">
                                </div>

                                <div class="col-md-6 col-sm-12 form-group">
                                    <div class="field-label">Email</div>
                                    <input type="email" name="email" placeholder="" required="">
                                </div>

                                <div class="col-md-6 col-sm-12 form-group">
                                    <div class="field-label">Mobile</div>
                                    <input type="text" name="phone" placeholder="" required="">
                                </div>

                                <div class="col-md-6 col-sm-12 form-group">
                                    <div class="field-label">Purpose</div>
                                    <select name="subject" required="">
                                        <option value="" selected> Select option </option>
                                        <option value="Valunteership"> Valunteership </option>
                                        <option value="Donation"> Donation </option>
                                        <option value="Other"> Other </option>
                                    </select>
                                </div>

                                <div class="col-md-12 col-sm-12 form-group">
                                    <div class="field-label">Message</div>
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>

                                <div class="col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                            class="btn-title">Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Image Column--->
            <div class="image-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <!--    <div class="icon-1 paroller" data-paroller-factor="-0.30" data-paroller-factor-lg="-0.20" data-paroller-factor-sm="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical"></div>
                      -->
                    <div class="icon-2 paroller" data-paroller-factor="0.30" data-paroller-factor-lg="0.20"
                        data-paroller-factor-sm="0.10" data-paroller-type="foreground"
                        data-paroller-direction="vertical"></div>
                    <figure class="image"><img src="<?= base_url('upload/' . ES('enquiry_form_left_image')) ?>" alt="">
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>