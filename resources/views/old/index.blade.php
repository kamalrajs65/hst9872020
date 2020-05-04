<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Happy Sanz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('assets/img/icon.png') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">


    <link rel="stylesheet" href="{{ url('assets/css/revoulation.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins.css ')}}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/home.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ url('assets/css/custom.css')}} ">

</head>
<style>

</style>
<body class="template-color-19 template-font-4">
  <div id="page-preloader" class="page-loading clearfix">
      <div class="page-load-inner">
          <div class="preloader-wrap">
              <div class="wrap-2">
                  <div class=""> <img src="{{ url('assets/img/icons/loading.gif')}} " alt="Brook Preloader"></div>
              </div>
          </div>
      </div>
  </div>

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <header class="br_header-sidebar">
            <div class="side-header-inner">
                <div class="header-wrap">
                    <div class="header-top">
                        <div class="branding">
                            <a href="{{url('/') }}">
                                <img src="{{ url('assets/img/logo/arrow_green.png')}} " alt="logo images">
                            </a>
                        </div>
                        <!-- Start MEnu -->
                        <div id="popop-open-menu" class="popop-open-menu hamberger-trigger">
                            <div class="menu-icon">
                                <i></i>
                            </div>
                        </div>
                        <!-- End MEnu -->
                    </div>
                    <div class="header-center">
                        <div class="header-social-neworks">
                            <div class="inner">
                                <a href="https://www.facebook.com/happysanztech" target="_blank"><span>Facebook</span></a>
                                <a href="https://twitter.com/happysanztech" target="_blank"><span>Twitter</span></a>
                                <a href="https://www.linkedin.com/company/happysanztech" target="_blank"><span>Instagram</span></a>
                                <a href="https://www.youtube.com/channel/UCZ59wRwBFVFdS2kh-NLpU1A" target="_blank"><span>Youtube</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">

                        <!-- Start Hamberger -->
                        <div class="manu-hamber popup-mobile-click d-block d-xl-none gray-version d-block d-xl-none">
                            <div>
                                <i></i>
                            </div>
                        </div>
                        <!-- End Hamberger -->
                    </div>

                </div>
            </div>
        </header>
        <!--// Header -->

        <!-- Start Hamberger Menu -->
        <div class="open-hamberger-wrapper d-none d-lg-block">
            <div class="page-close light-version"></div>

            <div class="header-default light-logo--version poss_relative">
                <div class="mainmenu-wrapper">
                    <nav class="page_nav">
                        <ul class="mainmenu">

                          <li class="lavel-1  slide--megamenu"><a href="{{ url('/')}}"><span>Home</span></a></li>

                          <li class="lavel-1  slide--megamenu"><a href="{{ url('about')}}"><span>About </span></a></li>

                          <li class="lavel-1  slide-dropdown"><a href="{{ url('process')}}"><span>Process</span></a></li>

                          <li class="lavel-1 slide--megamenu"><a href="{{ url('portfolio')}}"><span>Portfolio</span></a></li>

                          <li class="lavel-1  slide--megamenu"><a href="#"><span>Blog</span></a></li>

                          <li class="lavel-1  slide--megamenu"><a href="{{ url('contact') }}"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div>


            </div>



            <div class="offcanvas-extra-info mt--150">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="bk-hover mb--40">
                                <h5 class="heading heading-h5 text-white">Connect</h5>
                                <div class="bkseparator--20"></div>
                                <p class="bk_pra text-white line-height-1-63"><b>Singapore headquaters</b> <br>No. 28, Bukit Pasoh Road,<br>Singapore 089842.</p>
                                <br>
                                <p class="bk_pra text-white line-height-1-63"><b>India Office</b><br>Building No. 16,<br>MahalakshmiKovil Street,
                                  Masakalipalayam (PO),<br>Uppilipalayam,<br>Tamil Nadu 641015</p>
                                <p class="bk_pra font-16"><a href="#">info@happysanztech.com</a></p>
                            </div>
                            <ul class="social-icon text-left tooltip-layout icon-size-large">
                                <li class="facebook"><a href="https://www.facebook.com/happysanztech" target="_blank" class="link hint--bounce hint--top hint--white"
                                        aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/happysanztech" target="_blank" class="link hint--bounce hint--top hint--white"
                                        aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="instagram"><a href="https://www.linkedin.com/company/happysanztech" target="_blank" class="link hint--bounce hint--top hint--white"
                                        aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li class="twitter"><a href="https://www.youtube.com/channel/UCZ59wRwBFVFdS2kh-NLpU1A" target="_blank" class="link hint--bounce hint--top hint--white"
                                                aria-label="Twitter"><i class="fab fa-youtube"></i></a></li>


                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-right text-right">
                            <!-- <p class="bk_pra font-16">© 2019 Brook. All Rights Reserved.</p> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Hamberger Menu -->

        <!-- Start Popup Menu -->
        <div class="popup-mobile-manu popup-mobile-visiable">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="{{url('/') }}">
                            <img src="{{ url('assets/img/logo/logo.png')}} " alt="Multipurpose">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content">
                    <ul class="menulist object-custom-menu">
                        <li class=""><a href="{{ url('/') }}"><span>Home</span></a></li>
                        <li class=""><a href="{{ url('about') }}"><span>About </span></a></li>
                        <li class=""><a href="{{ url('process') }}"><span>Process</span></a></li>
                        <li class=""><a href="{{ url('portfolio') }}"><span>Portfolio</span></a></li>
                        <li class=""><a href="{{ url('/') }}"><span>Blog</span></a></li>
                        <li class=""><a href="{{ url('contact') }}"><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Popup Menu -->





        <div class="slider-revoluation">
            <div id="rev_slider_7_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-minimal-agency"
                data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
                <div id="rev_slider_7_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">


                  <ul>

                    <li data-index="rs-13" data-transition="parallaxtoright,parallaxtoleft,parallaxtotop,parallaxtobottom"
      data-slotamount="default,default,default,default" data-hideafterloop="0"
      data-hideslideonmobile="off" data-easein="default,default,default,default" data-easeout="default,default,default,default"
      data-masterspeed="default,default,default,default" data-thumb="" data-rotate="0,0,0,0"
      data-saveperformance="off" data-title="Happy Sanz Tech" data-param1="1" data-param2=""
      data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
      data-param9="" data-param10="" data-description="">
      <!-- MAIN IMAGE -->
      <img src="assets/img/revoulation/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff'
          alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
          class="rev-slidebg" data-no-retina>
      <!-- LAYERS -->

      <!-- LAYER NR. 1 -->
      <div class="tp-caption   tp-resizeme" id="slide-13-layer-3" data-x="['center','center','center','center']"
          data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
          data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap"
          data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
          style="z-index: 5;">
          <div class="rs-looped rs-pulse" data-easing="" data-speed="4" data-zoomstart="1.1"
              data-zoomend=".9"><img src="{{ url('assets/img/revoulation/banner_1.jpg')}}"
                  alt="" data-ww="['958px','700px','600px','500px']" data-hh="['883px','645px','553px','461px']"
                  data-no-retina>
          </div>
      </div>

      <!-- LAYER NR. 2 -->
      <div class="tp-caption " id="slide-13-layer-4" data-x="['left','left','left','left']"
          data-hoffset="['260','55','50','50']" data-y="['middle','middle','middle','middle']"
          data-voffset="['-100','-120','-120','-120']" data-width="125" data-height="none"
          data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="off"
          data-responsive="off" data-frames='[{"delay":700,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
          style="z-index: 6; min-width: 125px; max-width: 125px; white-space: nowrap; font-size: 14px;
           line-height: 18px; font-weight: 600; color: #222222; letter-spacing: 1px;text-transform:uppercase;">We promise </div>

      <div class="tp-caption secondary-font" id="slide-13-layer-5" data-x="['left','left','left','left']"
          data-hoffset="['251','50','50','50']" data-y="['middle','middle','middle','middle']"
          data-voffset="['19','40','30','30']" data-fontsize="['150','120','90','60']"
          data-lineheight="['200','160','120','80']" data-width="['1480','700','600','340']"
          data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
          data-responsive_offset="off" data-frames='[{"delay":810,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
          style="z-index: 7; min-width: 1480px; max-width: 1480px; white-space: normal; font-size: 150px; line-height: 200px; font-weight: 700;
          color: #222222; letter-spacing: 0px;">Happiness and Fulfillment
          <mark style="background: transparent; color: #F12C6E;">.</mark> </div>
  </li>
  <li data-index="rs-14" data-transition="curtain-1,curtain-2,curtain-3" data-slotamount="default,default,default"
               data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default,default,default"
               data-easeout="default,default,default" data-masterspeed="default,default,default"
               data-thumb="" data-rotate="0,0,0" data-saveperformance="off" data-title="Application for Mobile and web"
               data-param1="2" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
               data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
               <!-- MAIN IMAGE -->
               <img src="img/revoulation/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff'
                   alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                   class="rev-slidebg" data-no-retina>
               <!-- LAYERS -->

               <!-- LAYER NR. 4 -->
               <div class="tp-caption   tp-resizeme" id="slide-14-layer-3" data-x="['center','center','center','center']"
                   data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                   data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap"
                   data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                   style="z-index: 5;">
                   <div class="rs-looped rs-wave" data-speed="3" data-angle="0" data-radius="10"
                       data-origin="50% 50%"><img src="assets/img/revoulation/banner_2.jpg"
                           alt="" data-ww="['1000px','700px','600px','500px']" data-hh="['897px','645px','553px','461px']"
                           data-no-retina>
                   </div>
               </div>

               <!-- LAYER NR. 5 -->
               <div class="tp-caption  " id="slide-14-layer-4" data-x="['left','left','left','left']"
                   data-hoffset="['260','55','50','50']" data-y="['middle','middle','middle','middle']"
                   data-voffset="['-100','-120','-120','-120']" data-width="125" data-height="none"
                   data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="off"
                   data-responsive="off" data-frames='[{"delay":700,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                   style="z-index: 6; min-width: 125px; max-width: 125px; white-space: nowrap; font-size: 14px;
                   line-height: 18px; font-weight: 600; color: #222222; letter-spacing: 1px;text-transform:uppercase;">We build
                   </div>

               <!-- LAYER NR. 6 -->
               <div class="tp-caption    secondary-font" id="slide-14-layer-5" data-x="['left','left','left','left']"
                   data-hoffset="['251','50','50','50']" data-y="['middle','middle','middle','middle']"
                   data-voffset="['19','40','30','30']" data-fontsize="['150','120','90','60']"
                   data-lineheight="['200','160','120','80']" data-width="['1480','700','600','340']"
                   data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                   data-responsive_offset="off" data-frames='[{"delay":810,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                   style="z-index: 7; min-width: 1480px; max-width: 1480px; white-space: normal; font-size: 150px; line-height: 200px;
                   font-weight: 700; color: #222222; letter-spacing: 0px;">Applications for mobile and web
                   <mark style="background: transparent; color: #F12C6E;">.</mark> </div>
           </li>





                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>

        </div>

        <!-- Page Conttent -->
        <main class="page-content ml--100 ml_lg--0 ml_md--0 ml_sm--0">

            <!-- Start About Area -->
            <div class="brook-about-area bg_image--26 ptb--130 ptb-md--80 ptb-sm--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-content text-center wow move-up">

                                <h3 class="heading heading-h3 move-up theme-color wow animate" style="opacity: 0; visibility: visible;">ABOUT US</h3>
                                <div class="bkseparator--10"></div>
                                <h2 class="heading heading-h2 playfair-font line-height-1-62 font-400">We are a product-based technology company <br>
                                  based in Coimbatore that builds impeccable<br> mobile and web applications.</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Area -->


              <div class="brook-portfolio-area pb--100 pb_md--80 pb_sm--60 bg_color--1 bk-masonary-wrapper">
                <div class="container-fluid port_section">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="portfolio portfolio_style--1 portfolio-25 grid-width-2 cat--1 cat--4 wow move-up ">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/nativeapp.jpg') }} " alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info with-caption position-left font-playfair">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Native Applications</a></h3>
                                    <div class="category">Built specifically using native tools.</div>
                                </div>
                            </div>
                        </div>
                    </div></div>
                  <div class="col-lg-6 col-md-12 col-sm-12 res_img">
                    <div class="portfolio portfolio_style--1 portfolio-25 grid-width-2 cat--2 cat--4 wow move-up ">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/hybridapp.jpg')}} " alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info with-caption position-left font-playfair">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Hybrid Applications</a></h3>
                                    <div class="category"> Web technology encapsulated in native app.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row more_gap">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="portfolio portfolio_style--1 portfolio-25 cat--1 cat--3 wow move-up front_img">
                            <div class="poss_relative">
                                <div class="thumb">
                                    <img src="{{ url('assets/img/android.jpg')}} " alt="Portfolio Images">
                                </div>
                                <div class="port-overlay-info with-caption position-left font-playfair">
                                    <div class="hover-action">
                                        <h3 class="post-overlay-title"><a href="#">Android</a></h3>

                                    </div>
                                </div>
                            </div>
                        </div>

                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 res_img">
                        <div class="portfolio portfolio_style--1 portfolio-25 cat--2 cat--3 cat--4 wow move-up front_img">
                            <div class="poss_relative">
                                <div class="thumb">
                                    <img src="{{ url('assets/img/ios.jpg') }} " alt="Portfolio Images">
                                </div>
                                <div class="port-overlay-info with-caption position-left font-playfair">
                                    <div class="hover-action">
                                        <h3 class="post-overlay-title"><a href="#">iOS</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      </div>

                    </div>




                </div>
              </div>

              <div class="container-fluid port_section">
              <div class="row">
                <div class="col-lg-6">
                  <div class="portfolio portfolio_style--1 portfolio-25 grid-width-2 cat--1 wow move-up ">
                      <div class="poss_relative">
                          <div class="thumb">
                              <img src="{{ url('assets/img/ensyfi.jpg') }} " alt="Portfolio Images">
                          </div>
                          <div class="port-overlay-info with-caption position-left font-playfair">
                              <div class="hover-action">
                                  <h3 class="post-overlay-title"><a href="#">Ensyfi</a></h3>
                                  <div class="category">A school management application that makes the administration simple.</div>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-lg-12  res_img">
                      <div class="portfolio portfolio_style--1 portfolio-25 grid-width-2 cat--3 wow move-up heyla_front_img">
                          <div class="poss_relative">
                              <div class="thumb">
                                  <img src="{{  url('assets/img/heyla.jpg')}} " alt="Portfolio Images">
                              </div>
                              <div class="port-overlay-info with-caption position-left font-playfair">
                                  <div class="hover-action">
                                      <h3 class="post-overlay-title"><a href="#">Heyla</a></h3>
                                      <div class="category">An event booking application to book and conduct events happening in Singapore.</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-12 more_gap_2">
                      <div class="portfolio portfolio_style--1 portfolio-25 grid-width-2 cat--3 wow move-up m3_front_img">
                          <div class="poss_relative">
                              <div class="thumb">
                                  <img src="{{ url('assets/img/m3.jpg') }} " alt="Portfolio Images">
                              </div>
                              <div class="port-overlay-info with-caption position-left font-playfair">
                                  <div class="hover-action">
                                      <h3 class="post-overlay-title"><a href="#">M3</a></h3>
                                      <div class="category">Application for effective management of reaching to people in government initiatives.</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              </div>
              </div>



            <div class="bk-brand-area bg_color--1 pb--150 pb_md--80 pb_sm--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-wrapper">
                                <div class="brand__list brand-default brand-style--2 no-border">

                                    <div class="brand" data-wow-delay=".13s"><a href="#"><img src="{{ url('assets/img/client/rmd.png')}}"></a></div>
                                    <div class="brand" data-wow-delay=".13s"><a href="#"><img src="{{ url('assets/img/client/ener_you.png')}}"></a></div>
                                    <div class="brand" data-wow-delay=".13s"><a href="#"><img src="{{ url('assets/img/client/skilex.png')}}"></a></div>
                                    <div class="brand" data-wow-delay=".13s"><a href="#"><img src="{{ url('assets/img/client/vision.png')}}"></a></div>
                                    <div class="brand" data-wow-delay=".13s"><a href="#"><img src="{{ url('assets/img/client/lamore.png')}}"></a></div>
                                    <div class="brand" data-wow-delay=".13s"><a href="#"><img src="{{ url('assets/img/client/acedata.png')}}"></a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand Area -->


              <footer id="bk-footer-area" class="page-footer bg_color--3 pl--100 pr--150 pl_lp--40 pr_lp--40 pl_lg--30 pr_lg--30 pl_md--30 pr_md--30 pl_sm--20 pr_sm--20 pl_mobile--20 pr_mobile--20">
                  <div class="bk-footer-inner pt--30 pb--0 pt_sm--80 pb_sm--40 pt_md--80 pb_md--40">
                      <div class="row">
                          <div class="col-lg-6 col-xl-6">
                              <div class="bk-footer-widget">
                                  <h2 class="heading heading-h2 text-white line-height-1-39">Start working
                                      on a <br> new project?</h2>

                              </div>
                              <br>
                              <a class="brook-btn bk-btn-white text-theme btn-sd-size btn-rounded" href="{{ url('quote')}}">Get a Quote</a>


                          </div>

                          <div class="col-lg-6 col-xl-5 offset-xl-1">
                              <div class="bk-footer-widget menu--contact mt_md--30 mt_sm--30">
                                  <h4 class="heading heading-h4 text-white line-height-1-2">Contact us</h4>
                                  <div class="bkseparator--35"></div>
                                  <div class="footer-address">
                                      <div class="row">
                                          <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                              <p class="bk_pra text-white line-height-1-63"><b>Singapore headquaters</b> <br>No. 28, Bukit Pasoh Road,<br>Singapore 089842.</p>
                                              <br>
                                              <p class="bk_pra text-white line-height-1-63"><b>India Office</b><br>Building No. 16,<br>MahalakshmiKovil Street,
                                                Masakalipalayam (PO),<br>Uppilipalayam,<br>Tamil Nadu 641015</p>

                                              <div class="social-share social--transparent text-white mt--45">
                                                  <a href="https://www.facebook.com/happysanztech" target="_blank"><i class="fab fa-facebook"></i></a>
                                                  <a href="https://twitter.com/happysanztech" target="_blank"><i class="fab fa-twitter"></i></a>
                                                  <a href="https://www.linkedin.com/company/happysanztech" target="_blank"><i class="fab fa-instagram"></i></a>
                                                  <a href="https://www.youtube.com/channel/UCZ59wRwBFVFdS2kh-NLpU1A" target="_blank"><i class="fab fa-youtube"></i></a>

                                              </div>
                                          </div>
                                          <div class="col-lg-5 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                              <p class="bk_pra line-height-1-63 bk-hover"><a class="text-white" href="#">hello@happysanztech.com</a></p>
                                              <p class="bk_pra line-height-1-63 bk-hover"><a class="text-white" href="#">(+68)-9887-2345</a></p>
                                              <p class="bk_pra line-height-1-63 bk-hover"><a class="text-white" href="#">(+91)-422-257-5551</a></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="copyright ptb--50">
                      <div class="row align-items-center">
                          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="copyright-left text-md-left text-center">
                                  <ul class="bk-copyright-menu d-flex bk-hover justify-content-center justify-content-md-start flex-wrap flex-sm-nowrap">
                                      <li><a href="#">Our blog</a></li>
                                      <li><a href="#">Careers</a></li>
                                      <li><a href="{{ url('contact')}}">Contact us</a></li>
                                  </ul>
                              </div>
                          </div>

                      </div>
                  </div>
              </footer>



        </main>
        <!--// Page Conttent -->
    </div>

    <!--// Wrapper -->

    <!-- Js Files -->
    <script src="{{ url('assets/js/vendor/modernizr-3.6.0.min.js')}} "></script>
    <script src="{{ url('assets/js/vendor/jquery.min.js')}} "></script>
    <script src="{{ url('assets/js/popper.min.js')}} "></script>
    <script src="{{ url('assets/js/bootstrap.min.js')}} "></script>
    <script src="{{ url('assets/js/plugins.js')}} "></script>
    <script src="{{ url('assets/js/main.js')}} "></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ url('assets/js/jquery.themepunch.tools.min.js')}} "></script>
    <script src="{{ url('assets/js/jquery.themepunch.revolution.min.js')}} "></script>

    <script src="{{ url('assets/js/revolution.extension.actions.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.carousel.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.kenburn.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.layeranimation.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.migration.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.navigation.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.parallax.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.slideanims.min.js')}} "></script>
    <script src="{{ url('assets/js/revolution.extension.video.min.js')}} "></script>
    <script src="{{ url('assets/js/revoulation.js')}} "></script>

</body>


</html>
