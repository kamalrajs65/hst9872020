<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Happy Sanz Tech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/icon.png">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{ url('assets/css/revoulation.css') }} ">
    <link rel="stylesheet" href="{{ url('assets/css/plugins.css') }} ">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ url('assets/style.css') }} ">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }} ">
    <script src="{{ url('assets/js/vendor/modernizr-3.6.0.min.js') }} "></script>
    <script src="{{ url('assets/js/vendor/jquery.min.js') }} "></script>
    <script src="{{ url('assets/js/popper.min.js') }} "></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }} "></script>

</head>

<body class="template-color-1 template-font-1">

    <div id="page-preloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                    <div class=""> <img src="{{ url('assets/img/icons/loading.gif')}} " alt="Brook Preloader"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PReloader -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <header class="br_header header-default header-transparent position-from--top light-logo--version haeder-fixed-width headroom--sticky header-mega-menu clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__wrapper mr--0">
                            <!-- Header Left -->
                            <div class="header-left">
                                <div class="logo">
                                      <a href="{{ url('/') }}">
                                        <img src="{{ url('assets/img/logo/logo.png')}} " alt="Multipurpose">
                                    </a>
                                </div>
                            </div>
                            <!-- Mainmenu Wrap -->
                            <div class="mainmenu-wrapper d-none d-lg-block">
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
                            <!-- Header Right -->
                            <div class="manu-hamber popup-mobile-click d-block d-lg-none light-version d-block d-xl-none">
                                   <div>
                                       <i></i>
                                   </div>
                               </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!--// Header -->

        <!-- Start Popup Menu -->
        <div class="popup-mobile-manu popup-mobile-visiable">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ url('asset/img/logo/logo.png')}} " alt="Multipurpose">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content">
                    <ul class="menulist object-custom-menu">
                      <l  <li class=""><a href="{{ url('/') }}"><span>Home</span></a></li>
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

        <!-- Start Brook Search Popup -->
        <div class="brook-search-popup">
            <div class="inner">
                <div class="search-header">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ url('asset/img/logo/arrow_green.png')}} " alt="Multipurpose">
                        </a>
                    </div>
                    <a href="#" class="search-close"></a>
                </div>
                <div class="search-content">
                    <form action="#">
                        <label>
                            <input type="search" placeholder="Enter search keyword…">
                        </label>
                        <button class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
  @yield('content')

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




  <script src="{{ url('assets/js/plugins.js') }} "></script>
  <script src="{{ url('assets/js/main.js') }} "></script>
  <!-- REVOLUTION JS FILES -->
  <script src="{{ url('assets/js/jquery.themepunch.tools.min.js') }} "></script>
  <script src="{{ url('assets/js/jquery.themepunch.revolution.min.js') }} "></script>

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
