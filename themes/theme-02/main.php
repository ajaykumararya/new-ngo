<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <!-- <div class="preloader">
            <div class="icon"></div>
        </div> -->

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo">
                                <a href="">
                                    <img src="{base_url}upload/{logo}" width="200" height="200" alt="{title}"
                                        title="{title}" /></a>
                            </div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">

                                    <?php
                                    function get_menu($items, $class = '', $liClass = '', $linkClass = '', $boxID = '')
                                    {
                                        $html = "<ul class=\"" . $class . "\" id=\"" . $boxID . "\">";
                                        foreach ($items as $key => $value) {
                                            $activeCss = $value['isActive'] ? 'active' : ''; //getActiveMenu($value['page_id'],'active');
                                            $link = $value['link'];

                                            $iconWithTExt = $value['label'];

                                            if (array_key_exists('child', $value))

                                                $html .= '<li class="' . $activeCss . ' dropdown"><a href="#" ' . $value['target'] . ' class="menu-css ' . $linkClass . '" >' . $iconWithTExt . '</a>';
                                            else

                                                $html .= '<li class="' . $activeCss . '"><a href="' . $link . '" ' . $value['target'] . ' >' . $iconWithTExt . '</a>';

                                            if (array_key_exists('child', $value)) {
                                                // $html .= '<div class="dropdown-menu">';
                                                $html .= get_menu($value['child']);
                                                // $html .= '</div>';
                                            }
                                            $html .= "</li>";
                                        }
                                        $html .= "</ul>";
                                        return $html;
                                    }
                                    echo get_menu($menus, 'navigation clearfix');
                                    ?>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="{base_url}" title="">
                            <img src="{base_url}upload/{logo}" alt="{title}" style="width:182px"
                                title="{title}"></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="images/logo_final.jpg" width="200" height="200"
                                alt="Adbhut Foundation" title="Adbhut Foundation" /></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">

                            <li><a href="https://www.facebook.com/adbhutfoundation04" target="_blank"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a href="https://www.instagram.com/adbhut_foundation04" target="_blank"><span
                                        class="fab fa-instagram"></span></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=918827403046" target="_blank"><span
                                        class="fab fa-whatsapp"></span></a></li>

                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->
        </header>
        <!-- End Main Header -->
        {output}

        <!-- <section class="call-to-action">
            <div class="image-layer" style="background-image:url('images/background/bg-pattern-1.png')"></div>

            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                        <h2>Become a vital part of Adbhut Foundation & make a real difference to lives of many!</h2>
                    </div>
                    <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                        <div class="link-box">
                            <a href="volunteers.html" class="theme-btn btn-style-two"><span class="btn-title">join to
                                    Volunteer</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="image-layer"></div>

            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <div class="big-column col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <!--Column-->
                                <div class="column col-lg-4 col-md-12 col-sm-12">
                                    <div class="footer-widget info-widget">
                                        <div class="widget-content">
                                            <h3>Address</h3>
                                            <ul class="contact-info">
                                                <li>{address}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="column col-lg-4 col-md-12 col-sm-12">
                                    <div class="footer-widget info-widget">
                                        <div class="widget-content">
                                            <h3>Contact Us</h3>
                                            <ul class="contact-info">
                                                <li><a href="tel:{number}">
                                                        <span lass="fa fa-phone-alt">

                                                        </span>{number}</a>
                                                </li>
                                                <li>
                                                    <a href="mailto:{email}">
                                                        <span class="fa fa-envelope-open"></span>
                                                        {email}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="column col-lg-4 col-md-12 col-sm-12">
                                    <div class="footer-widget info-widget">
                                        <div class="widget-content">
                                            <h3><?= ES('footer_first_text') ?></h3>
                                            <ul class="contact-info">
                                                <?php
                                                foreach ($this->ki_theme->config('footer_first_links') as $linkRow) {
                                                    echo '<li><a href="' . $linkRow->link . '">' . $linkRow->title . '</a></li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->

                            </div>

                        </div>
                        <div class="big-column col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="column col-lg-4 col-md-12 col-sm-12">
                                </div>
                                <div class="column col-lg-4 col-md-12 col-sm-12">
                                    <ul class="social-links clearfix">
                                        <li><a href="{facebook}" class="" target="_blank"><i
                                                    class="fa fab fa-facebook facebook-bg"></i></a></li>
                                        <li><a href="{twitter}" class="" target="_blank"><i
                                                    class="fa fab fa-twitter twitter-bg"></i></a></li>
                                        <li><a href="{youtube}" class=""><i class="fa fab fa-youtube google-bg"></i></a>
                                        </li>
                                        <li><a href="{linkedin}" class=""><i
                                                    class="fa fab fa-linkedin twitter-bg"></i></a></li>
                                        <li><a href="{instagram}" class=""><i
                                                    class="fa fab fa-instagram google-bg"></i></a></li>

                                    </ul>
                                </div>
                                <div class="column col-lg-4 col-md-12 col-sm-12"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner">
                        <!--Copyright-->
                        <div class="copyright">Copyrights (c) 2025 <a href="#">{title}</a> All rights reserved.</div>
                    </div>
                </div>
            </div>

        </footer>


    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

    <!-- <script defer src="{theme_url}assets/js/jquery.js"></script> -->
    <script defer src="{theme_url}assets/js/popper.min.js"></script>
    <script defer src="{theme_url}assets/js/bootstrap.min.js"></script>
    <script defer src="{theme_url}assets/js/jquery-ui.js"></script>
    <script defer src="{theme_url}assets/js/jquery.fancybox.js"></script>
    <script defer src="{theme_url}assets/js/owl.js"></script>
    <script defer src="{theme_url}assets/js/appear.js"></script>
    <script defer src="{theme_url}assets/js/wow.js"></script>
    <script defer src="{theme_url}assets/js/scrollbar.js"></script>
    <script defer src="{theme_url}assets/js/validate.js"></script>
    <script defer src="{theme_url}assets/js/paroller.js"></script>
    <script defer src="{theme_url}assets/js/custom-script.js"></script>

</body>

</html>