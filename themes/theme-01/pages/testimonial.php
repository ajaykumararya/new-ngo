
    <div class="head_item2">
        <h1 class='my-3'><span>Testimonials </span></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <?php
                    $get = $this->db->where('status',1)->get("testimonial");
                    if($get->num_rows()){
                        foreach($get->result() as $row){
                            echo '
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="{base_url}upload/'.$row->image.'">
                                </div>
                                <p class="description">'.$row->message.'</p>
                                <h3 class="title">'.$row->name.'</h3>
                                <small class="post">- '.$row->designation.'</small>
                            </div>
                            ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $("#testimonial-slider").owlCarousel({
                items: 2,
                itemsDesktop: [1000, 2],
                itemsDesktopSmall: [990, 2],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: false,
                navigationText: ["", ""],
                slideSpeed: 1000,
                autoPlay: true
            });
        });
    </script>