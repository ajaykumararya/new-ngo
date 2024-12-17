>
<style>
    .position-logo.row {
        row-gap: 20px;
    }


    .position-logo a img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        box-shadow: 0 2px 6px #000;
    }

    .position-logo.row a {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        row-gap: 15px;
    }

    /* =========================slider start========================================== */


    .carousel-item {
        height: 600px;
        margin-top: 110px;
    }

    .carousel-item img {
        height: 600px;
    }

    /* =========================slider end ========================================== */
    /* =========================THREE COL start========================================== */
    .item1 {
        grid-area: a;
        /*padding-top: 50px;*/
        /*padding-left: 40px;*/
    }

    .item3 {
        grid-area: b;
        /*padding-top: 50px;*/
        /*padding-left: 40px;*/
    }

    .item2 {
        grid-area: c;
    }

    .grid-container {
        display: grid;
        margin-top: 30px;
        border: 1;
        grid-template-areas:
            'a c b';
        grid-template-columns: 300px 1fr 300px;
    }

    @media screen and (max-width: 750px) {
        .grid-container {
            display: grid;
            /* margin-top: 150px; */
            grid-template-columns: 1fr;
            grid-template-areas:
                'c'
                'a'
                'b';
        }

        .carousel-inner {
            height: 300px !important;
        }

        .carousel-inner img {
            height: 300px !important;
        }

        .item1 {
            grid-area: a;
            padding-top: 0;
            padding-left: 0;
        }

        .item3 {
            grid-area: b;
            padding-top: 0;
            padding-left: 0;
        }

        .gallery {
            display: flex;
            overflow-x: scroll;
            position: relative;
            padding: 24px;
            width: 90%;
            height: 400px;
            border-radius: 0.5rem;
            gap: 12px;
            background: #ffffff;
            scroll-snap-type: x mandatory;
            /* scroll-padding: 24px; */
            margin: auto;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        }
    }

    .mian_div_member .container {
        display: flex;
        justify-content: center;
    }

    /* Scroll styles */
    .mian_div_member .gallery::-webkit-scrollbar {
        height: 6px;
    }

    .mian_div_member .gallery::-webkit-scrollbar-track {
        background-color: rgba(0, 0, 0, 0.15);
        border-radius: 4px;
    }

    .mian_div_member .gallery::-webkit-scrollbar-thumb {
        background: linear-gradient(to right, #6dd5ed, #2193b0);
        border-radius: 4px;
    }

    .container {
        /* margin: 2rem; */
        position: relative;
    }

    .mian_div_member .gallery {
        display: flex;
        overflow-x: scroll;
        position: relative;
        padding: 24px;
        width: 250px;
        max-height: 380px;
        ;
        border-radius: 0.5rem;
        gap: 12px;
        background: #ffffff;
        scroll-snap-type: x mandatory;
        /*   scroll-padding: 24px; */
    }

    /* Element */
    .mian_div_member .card {
        flex: 0 0 100%;
        padding: 24px;
        border-radius: 0.5rem;
        color: #000;
        scroll-snap-align: center;
        opacity: 1;
        transition: opacity 250ms linear;
        background: rgb(255, 93, 0);
        background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
    }

    .mian_div_member .card:nth-child(even) {
        background: rgb(255, 93, 0);
        background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
    }

    .mian_div_member .card__title {
        text-transform: capitalize;
        text-decoration: none;
        color: #fff;
        text-align: center;
        align-items: center;
        font-size: 18px;
    }

    .mian_div_member .card img {
        border-radius: 10px;
        width: 100%;
        min-height: auto;
    }

    .card__description {}

    .mian_div_member .card__name {
        text-decoration: none;
        color: #fff;
        text-align: center;
        align-items: center;
        font-size: 18px;
    }

    @media (hover: hover) {
        .mian_div_member .card:hover {
            opacity: 0.9;
            transition: opacity 250ms linear;
        }
    }

    .mian_div_member .btn {
        position: absolute;
        top: 50%;
        transform: translateY(-100%);
        height: 30px;
        width: 30px;
        border-radius: 2px;
        background-color: rgba(0, 0, 0, 0.5);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        z-index: 1;
    }

    /* ====================heading h1  s ===================================== */
    .head_item2 h1 {
        /*margin: -10px 0 5px 0;*/
        color: #333634;
        font-size: 20px !important;

    }

    .head_item2 h1 {
        text-align: center;
        overflow: hidden;
    }

    .head_item2 h1 span {
        display: inline-block;
        position: relative;
    }

    .mian_div_member .btn.next,
    .mian_div_member .btn.next1 {
        background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="%23FFF" fill-rule="evenodd"/></svg>');
        right: 10px;
    }

    .mian_div_member .btn.prev,
    .mian_div_member .btn.prev1 {
        background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="%23FFF" fill-rule="evenodd"/></svg>');
        left: 10px;
    }

    /* =========================THREE COL end ========================================== */
    /* =========================about start ========================================== */
    @import url('https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800');

    .blog-slider {
        width: 95%;
        position: relative;
        max-width: 80%;
        margin: auto;
        background: #fff;
        box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
        padding: 25px;
        border-radius: 25px;
        min-height: 400px;
        height: auto;
        transition: all 0.3s;
    }

    a {
        text-decoration: none !important;
    }

    @media screen and (max-width: 992px) {
        .blog-slider {
            max-width: 680px;
            height: 400px;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-slider {
            min-height: 500px;
            height: auto;
            margin: 180px auto 20px auto;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .blog-slider {
            height: 350px;
        }
    }

    .blog-slider__item {
        display: flex;
        align-items: center;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__item {
            flex-direction: column;
        }
    }

    .blog-slider__item.swiper-slide-active .blog-slider__img img {
        opacity: 1;
        transition-delay: 0.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>* {
        opacity: 1;
        transform: none;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(1) {
        transition-delay: 0.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(2) {
        transition-delay: 0.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(3) {
        transition-delay: 0.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(4) {
        transition-delay: 0.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(5) {
        transition-delay: 0.7s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(6) {
        transition-delay: 0.8s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(7) {
        transition-delay: 0.9s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(8) {
        transition-delay: 1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(9) {
        transition-delay: 1.1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(10) {
        transition-delay: 1.2s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(11) {
        transition-delay: 1.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(12) {
        transition-delay: 1.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(13) {
        transition-delay: 1.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(14) {
        transition-delay: 1.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(15) {
        transition-delay: 1.7s;
    }

    .blog-slider__img {
        width: 300px;
        flex-shrink: 0;
        height: 300px;
        border-radius: 20px;
        transform: translateX(-80px);
        overflow: hidden;
    }

    .blog-slider__img:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        opacity: 0.8;
    }

    .blog-slider__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 0;
        border-radius: 20px;
        transition: all 0.3s;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__img {
            transform: translateY(-50%);
            width: 90%;
        }
    }

    @media screen and (max-width: 576px) {
        .blog-slider__img {
            width: 95%;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .blog-slider__img {
            height: 270px;
        }
    }

    .blog-slider__content {
        padding-right: 25px;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__content {
            margin-top: -80px;
            text-align: center;
            padding: 0 30px;
        }
    }

    @media screen and (max-width: 576px) {
        .blog-slider__content {
            padding: 0;
        }
    }

    .blog-slider__content>* {
        opacity: 0;
        transform: translateY(25px);
        transition: all 0.4s;
    }

    .blog-slider__code {
        color: #7b7992;
        margin-bottom: 15px;
        display: block;
        font-weight: 500;
    }

    .blog-slider__title {
        font-size: 24px;
        font-weight: 700;
        color: #0d0925;
        margin-bottom: 20px;
    }

    .blog-slider__text {
        color: #000 !important;
        height: 250px;
        overflow-y: scroll;
        margin-bottom: 30px;
        /* line-height: 1.5em; */
    }

    .blog-slider__content {
        max-width: auto !important;
        min-height: 350px;
    }

    .blog-slider__text p {
        color: #000 !important;
        font-size: 16px;
        /* min-height: 400px; */
        text-align: justify;
        margin-bottom: 30px;
        /* line-height: 1.5em; */
    }

    .blog-slider__button {
        display: inline-block;
        padding: 10px 20px;
        justify-content: end;
        float: right;
        border-radius: 50px;
        margin-top: 5px;
        color: #fff;
        text-decoration: none;
        box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
        border: 1px solid rgba(252, 56, 56, 0.4);
        font-weight: bold;
        justify-content: center;
        background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
        text-align: center;
        letter-spacing: 1px;
    }

    .blog-slider__button1 {
        display: inline-block;
        padding: 10px 35px;
        justify-content: end;
        float: left;
        border-radius: 50px;
        margin-top: 20px;
        color: #fff;
        text-decoration: none;
        box-shadow: 0px 14px 40px rgba(252, 56, 56, 0.4);
        border: 1px solid rgba(252, 56, 56, 0.4);
        font-weight: bold;
        justify-content: center;
        background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
        text-align: center;
        letter-spacing: 1px;
    }

    @media screen and (max-width: 576px) {
        .blog-slider__button {
            width: 100%;
        }

        .blog-slider__button1 {
            width: 100%;
        }
    }

    .blog-slider .swiper-container-horizontal>.swiper-pagination-bullets,
    .blog-slider .swiper-pagination-custom,
    .blog-slider .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%;
    }

    .blog-slider__pagination {
        position: absolute;
        z-index: 21;
        right: 20px;
        width: 11px !important;
        text-align: center;
        left: auto !important;
        top: 50%;
        bottom: auto !important;
        transform: translateY(-50%);
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination {
            transform: translateX(-50%);
            left: 50% !important;
            top: 205px;
            width: 100% !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 8px 0;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 5px;
        }
    }

    .blog-slider__pagination .swiper-pagination-bullet {
        width: 11px;
        height: 11px;
        display: block;
        border-radius: 10px;
        background: #062744;
        opacity: 0.2;
        transition: all 0.3s;
    }

    .blog-slider__pagination .swiper-pagination-bullet-active {
        opacity: 1;
        background: #fd3838;
        height: 30px;
        box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination .swiper-pagination-bullet-active {
            height: 11px;
            width: 30px;
        }

        .blog-slider__text p {
            color: #000 !important;
            font-size: 15px
        }
    }

    .carousel-item {
        height: 600px !important;
        margin-top: 80px !important;
    }

    .carousel-caption {
        position: absolute;
        /* right: 0 !important; */
        top: 100px !important;
        left: 70px !important;
        z-index: 10;
        /* border: 1px solid red; */
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: left;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
    }

    .carousel-caption h5 {
        font-size: 50px;
        width: 70%;
    }

    .carousel-caption p {
        width: 50%;
    }

    @media screen and (max-width: 768px) {
        .carousel-caption {
            position: absolute;
            /* right: 0 !important; */
            top: 10px !important;
            left: 50px !important;
            z-index: 10;
            /* border: 1px solid red; */
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: left;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
        }

        .carousel-caption h5 {
            font-size: 18px;
            width: 80%;
        }

        .carousel-caption p {
            font-size: 14px;
            width: 70%;
        }
    }

    /* =========================about end ========================================== */
    /* =========================about start ========================================== */
    /* =========================about end ========================================== */
    /* =========================about start ========================================== */
    /* =========================about end ========================================== */
    /* =========================about start ========================================== */
    /* =========================about end ========================================== */
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>
<style media="screen">
    html{
        overflow-x:hidden
    }
    .bname span {
        font-weight: bold;
        font-size: 12px;
        margin-left: 8px;
    }

    .similar_link {
        cursor: pointer;
    }

    .share {
        font-size: 14px;
    }

    .blur {
        position: fixed;
        height: 100%;
        width: 100vw;
        top: 0;
        background: rgba(0, 0, 0, .3);
        z-index: 9999;
        display: none;
    }

    .share_div {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        z-index: 999999;
        border-radius: 10px;
        width: 220px;
    }

    .share_div a {
        text-decoration: none;
        color: #000;
    }

    .share_div i {
        padding: 20px;
        font-size: 30px;
        cursor: pointer;
        transition: .3s;
    }

    .share_div i:hover {
        color: rgb(0, 71, 137);
        transition: .3s;
    }

    .share_div_inside {
        height: 100%;
        width: 100%;
        position: relative;
    }

    #share_close {
        position: absolute;
        right: -15px;
        top: -18px;
        color: red;
        padding: 5px;
    }

    .card-footer {
        font-size: 16px;
    }

    @media only screen and (min-width:750px) {
        .similar_news iframe {
            height: 80px !important;
            width: 110px !important;
        }
    }

    iframe {
        height: 300px !important;
        width: 100% !important;
    }

    .timeline_data img,
    .timeline_data iframe {
        cursor: pointer;
    }

    @media only screen and (max-width:500px) {
        iframe {
            height: auto !important;
            width: 100% !important;
        }
    }
</style>

<body>
    <div class="blur" style="display: none;"></div>
    <div class="share_div" style="display: none;">
        <div class="share_div_inside">
            <i class="fa fa-clipboard clipboard" id="clipboard" data-url="{base_url}view-post?Event_id=66d81809e70b7"
                onclick="myFunction()" aria-hidden="true"></i>
            <a id="whats_share" href="whatsapp://send?text={base_url}view-post?Event_id=66d81809e70b7"
                target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a id="face_share"
                href="https://www.facebook.com/sharer/sharer.php?u={base_url}view-post?Event_id=66d81809e70b7"
                target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <i id="share_close" class="fa fa-times" aria-hidden="true"></i>
        </div>
    </div>
    <button id="problem_btn" type="button" name="button">आपकी समस्या दर्ज करें</button>
    <style type="text/css">
        .nav-bar {
            top: 0;
            z-index: 111;
        }

        .social_link {
            display: flex;
            justify-content: space-around;
        }

        .social_link a {
            text-decoration: none;
        }

        .nav-item img {
            height: 40px;
            width: 40px;
            margin-left: 10px;
            margin-top: 5px;
        }

        .sidenav2 {
            position: absolute;
            padding: 16px 16px;
            top: 65px;
            background-color: white;
            width: 100%;
            height: 50px;
            margin: 0;
            display: inline-block;
            justify-content: space-between;
            text-align: center;

            box-shadow: 0 0 6px 0 rgba(232, 0, 0, 1);
            border-bottom: solid 3px transparent;
            background-image: linear-gradient(rgba(232, 0, 0, 1), rgba(61, 0, 0, 1)), linear-gradient(101deg, rgba(232, 0, 0, 1), #ff48fa);
            background-origin: border-box;
            background-clip: content-box, border-box;
            box-shadow: 2px 1000px 1px #fff inset;
        }

        .sidenav2 a {
            padding: 12px 10px;
            text-decoration: none;
            font-size: 15px;
            margin: 0;
            font-weight: 600;
            margin-top: 2px !important;
            ;
            color: #000;
            text-align: center;
            transition: 0.3s;
        }

        .sidenav2 a:hover {
            color: white;

        }

        .category {
            display: none;
        }

        .fa-home {
            font-size: 34px;
        }

        /* ========================= */
        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 10px 10px 10px !important;

            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(74, 100, 108);
            color: #fff;
        }

        li.dropdown {
            display: inline-block;
            margin-top: -25px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 190px;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: rgb(74, 100, 108);

        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>


    <div class="nav-bar" id="nav-bar">
        <div class="sidenav2">
            <?php
            $pageCount = 0;
            function get_menu($items, $class = '', $liClass = '', $linkClass = '', $boxID = '', $attr = '')
            {
                $html = "";
                foreach ($items as $key => $value) {
                    $activeCss = $value['isActive'] ? 'active' : ''; //getActiveMenu($value['page_id'],'active');
                    $link = $value['link'];
                    $iconWithTExt = $value['label'];
                    if ($class == 'dropdown') {
                        $html .= '<a href="' . $link . '" ' . $value['target'] . ' class="menu-css ' . $linkClass . '">' . $iconWithTExt . '</a>';
                    } else {
                        if (array_key_exists('child', $value)) {
                            $html .= '<li class="' . $activeCss . ' dropdown"><a href="#" ' . $value['target'] . ' class="menu-css ' . $linkClass . ' " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $iconWithTExt . ' <i
                                        style="margin-top:1.5px!important;" class="fa fa-sort-desc" aria-hidden="true"></i></a>';
                        } else
                            $html .= '<li class="' . $activeCss . ' dropdown dropdown_open"><a href="' . $link . '" ' . $value['target'] . ' class="menu-css ' . $linkClass . '">' . $iconWithTExt . '</a>';
                    }
                    if (array_key_exists('child', $value)) {
                        $html .= '<div class="dropdown-content">';
                        $html .= get_menu($value['child'], 'dropdown', '', '');
                        $html .= '</div>';
                    }
                    $html .= "</li>";
                }
                return $html;
            }
            echo get_menu($menus, '');
            ?>

        </div>
    </div>
    <script>
    </script>
    <style type="text/css">
        .nav-bar {
            position: fixed;
            top: 0;
            z-index: 111;
        }

        .nav-bar,
        .card1,
        .right-div-p,
        .left-div-p,
        .buttons button,
        .contact-footer {
            background: rgb(255, 93, 0);
            background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
        }

        .sidenav2 a:hover {
            background: rgb(255, 93, 0);
            background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
        }

        .social_link {
            display: flex;
            justify-content: space-around;
        }

        .social_link a {
            text-decoration: none;
        }

        .social-icon {
            position: absolute;
            right: 30px;
        }

        .social-icon a {
            font-size: 25px;
            color: #fff;
            transition: .3s;
        }

        .social-icon a:hover {
            color: yellow;
            transition: .3s;
        }

        .sidenav {
            height: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: -100%;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            margin: 0;
            width: 250px;
            box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .sidenav a {
            padding: 4px 8px 4px 2px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: black;
            margin: 0;
            display: block;
            transition: 0.3s;
            border-bottom: 1px solid #d9dbde;
        }

        .menu {
            border-bottom: 0 !important;
        }

        .sidenav a:hover {
            color: #DF2800;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 10px;
            margin-left: 50px;
        }

        #close-btn .fa {
            margin-top: 10px;
            color: white;
            font-size: 27px !important;
        }

        .sidenav_home {
            height: 100px;
            width: auto;
            margin: auto;
            background: rgb(255, 93, 0);
            background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
        }

        .sidenav_home img {
            margin: auto;
            padding: 10px;
            height: 100%;
            width: auto;
        }

        .nav-bar {
            display: grid;
            align-items: center;
            width: 100%;
            height: 65px;
            /*background: linear-gradient(254deg, rgba(0,141,205,1) 50%, rgba(178,231,255,1) 100%);*/
        }

        .nav-item {
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .nav-item img {
            height: 100%;
            width: 100%;
            margin: auto;
        }

        .category {
            font-size: 20px;
            cursor: pointer;
            color: white;
            padding: 5px;
            z-index: 999;
        }

        .web_logo {
            height: auto;
            width: 60px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .sidenav i {
            font-size: 14px;
            margin-bottom: 50px;
        }

        i {
            margin: 0 !important;
            padding: 0px 3px;
            font-size: 18px;
        }

        .logout-btn {
            position: relative;
        }

        .logout-btn:hover a {
            visibility: visible;
            transition: .3s;
        }

        .logout-btn a {
            visibility: hidden;
            position: absolute;
            top: 50px;
            color: #fff;
            right: 2px;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 10px;
            background: red;
            border-radius: 10px;
            transition: .3s;
        }

        .logout-btn img {
            border-radius: 50%;
        }

        .nav_heading {
            margin: auto;
            left: 50%;
            transform: translateX(-50%);
            position: absolute;
            height: auto;
            width: auto;
            padding: 11px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .nav_heading p {
            color: #fff !important;
        }

        .nav_heading h3 {
            text-align: center;
            justify-content: center;
            color: white;
            font-size: 23px;
            font-weight: bold;
        }

        #Profile_img {
            height: 40px;
            width: 40px;
        }

        .social_link i {
            font-size: 25px;
        }

        .sidenav_home img {
            margin-right: 15px;
        }

        @media only screen and (max-width: 600px) {
            .nav_heading {
                width: 75%;
                align-items: end;
                padding-right: 5px !important;
                margin-left: 40px;
            }

            .nav_heading h3 {
                font-size: 16px;
                text-align: center !important;
            }

            .nav_heading p {
                font-size: 6px !important;
                text-align: right !important;
                margin: 0;
            }

            .social-icon {
                display: none;
            }

            .nav-bar {
                height: 60px;
            }

            .flag {
                display: none;
            }
        }
    </style>
    <div class="nav-bar">
        <div class="social-icon">
            <a href="{facebook}" class="" target="_blank"><i class="fa fab fa-facebook"></i></a>
            <a href="{twitter}" class="" target="_blank"><i class="fa fab fa-twitter"></i></a>
            <a href="{youtube}" class=""><i class="fa fab fa-youtube"></i></a>
            <a href="{instagram}" class=""><i class="fa fab fa-instagram"></i></a>
            <a href="{linkedin}" class=""><i class="fa fab fa-linkedin"></i></a>
        </div>
        <div class="nav_heading">
            <h3>{title}</h3>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" id="close-btn" class="closebtn menu" onclick="closeNav()"><i
                    class="fa fa-times" aria-hidden="true"></i></a>
            <div class="sidenav_home"><a href="{base_url}"><img src="{assets}{logo}"></a></div>
            <?php
            $pageCount = 0;
            function get_menu2($items, $class = '', $liClass = '', $linkClass = '', $boxID = '', $attr = '')
            {
                $html = "";
                foreach ($items as $key => $value) {
                    $activeCss = $value['isActive'] ? 'active' : ''; //getActiveMenu($value['page_id'],'active');
                    $link = $value['link'];
                    $iconWithTExt = $value['label'];
                    if (!array_key_exists('child', $value)) {
                        $html .= '<a href="' . $link . '" ' . $value['target'] . ' class="menu-css ' . $linkClass . '">' . $iconWithTExt . '</a>';
                    }
                    if (array_key_exists('child', $value)) {
                        // $html .= '<div class="dropdown-content">';
                        $html .= get_menu2($value['child'], 'dropdown', '', '');
                        // $html .= '</div>';
                    }
                }
                return $html;
            }
            echo get_menu2($menus, '');
            ?>



            <div class="social_link">
                <a href="{facebook}" class="" target="_blank"><i class="fa fab fa-facebook"></i></a>
                <a href="{twitter}" class="" target="_blank"><i class="fa fab fa-twitter"></i></a>
                <a href="{youtube}" class=""><i class="fa fab fa-youtube"></i></a>
                <a href="{instagram}" class=""><i class="fa fab fa-instagram"></i></a>
                <a href="{linkedin}" class=""><i class="fa fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="nav-item">
            <div class="category" onclick="openNav()"><i id="open-btn" class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="web_logo">
                <a href="{base_url}"><img src="{assets}{logo}"></a>
            </div>
            <div class="logout-btn ml-auto mr-4 mt-1 ">
            </div>
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.left = "0";
            document.getElementById("open-btn").style.display = "none";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.left = "-100%";
            document.getElementById("open-btn").style.display = "block";
        }
        function opensearch() {
            document.getElementById("search_div").style.top = "0";
        }
        function closesearch() {
            document.getElementById("search_div").style.top = "-100%";
        }
    </script>

    {output}


    <!-- ===============================Our Objective start ================================ -->


    <!--
    <div class="about_div1">
        <div class="head_item2 pb-2 mt-3">
            <h1 class=''><span>Collaboration & Recognition</span></h1>
        </div>
        <div class="blog-slider" style="height:auto; min-height:auto;">
            <div class="blog-slider__wrp swiper-wrapper">

                <div class="position-logo row">
                    <a class="col-md-6" href="https://dental.bhojiamededu.com/" target="blank">
                        <img src="uploads/p-logo.jpg">
                        <h4>Bhojia Dental College & Hospital</h4>
                    </a>
                    <a class="col-md-6" href="http://www.sihsindia.com/" target="blank">
                        <img src="uploads/p2-logo.jpg">
                        <h4>Sholeshwar Institute For Higher Studies</h4>
                    </a>
                </div>

            </div>

        </div>
    </div>

    -->



    <!-- ================================================================================= -->
    <!--=================================================================================  -->
    <!-- start count stats -->
    <!-- ==================================CSS ====================================================== -->
    <!-- ==================================CSS ====================================================== -->
    <!-- ==================================CSS ====================================================== -->
    <style media="screen">
        @import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);

        body {}

        /*/ start count stats /*/

        section#counter-stats {
            display: flex;
            justify-content: center;
            margin-top: 100px;
            /* background: #E7E9EB; */
            height: auto;
            padding-top: 30px;
            margin-bottom: 40px;
        }

        .stats {
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }

        .stats .fa {
            color: rgba(238, 114, 2, 1);
            font-size: 60px;
        }

        /*/ end count stats /*/
    </style>

    <style media="screen">
        .testimonial {
            border-right: 4px solid rgb(51, 146, 4);
            /* box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2); */
            padding: 30px 30px 30px 130px;
            margin: 0 15px 30px 15px;
            overflow: hidden;
            position: relative;
            min-height: 250px;
            background-color: #fff;
            border-radius: 10px;
        }

        .testimonial:before {
            content: "";
            position: absolute;
            bottom: -4px;
            left: -17px;
            border-top: 25px solid rgb(255, 89, 0);
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            transform: rotate(45deg);
        }

        .testimonial:after {
            content: "";
            position: absolute;
            top: -4px;
            left: -17px;
            border-top: 25px solid rgb(255, 89, 0);
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            transform: rotate(135deg);
        }

        .testimonial .pic {
            display: inline-block;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: 60px;
            left: 20px;
        }

        .testimonial .pic img {
            width: 100%;
            height: auto;
        }

        .testimonial .description {
            font-size: 15px;
            letter-spacing: 1px;
            color: #6f6f6f;
            line-height: 25px;
            margin-bottom: 15px;
        }

        .testimonial .title {
            display: inline-block;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgb(255, 89, 0);
            margin: 0;
        }

        .testimonial .post {
            display: inline-block;
            font-size: 17px;
            color: rgb(51, 146, 4);
            font-style: italic;
        }

        .owl-theme .owl-controls .owl-page span {
            border: 2px solid rgba(238, 114, 2, 1);
            background: #fff !important;
            border-radius: 0 !important;
            opacity: 1;
        }

        .owl-theme .owl-controls .owl-page.active span,
        .owl-theme .owl-controls .owl-page:hover span {
            background: rgba(238, 114, 2, 1) !important;
            border-color: rgba(238, 114, 2, 1);
        }

        @media only screen and (max-width: 767px) {
            .testimonial {
                padding: 20px;
                text-align: center;
            }

            .testimonial .pic {
                display: block;
                position: static;
                margin: 0 auto 15px;
            }
        }
    </style>

    <!-- ==================================CSS ====================================================== -->
    <!-- ==================================CSS ====================================================== -->
    <!-- ==================================CSS ====================================================== -->

    <!-- ================================================================================== -->
    <!-- ================================================================================== -->
    <!-- ================================================================================== -->


    <!-- ================================================================================== -->
    <!-- ================================================================================== -->

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

    <!-- ================================================================================== -->
    <!-- ================================================================================== -->
    <!-- ================================================================================== -->
    <script type="text/javascript">
        // number count for stats, using jQuery animate

        $('.counting').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
            },

                {

                    duration: 3000,
                    easing: 'linear',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum + '+');
                        //alert('finished');
                    }

                });


        });

        function prev() {
            document.getElementById('slider-container').scrollLeft -= 270;
        }

        function next() {
            document.getElementById('slider-container').scrollLeft += 270;
        }


        // $(".slide img").on("click", function () {
        //     $(this).toggleClass('zoomed');
        //     $(".overlay").toggleClass('active');
        // })
        // $(".overlay").on("click" , function(){
        // 	$(".overlay").hide();
        // })
    </script><!-- end cont stats -->



</body>

</html> <a href="https://wa.me/+917018394775" id="phone_btn" target="_blank"><img
        src="https://img.icons8.com/color/70/000000/whatsapp--v1.png" alt=""></a>
<a href="donation.html" id="donation_btn" target="_blank">Donate</a>

<style type="text/css">
    ul {
        margin: 0px;
        padding: 0px;
    }

    .footer-section {
        background: #151414;
        position: relative;
        text-align: center;
    }

    .footer-cta {
        border-bottom: 1px solid #373636;
    }

    .single-cta i {
        color: #ff5e14;
        font-size: 25px;
        float: ;
        margin-top: 8px;
    }

    .cta-text {
        padding-left: 15px;
        display: inline-block;
        /*margin-bottom:10px;*/
    }

    .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .cta-text span {
        color: #fff;
        font-size: 15px;
    }

    .footer-content {
        position: relative;
        z-index: 2;
    }

    .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
    }

    .footer-logo {
        margin-bottom: 30px;
    }

    .footer-logo img {
        max-width: 150px;
    }

    .footer-text p {
        margin-bottom: 14px;
        font-size: 16px;
        text-align: justify;

        color: #7e7e7e;
        line-height: 28px;
    }

    .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }

    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;

    }

    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
    }

    .facebook-bg {
        background: #3B5998;
    }

    .twitter-bg {
        background: #55ACEE;
    }

    .google-bg {
        background: #DD4B39;
    }

    .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
    }

    .footer-widget .img_div {
        display: block;
        margin: auto;
    }

    .img_div iframe {

        height: 400px !important;
    }

    .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 45%;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
    }

    .footer-widget ul li {
        display: inline-block;
        float: left;
        text-align: left;
        width: 50%;
        /* margin-bottom: 12px; */
    }

    .footer-widget ul li a:hover {
        color: #ff5e14;
    }

    .footer-widget ul li a {
        color: #878787;
        font-size: 18px;
        text-transform: capitalize;
    }

    .subscribe-form {
        position: relative;
        overflow: hidden;
    }

    .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
    }

    .subscribe-form button {
        position: absolute;
        right: 0;
        background: #ff5e14;
        padding: 13px 20px;
        border: 1px solid #ff5e14;
        top: 0;
    }

    .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
    }

    .copyright-area {
        background: #202020;
        padding: 10px 0;
    }

    .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
    }

    .copyright-text p a {
        color: #ff5e14;
    }

    .footer-menu li {
        display: inline-block;
        /* margin-left: 20px; */
    }

    .footer-menu li:hover a {
        color: #ff5e14;
    }

    .footer-menu li a {
        font-size: 14px;
        color: #878787;
    }

    .footer_last {
        background: #000;
        color: #fff;
        margin: 0;
        padding: 8px;
        text-align: left !important;
    }

    .footer_last p {
        text-align: left;
        padding: 0;
        margin: 0;
        font-size: 12px;
    }

    .footer_last a {
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div class=" contact-footer ">
    <footer class="footer-section">
        <div class="container-fluid " style=' width: 90%;
    display: block;
    margin: auto;'>
            <div class="footer-cta pt-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">

                            <div class="cta-text">
                                <h4> <i class="fa fa-map-marker"></i> &nbsp;Address</h4>

                            </div>
                        </div>
                        <span STYLE='COLOR:#FFF;'> Main Bazar Bhaba Nagar, Tehsil Nichar District Kinnaur (H.P.) -
                            172115</span>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">

                            <div class="cta-text">
                                <h4> <i class="fa fa-phone "></i> &nbsp;Call us</h4>
                                <span>011-69290719</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-3">
                        <div class="single-cta">

                            <div class="cta-text">
                                <h4> <i class="fa fa-envelope "></i> &nbsp;Email </h4>
                                <span>info@swarnimhimachal24.in</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content  ">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget my-3">
                            <div class="footer-logo">
                                <a href="index.html"><img src="webimg/logo_04142023112146.png" class="img-fluid"
                                        alt="logo"></a>
                            </div>

                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="https://www.facebook.com/Dr.Kulddep?mibextid=ZbWKwL" target="_blank"><i
                                        class="fa fa-facebook-f facebook-bg"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter twitter-bg"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"><i
                                        class="fa fa-instagram google-bg"></i></a>
                                <a href="https://www.youtube.com/@swarnimhimachal6408" target="_blank"><i
                                        class="fa fa-youtube google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget my-3">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="upcoming-event.html">Latest Event</a></li>
                                <li><a href="users-apply-form.html">Member Apply</a></li>
                                <li><a href="donation.html">Donation</a></li>
                                <li><a href="our-team.html">Team&nbsp;Member</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="donars.html">List of Donors</a></li>
                                <li><a href="management-team.html">Management&nbsp;Team</a></li>
                                <li><a href="contact-us.html">Contact&nbsp;Us</a></li>
                                <li><a href="aboutus.html">About&nbsp;Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget my-3">
                            <div class="img_div">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="#">स्वर्णिम हिमाचल जन जागरण समिति -
                                    हिमाचल प्रदेश </a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="term_condition.html">Terms & Condition</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="disclaimer.html">Disclaimer</a></li>
                                <li><a href="refund_policy.html">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- <div class="footer_last">
    <p>Website Designed By - <a href="https://fragron.com/"> Fragron Infotech, Mob. - 7000131032</a></p>
</div> -->
<script src="{theme_url}assets/app4df8.js?v=1733218896"></script>
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
        $.ajax({
            url: "ajax/ajax-timeline-load.php",
            type: "POST",
            success: function (data) {
                $('.timeline_data').html(data);
            }
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
    $('#searchbox').on('input', function () {
        var search_val = $(this).val()
        $.ajax({
            url: "management-team-index-search.php",
            type: "POST",
            data: {
                search_val: search_val
            },
            success: function (data) {
                $('.right-div-data').html(data)
            }
        })
    })
    $('#problem_btn').click(function () {
        window.location.href = "complain-form.html";
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
<script>
    var swiper = new Swiper('.blog-slider', {
        // autoHeight: true,
        pagination: {
            el: '.blog-slider__pagination',
            clickable: true,
        }
    });

    $(document).ready(function () {
    })
    function read_less() {
        var len = $('#pre_content').text().length;
        if (len > 1000) {
            $('#pre_msg').html($('#pre_content').text().substr(0, 1000) + '...' + '<a class="blog-slider__button mt-5" onclick="read_more()" style="cursor:pointer;">READ MORE</a>');
        }
    }
    function read_more() {
        $('#pre_msg').html($('#pre_content').text() + '<a class="blog-slider__button mt-5" onclick="read_less()" style="cursor:pointer;">READ LESS</a>')
    }
    read_less();
</script>
<script type="text/javascript">
    $(document).on('click', '.similar_link', function () {
        var Event_id = $(this).attr('data-id');
        $(`#${Event_id}`).submit();
    })
    $(document).on('click', '.share', function () {
        var url = $(this).attr('data-url');
        $('#clipboard').attr('data-url', url);
        $('#whats_share').attr('href', `whatsapp://send?text=${url}`)
        $('#face_share').attr('href', `https://www.facebook.com/sharer/sharer.php?u=${url}`)
        $('.blur').css('display', 'inherit');
        $('.share_div').css('display', 'inherit');
    });
    $(document).on('click', '#share_close', function () {
        $('.blur').css('display', 'none');
        $('.share_div').css('display', 'none');
    });
    $(document).on('click', '#report_btn a', function () {
        alert('Report success ! We will review it');
    });
    function copyToClipboard(text) {
        var sampleTextarea = document.createElement("textarea");
        document.body.appendChild(sampleTextarea);
        sampleTextarea.value = text; //save main text in it
        sampleTextarea.select(); //select textarea contenrs
        document.execCommand("copy");
        document.body.removeChild(sampleTextarea);
    }
    $(document).on('click', '.clipboard', function () {
        copyToClipboard($(this).attr('data-url'));
        window.alert('Success! The Link was copied to your clipboard');
    })
</script>
</body>

</html>