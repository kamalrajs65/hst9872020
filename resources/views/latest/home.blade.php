@extends('layouts.front')
@section('content')
        <div class="brook-hero-nav-slider-area">
            <div class="brook-element-carousel slick-arrow-center slick-arrow-rounded lr-0"
            data-slick-options='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "infinite": true,
            "dots": false,
            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "ion ion-ios-arrow-back" },
            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "ion ion-ios-arrow-forward" }
        }'
        >

                    <!--Hero Item start-->
                    <div class="hero-item bg-image" data-bg="{{ url('assets/img')}}/home/banner.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">





                                    <!--Hero Content start-->
                                    <div class="hero-content-3 left">
                                        <h3>We're here to level <br> up your online <br> presence.</h3>
                                        <h6>A Creative Agency like no other. </h6>
                                        <a class="brook-btn btn-sd-size space-between btn-essential btn" href="#">Learn More</a>
                                        <div class="video-btn-2">
                                            <a class="play__btn video-btn"  data-toggle="modal" data-src="https://www.youtube.com/watch?v=L7OLY4HCctQ" data-target="#myModal">
                                                <div class="icon-gradient color-pink">
                                                    <div class="video-icon"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!--Hero Content end-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Hero Item end-->
                    <!--Hero Item start-->
                    <div class="hero-item bg-image" data-bg="img/slider/essential/essential2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">

                                    <!--Hero Content start-->
                                    <div class="hero-content-3 left">
                                        <h3>We're here to level <br> up your online <br> presence.</h3>
                                        <h6>A Creative Agency like no other. </h6>
                                        <a class="brook-btn btn-sd-size space-between btn-essential btn" href="#">Learn More</a>
                                    </div>
                                    <!--Hero Content end-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Hero Item end-->

                </div>
        </div>
        <!-- End Hero Nav Slider Area -->
        <!-- Case Studis Area Start -->
        <div class="case-studis-area pt--120 pt-md--80 pt-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brook-section-title text-center mb--45">
                            <h6 class="heading-13 theme-color text-uppercase fw-500">Our case studies</h6>
                            <div class="bkseparator--25"></div>
                            <h2 class="heading-40 fw-200">Our projects make us proud</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Case Studis Area End -->

        <!-- Page Conttent -->
        <main class="page-content">




            <!-- Service Area Start -->
            <div class="service-area bg_color--5 ptb--150 ptb-md--80 ptb-sm--60">
                <div class="container">
                    <div class="row align-content-center">
                        <div class="col-lg-12 col-12">
                            <div class="bk-title--default text-left">
                              <center><p class="orange_font">Services</p></center>
                              <center>  <h3 class="heading-40 fw-200">We serve apps that serve every industry.</h3></center>
                            </div>
                        </div>

                    </div>
                    <div class="row mt--100 mt_md--50 mt_sm--30">
                        <!-- Single SVG Icon Box Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mb_lg--30 mb_md--30 mb_sm--30">
                            <div class="single-svg-icon-box">

                                <div class="inner">
                                  <img src="{{ url('assets/img/home')}}/app_develop_color.png" class="services_icons">
                                    <div class="content">
                                        <h5 class="heading heading-h5">Mobile Applications</h5>
                                        <p>We build apps that are native (Android and iOS) as well as hybrid, for mobile as well as wearables.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single SVG Icon Box End -->
                        <!-- Single SVG Icon Box Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mb_lg--30 mb_md--30 mb_sm--30">
                            <div class="single-svg-icon-box">

                                <div class="inner">
                                    <img src="{{ url('assets/img/home')}}/web_develop_color.png" class="services_icons">
                                    <div class="content">
                                        <h5 class="heading heading-h5"> Web Applications</h5>
                                        <p>Whether it's for CRM or ERP, cloud or workflow management, our web applications are robust and hi-tech.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single SVG Icon Box End -->
                        <!-- Single SVG Icon Box Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-svg-icon-box">

                                <div class="inner">
                                    <img src="{{ url('assets/img/home')}}/ecommerce_color.png" class="services_icons">
                                    <div class="content">
                                        <h5 class="heading heading-h5">E-commerce Solutions</h5>
                                        <p>We help businesses evolve from brick-and-mortar to digital.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single SVG Icon Box End -->
                    </div>

                    <div class="row mt--100 mt_md--50 mt_sm--30">
                        <!-- Single SVG Icon Box Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mb_lg--30 mb_md--30 mb_sm--30">
                            <div class="single-svg-icon-box">

                                <div class="inner">
                                    <img src="{{ url('assets/img/home')}}/ui_ux_color.png" class="services_icons">
                                    <div class="content">
                                        <h5 class="heading heading-h5">Product Design (UI/UX)</h5>
                                        <p>We care about the way you feel while you're using an app, so we design the way it interact with you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single SVG Icon Box End -->
                        <!-- Single SVG Icon Box Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mb_lg--30 mb_md--30 mb_sm--30">
                            <div class="single-svg-icon-box">

                                <div class="inner">
                                    <img src="{{ url('assets/img/home')}}/prototype_color.png" class="services_icons">
                                    <div class="content">
                                        <h5 class="heading heading-h5"> App Prototype & Strategy</h5>
                                        <p>Our enterprise-level websites have to be smarter than the place or platform they play on.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single SVG Icon Box End -->
                        <!-- Single SVG Icon Box Start -->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-svg-icon-box">

                                <div class="inner">
                                    <img src="{{ url('assets/img/home')}}/ondemand_color.png" class="services_icons">
                                    <div class="content">
                                        <h5 class="heading heading-h5">On-demand Apps</h5>
                                        <p>We already have the solutions for your needs. All you need to do is cherry-pick them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single SVG Icon Box End -->
                    </div>


                </div>
            </div>
            <!-- Service Area End -->

            <div class="bk-info-boxes">

                <!-- Start Single Box -->
                <div class="info-grid-box has-image" style="background-image: url('assets/img/home/heyla_product.jpg')">
                    <div class="box-content">
                        <div class="box-content-inner">
                            <div class="box-info">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Box -->

                <!-- Start Single Box -->
                <div class="info-grid-box heyla_blue_box">
                    <div class="box-content">
                        <div class="box-content-inner">
                            <div class="box-info">
                                <h4 class="heading heading-h4 text-white">Heyla</h4>
                                <div class="content mt--25">
                                    <p class="bk_pra">An event booking application to book and conduct events in Singapore.
 </p>
                                </div>
                                <div class="box-btn mt--100 mt_sm--30">
                                  <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="#">Learn
                                      More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Box -->

                <!-- Start Single Box -->
                <div class="info-grid-box has-image" style="background-image: url('assets/img/home/ensyfi_product.jpg')">
                    <div class="box-content">
                        <div class="box-content-inner">
                            <div class="box-info">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Box -->

                <!-- Start Single Box -->
                <div class="info-grid-box ensyfi_blue_box">
                    <div class="box-content">
                        <div class="box-content-inner">
                            <div class="box-info">
                                <h4 class="heading heading-h4 text-white">Ensyfi</h4>
                                <div class="content mt--25">
                                    <p class="bk_pra">A school management application that makes administration simple.</p>
                                </div>
                                <div class="box-btn mt--100 mt_sm--30">
                                    <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="#">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Box -->

            </div>


        </main>
@endsection
