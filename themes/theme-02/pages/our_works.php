<!--Causes Section-->
<section class="causes-section" style="background-color: #ebf6e5;">
    <div class="auto-container">

        <div class="sec-title centered">
            <div class="upper-icon"></div>
            <h2><?= ES("{$type}_title", 'Our Works') ?></h2>
            <div class="text"><?= ES("{$type}_heading_description") ?></div>
        </div>

        <div class="row clearfix">
            <?php
            $data = $this->SiteModel->get_contents($type);
            if ($data->num_rows()):
                $index = 1;
                foreach ($data->result() as $row):
                    ?>
                    <!--Cause Block-->
                    <div class="cause-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="<?=$row->field5?>">
                                        <img src="{base_url}upload/<?=$row->field2?>" alt="" style="height:200px">
                                    </a>
                                </figure>

                            </div>
                            <div class="lower-content">
                                <h3><a href="<?=$row->field5?>"><?=$row->field1?></a></h3>
                                <!--   <div class="cause-title">Medicine</div> -->
                                <div class="text">
                                    <?=$row->field3?>
                                </div>
                            </div>
                            <div class="link-box">
                                <a href="<?=$row->field5?>" class="theme-btn btn-style-two">
                                    <span class="btn-title"><?=$row->field4?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>

        </div>

    </div>
</section>