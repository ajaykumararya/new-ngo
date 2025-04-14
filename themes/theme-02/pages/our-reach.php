<section class="fun-facts-section">
    <div class="auto-container">
        <div class="fact-counter">
            <div class="sec-title">
                <div class="sub-title"><span class="icon"></span> Our Reach</div>
                <!--   <h2>Warmth & True Support <br>For Needed People</h2>-->
            </div>
            <div class="row clearfix">
                <?php
                $our_counters = [
                    'first_counter' => 'Certified Students',
                    'secound_counter' => 'Courses',
                    'third_counter' => 'Study Centers',
                    'forth_counter' => 'Awarded Centers'
                ];
                foreach ($our_counters as $index => $counter) {
                    $title = ES($index . '_text');
                    $value = ES($index . '_value');
                    preg_match_all('/\d+/', $value, $matches);

                    $numbers = $matches[0];
                    $counter = '';
                    $plus_sign = $value;
                    if ($numbers) {
                        $counter = $numbers[0];
                        $plus_sign = str_replace($counter, '', $plus_sign);
                    }
                    ?>
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="<?=$counter?>">0</span>
                                <?=$plus_sign?>
                        </div>
                            <div class="counter-title"><?= $title ?></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
    </div>
</section>