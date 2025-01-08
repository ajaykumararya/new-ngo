<!-- ==========================ITME COL 3===================================== -->
<div class="grid-container">

    <div class="item1">

        <div class="head_item2  pb-2">
            <h1><span>Management Team</span></h1>
        </div>
        <div class='mian_div_member'>
            <div id="container" class="container">
                <div class="gallery" id="gallery">
                    <div class="card">
                        <!-- <h2 class="card__title">Member</h2> -->
                        <p class="card__description">
                            <img src="webimg/WhatsApp%20Image%202024-08-23%20at%2013.14.03_08232024074553.jpg"
                                alt="Paris" width="150px" height="180px">
                        </p>
                        <a href="#" class="card__name">Gaurav Verma</a>
                        <a href="#" class="card__name">(State Chief Executive Officer)</a>
                    </div>
                    <div class="card">
                        <!-- <h2 class="card__title">Member</h2> -->
                        <p class="card__description">
                            <img src="user_img/Munish%20Kumar_04192023074543.jpg" alt="Paris" width="150px"
                                height="180px">
                        </p>
                        <a href="#" class="card__name">Munish Kumar</a>
                        <a href="#" class="card__name">(Zone Prabhari Kangra)</a>
                    </div>
                    <div class="card">
                        <!-- <h2 class="card__title">Member</h2> -->
                        <p class="card__description">
                            <img src="user_img/Rajesh%20Chandel_04192023074434.jpg" alt="Paris" width="150px"
                                height="180px">
                        </p>
                        <a href="#" class="card__name">Rajesh Chandel</a>
                        <a href="#" class="card__name">(Zone Prabhari Sirmour)</a>
                    </div>
                    <div class="card">
                        <!-- <h2 class="card__title">Member</h2> -->
                        <p class="card__description">
                            <img src="user_img/Bansi%20Baba_04192023074314.jpg" alt="Paris" width="150px"
                                height="180px">
                        </p>
                        <a href="#" class="card__name">Bansi Baba</a>
                        <a href="#" class="card__name">(State Advisor)</a>
                    </div>
                    <div class="card">
                        <!-- <h2 class="card__title">Member</h2> -->
                        <p class="card__description">
                            <img src="user_img/Meenakshi_04192023073821.jpg" alt="Paris" width="150px" height="180px">
                        </p>
                        <a href="#" class="card__name">Meenakshi Goel</a>
                        <a href="#" class="card__name">(Pradesh Yoga Prashikshika )</a>
                    </div>
                </div>
                <span class="btn prev"></span>
                <span class="btn next"></span>
            </div>
        </div>
        <!-- ======================================= -->
        <STYLE>
            .content {
                position: relative;
                width: 80%;
                max-width: 400px;
                margin: auto;
                overflow: hidden;
                margin-top: 20px;
                border-radius: 10px;
            }

            .content img {
                border-radius: 10px;
            }

            .content .content-overlay {
                background: rgb(232, 0, 0, 0.8);
                position: absolute;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
                bottom: 0;
                right: 0;
                opacity: 0;
                -webkit-transition: all 0.4s ease-in-out 0s;
                -moz-transition: all 0.4s ease-in-out 0s;
                transition: all 0.4s ease-in-out 0s;
            }

            .content:hover .content-overlay {
                opacity: 1;
            }

            .content-image {
                width: 100%;
            }

            .content-details {
                position: absolute;
                text-align: center;
                width: 100%;
                top: 50%;
            }

            .content-details h3 {
                color: #fff;
                font-weight: 500;
                letter-spacing: 0.15em;
                margin-bottom: 0.5em;
                text-transform: uppercase;
            }

            .arrow {
                margin-left: 8px;
            }

            .content h3 {
                display: inline-block;
                position: relative;
                transition: all 300ms ease-out;
                will-change: transform;
            }

            .content:hover h3 {
                -webkit-transform: translate3d(-1rem, 0, 0);
                transform: translate3d(-1rem, 0, 0);
            }

            .content i {
                position: absolute;
                width: 1.1em;
                right: -1.4rem;
                opacity: 1;
                top: 38%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                transition: all 300ms ease-out;
                will-change: right, opacity;
            }

            .content:hover i {
                opacity: 1;
                right: -3rem;
            }
        </STYLE>
        <!-- ======================================= -->
        <div class="content">
            <a href="donation.html" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image"
                    src="https://images.unsplash.com/photo-1542627088-6603b66e5c54?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2069&amp;q=80">
                <div class="content-details">
                    <h3 class="content-title">donation<i class="fa fa-arrow-right arrow"></i></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="item2">
        <div class="head_item2 margin_m">
            <h1><span>Latest Activity </span></h1>
        </div>
        <div class="center-div" style="margin-bottom:30px;">
            <div class="row d-flex align-items-center justify-content-center timeline_data ">

            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        };

        function loadTable() {
            $.AryaAjax({
                url: "website/ajax-timeline-load",
                loading_message: false
            }).then((res) => {
                log(res)
                if (res.status)
                    $('.timeline_data').html(res.data);
            });
        };
        loadTable();
        $(document).on("click", ".delete_cmt", function (e) {
            var id = $(this).attr('data-cmt_id');
            var conf = confirm('Do you want to delete this comment?');
            if (conf == true) {
                $.ajax({
                    url: "ajax/delete_comment.php",
                    type: 'post',
                    data: {
                        id: id
                    },
                    success: function (data) {
                        if (data == 1) {
                            loadTable();
                        }
                    }
                });
            }
        });
        $(document).on('click', '.timeline_data img', function () {
            var Event_id = $(this).attr('data-id');
            $(`#${Event_id}`).submit();
        });
        $(document).on('click', '.timeline_data .timeline_img', function () {
            var Event_id = $(this).attr('data-id');
            $(`#${Event_id}`).submit();
        });
    </script>

    <div class="item3 ">
        <div class="head_item2 pb-2">
            <h1><span>Member </span></h1>
        </div>
        <div class='mian_div_member'>
            <div id="container1" class="container">
                <div class="gallery" id="gallery1">
                    <?php
                    $listMembers = $this->member_model->verified_list();
                    if ($listMembers->num_rows()):
                        foreach ($listMembers->result() as $member) {
                            ?>
                            <div class="card">
                                <!-- <h2 class="card__title">Member</h2> -->
                                <p class="card__description">
                                    <img src="{base_url}upload/<?= $member->profile_img ?>" alt="<?= $member->name ?>" width="150px"
                                        height="180px">
                                </p>
                                <a href="#" class="card__name"><?= $member->name ?></a>
                                <a href="#" class="card__name">(<?= $member->authority ?>)</a>
                            </div>
                            <?php
                        }
                    endif;
                    ?>

                    <a href="#" class="card__name">View More</a>
                </div>
                <span class="btn prev1"></span>
                <span class="btn next1"></span>
            </div>
        </div>
        <!-- ======================================= -->
        <script>
            const gallery = document.querySelector("#container");
            const gallery_scroller = gallery.querySelector("#gallery");
            const gallery_item_size = gallery.querySelector("div").clientWidth;
            gallery.querySelector(".btn.next").addEventListener("click", scrollToNextPage);
            gallery.querySelector(".btn.prev").addEventListener("click", scrollToPrevPage);
            function scrollToNextPage() {
                gallery_scroller.scrollBy({
                    top: 0,
                    left: gallery_item_size,
                    behavior: "smooth"
                });
            }
            function scrollToPrevPage() {
                gallery_scroller.scrollBy({
                    top: 0,
                    left: -gallery_item_size,
                    behavior: "smooth"
                });
            }
            const myTimeout = setInterval(myGreeting, 5000);
            // const myTimeout1 = setInterval(myGreeting1, 3000);
            function myGreeting() {
                scrollToNextPage();
                scrollToNextPage1();
            }
            // function myGreeting1() {
            //     scrollToPrevPage1();
            //     scrollToPrevPage();
            // }
            // ===========================================================================
            const gallery1 = document.querySelector("#container1");
            const gallery_scroller1 = gallery1.querySelector("#gallery1");
            const gallery_item_size1 = gallery1.querySelector("div").clientWidth;
            gallery1.querySelector(".btn.next1").addEventListener("click", scrollToNextPage1);
            gallery1.querySelector(".btn.prev1").addEventListener("click", scrollToPrevPage1);
            function scrollToNextPage1() {
                gallery_scroller1.scrollBy({
                    top: 0,
                    left: gallery_item_size1,
                    behavior: "smooth"
                });
            }
            function scrollToPrevPage1() {
                gallery_scroller1.scrollBy({
                    top: 0,
                    left: -gallery_item_size1,
                    behavior: "smooth"
                });
            }
        </script>
        <!-- ======================================= -->
        <div class="content">
            <a href="users-apply-form.html" target="_blank">
                <div class="content-overlay"></div>
                <img class="content-image"
                    src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80">
                <div class="content-details">
                    <h3 class="content-title">Member Apply<i class="fa fa-arrow-right arrow"></i></h3>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- ===============================ITME COL 3 END ================================ -->