
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HST</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/icon.png">
    <link rel="stylesheet" href="{{ url('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('assets')}}/css/revoulation.css">
    <link rel="stylesheet" href="{{ url('assets')}}/css/plugins.css">
    <link rel="stylesheet" href="{{ url('assets')}}/style.css">
    <link rel="stylesheet" href="{{ url('assets')}}/extra.css">
    <link rel="stylesheet" href="{{ url('assets')}}/theme.css">
    <link rel="stylesheet" href="{{ url('assets')}}/css/custom.css">
    <script   src="{{ url('assets')}}/js/jquery.js" ></script>
    <script src="{{ url('assets')}}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ url('assets')}}/js/vendor/jquery.min.js"></script>
    <script src="{{ url('assets')}}/js/popper.min.js"></script>
    <script src="{{ url('assets')}}/js/bootstrap.min.js"></script>
    <style>
    .mainmenu-wrapper .page_nav ul.mainmenu{
    justify-content:flex-end;
    }
    .quote_btn{
      background-color: #f8981d;
      padding-top: 15px !important;
      padding-bottom: 15px !important;
      color: #fff !important;
    }
    </style>
</head>
<body class="template-color-23 template-font-7 CerebriSans-font">
    <!-- <div id="page-preloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                    <div class=""> <img src="{{ url('assets')}}/img/icons/brook-preloader.gif" alt="Brook Preloader"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Preloader  -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        <!-- Header -->
        <header class="br_header header-default bg_color--23 border-bottom black-logo--version haeder-fixed-width haeder-fixed-150 headroom--sticky header-mega-menu clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__wrapper mr--0">
                            <!-- Header Left -->
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ url('/')}}">
                                        <img src="{{ url('assets')}}/img/logo/logo.png" alt="Brook Images">
                                    </a>
                                </div>
                            </div>
                            <!-- Mainmenu Wrap -->
                            <div class="mainmenu-wrapper d-none d-lg-block">
                                <nav class="page_nav">
                                    <ul class="mainmenu">
                                        <li class="lavel-1  slide--megamenu"><a href="{{ url('/')}}"><span>Home</span></a></li>
                                        <li class="lavel-1 with--drop slide-dropdown"><a href="#"><span>Why HST</span></a>
                                            <ul class="dropdown__menu">
                                                <li><a href="{{ url('about-us')}}"><span>About Us</span></a></li>
                                                <li><a href="{{ url('our-team')}}"><span>Our Team</span></a></li>
                                                <li><a href="{{ url('process')}}"><span>Our Process</span></a></li>
                                                <li><a href="{{ url('quality_assurance')}}"><span>Quality Assurance</span></a></li>
                                                <li><a href="{{ url('reviews')}}"><span>Reviews</span></a></li>
                                                <li><a href="{{ url('ourworks')}}"><span>Our Works</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="lavel-1 "><a href="{{ url('services')}}"><span>Services</span></a>
                                            <!-- <ul class="dropdown__menu">
                                                <li><a href="{{ url('services')}}"><span>Our Services</span></a></li>
                                                <li><a href="{{ url('service_mobile_app')}}"><span>Mobile app</span></a></li>
                                                <li><a href="{{ url('service_android_app')}}"><span>Android app</span></a></li>
                                                <li><a href="{{ url('service_ios_app')}}"><span>iOS app</span></a></li>
                                                <li><a href="{{ url('service_hybrid_app')}}"><span>Hybrid app</span></a></li>
                                                <li><a href="{{ url('service_wearable_app')}}"><span>Wearable app</span></a></li>
                                                <li><a href="{{ url('service_web_development')}}"><span>Web Development</span></a></li>
                                                <li><a href="{{ url('service_ecommerce_app')}}"><span>Ecommerce Development</span></a></li>
                                                <li><a href="{{ url('service_ui_ux')}}"><span>UI-UX Development</span></a></li>
                                                <li><a href="{{ url('service_prototype')}}"><span>App Prototype</span></a></li>
                                                <li><a href="{{ url('service_ondemand')}}"><span>On demand</span></a></li>
                                                <li><a href="{{ url('industry_we_serve')}}"><span>Industry We Serve</span></a></li>
                                                <li><a href="{{ url('consultancy_service')}}"><span>Consultancy Service</span></a></li>
                                                <li><a href="{{ url('software_maintainence')}}"><span>Software Maintenance</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="lavel-1 {{ url('assets')}}/ slide--megamenu"><a href="#"><span>Estimator</span></a></li>
                                        <li class="lavel-1 {{ url('assets')}}/ slide--megamenu"><a href="#"><span>Blog</span></a></li>

                                          <li class="lavel-1 {{ url('assets')}}/ slide--megamenu">
                                            <a href="#" class="quote_btn" data-toggle="modal"  data-target="#Quote_model"><span>Request a Quote</span></a></li>
                                    </ul>
                                </nav>


                            </div>
                            <!-- Header Right -->
                            <div class="header-left">
                                <!-- Start Minicart -->
                                <div class="mini-cart">
                                    <div id="minicart-trigger" class="minicart-trigger mini-cart-button" data-count="3">
                                        <button><i class="fa fa-phone-square fa-2x"></i></button>
                                    </div>
                                    <div class="shopping-cart cart-box">
                                        <div class="shop-inner">
                                            <div class="header">
                                                <ul class="product-list">
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Minicart -->

                                <!-- Start Hamberger -->
                                <div class="manu-hamber popup-mobile-click d-block d-lg-none black-version d-block d-xl-none">
                                    <div>
                                        <i></i>
                                    </div>
                                </div>
                                <!-- End Hamberger -->
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
                        <a href="{{ url('/')}}">
                            <img src="{{ url('assets')}}/img/logo/logo.png" alt="Multipurpose">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content">
                    <ul class="menulist object-custom-menu">
                        <li class=""><a href="{{ url('/')}}"><span>Home</span></a></li>
                        <li class="has-mega-menu"><a href="#"><span>Why HST</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                              <li><a href="{{ url('about-us')}}"><span>About Us</span></a></li>
                              <li><a href="{{ url('our-team')}}"><span>Our Team</span></a></li>
                              <li><a href="{{ url('process')}}"><span>Our Process</span></a></li>
                              <li><a href="{{ url('quality_assurance')}}"><span>Quality Assurance</span></a></li>
                              <li><a href="{{ url('reviews')}}"><span>Reviews</span></a></li>
                              <li><a href="{{ url('ourworks')}}"><span>Our Works</span></a></li>
                            </ul>
                        </li>

                        <li class="has-mega-menu"><a href="{{ url('services')}}"><span>Services</span></a>
                            <!-- Start Dropdown Menu -->
                            <ul class="object-submenu">
                              <li><a href="{{ url('services')}}"><span>Our Services</span></a></li>
                              <li><a href="{{ url('service_mobile_app')}}"><span>Mobile app</span></a></li>
                              <li><a href="{{ url('service_android_app')}}"><span>Android app</span></a></li>
                              <li><a href="{{ url('service_ios_app')}}"><span>iOS app</span></a></li>
                              <li><a href="{{ url('service_hybrid_app')}}"><span>Hybrid app</span></a></li>
                              <li><a href="{{ url('service_wearable_app')}}"><span>Wearable app</span></a></li>
                              <li><a href="{{ url('service_web_development')}}"><span>Web Development</span></a></li>
                              <li><a href="{{ url('service_ecommerce_app')}}"><span>Ecommerce Development</span></a></li>
                              <li><a href="{{ url('service_ui_ux')}}"><span>UI-UX Development</span></a></li>
                              <li><a href="{{ url('service_prototype')}}"><span>App Prototype</span></a></li>
                              <li><a href="{{ url('service_ondemand')}}"><span>On demand</span></a></li>
                              <li><a href="{{ url('industry_we_serve')}}"><span>Industry We Serve</span></a></li>
                              <li><a href="{{ url('consultancy_service')}}"><span>Consultancy Service</span></a></li>
                              <li><a href="{{ url('software_maintainence')}}"><span>Software Maintenance</span></a></li>
                            </ul>
                        </li>
                          <li class=""><a href="#"><span>Estimator</span></a></li>
                          <li class=""><a href="#"><span>Blog</span></a></li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- End Popup Menu -->

        <!-- Start Toolbar -->
        <div class="demo-option-container">
            <!-- Start Toolbar -->
            <!-- <div class="brook__toolbar">
                <div class="inner">
                    <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#"
                        aria-label="Quick Options">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/"
                        aria-label="Support Center">
                        <i class="fa fa-life-ring"></i>
                    </a>
                    <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://themeforest.net/item/brook-creative-agency-business-html-template/24226512?s_rank=5"
                        aria-label="Purchase Brook">
                        <i class="fa fa-shopping-cart"></i>
                    </a>
                </div>
            </div> -->
            <!-- End Toolbar -->
            <!-- Start Quick Link -->
            <!-- <div class="demo-option-wrapper">
                <div class="demo-panel-header">
                    <div class="panel-btn">
                        <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between" href="https://themeforest.net/item/brook-creative-agency-business-html-template/24226512?s_rank=1"><i
                                class="ion-android-cart"></i> Buy Brook Now </a>
                    </div>
                    <div class="title">
                        <h5 class="heading heading-h5"> Brook – Creative Multipurpose Html5 Template</h5>
                        <div class="desc">
                            <p class="bk_pra"> Brook embraces a modern look with various enhanced shortcodes, premium
                                plugins and pre-defined page elements.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Quick Link -->
        </div>
          @yield('content')

        <footer id="bk-footer" class="page-footer essential-footer bg_color--3 pl--150 pr--150 pl_lg--30 pr_lg--30 pl_md--30 pr_md--30 pl_sm--5 pr_sm--5">
            <!-- Start Footer Top Area -->
            <div class="bk-footer-inner ptb--50 pt_sm--100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget text-var--2">
                                <h2 class="widgettitle">Singapore</h2>
                                <div class="footer-inner">
                                    <p>#28 Bukit pasoh road <br>Singapore  089842</p>
                                    <p>+65 9887 2345</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget text-var--2">
                                <h2 class="widgettitle">India</h2>
                                <div class="footer-inner">
                                    <p style=""># 16, Mahalakshmi kovil street,<br>
                                        Masakalipalayam,<br>
                                        Uppilipalayam (po),<br>
                                        Coimbatore - 641015<br>
                                        Tamil Nadu</p>
                                        <p>+91 9488 03 1919</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 col-12 mt_md--40 mt_sm--40 mt_mobile--40">
                            <div class="footer-widget text-var--2 menu--about">
                                <h2 class="widgettitle">Other links</h2>
                                <div class="footer-menu">
                                    <ul class="ft-menu-list bk-hover">
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Team</a></li>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="">Services</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-4 col-12 mt_md--40 mt_md--40 mt_sm--40">
                            <div class="footer-widget text-var--2 menu--instagram">
                                <h2 class="widgettitle">Newsletter Signup</h2>
                                <form action="" method="post">
                                  <div class="">
                                        <input type="email" name="register-form-password" class="sucsbribe_input_box" id="register-form-password">
                                    </div>
                                    <br>
                                    <div class="">
                                          <input type="submit" value="Subscribe">
                                      </div>

                                </form>
                                <br>
                                <h2 class="widgettitle">Social</h2>

                                <div class="social-share social--transparent text-white padding-10">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Start Footer Top Area -->
        </footer>
        <!--// Footer -->
      </div>
      <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body youtube_modal_body">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"  id="video"  allowscriptaccess="always" allow="autoplay" src="https://www.youtube.com/embed/L7OLY4HCctQ"></iframe>
      </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="Quote_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header no_padding">
          <h5 class="modal-title text-center quote_title">Get Quote</h5>

      </div>
      <div class="modal-body">
        <div class="row quote_head_title">
          <p>Not only our apps are reliable but also our words. Tell us about you and your requirements, and we will get back to you within a couple of days with a perfect quote.</p>
        </div>
        <div class="row heading_center">
          <h2>Introduce Yourself</h2>
        </div>
        <div class="form-group row ">
          <div class="col-6">
              <label  class="col-form-label-md "></label>
              <div class="input-group">
                  <input  name="" id="" type="text" class="form-control no_border_bottom " placeholder="Your Name">
              </div>
          </div>
          <div class="col-6">
              <label  class="col-form-label-md "></label>
              <div class="input-group">
                  <input  name="" id="" type="text" class="form-control no_border_bottom " placeholder="Select the country">
              </div>
          </div>

          <div class="col-6">
              <label  class="col-form-label-md "></label>
              <div class="input-group">
                  <input  name="" id="" type="text" class="form-control no_border_bottom " placeholder="Your Email ID">
              </div>
          </div>
          <div class="col-6">
              <label  class="col-form-label-md "></label>
              <div class="input-group">
                  <input  name="" id="" type="text" class="form-control no_border_bottom " placeholder="Your Phone Number">
              </div>
          </div>

        </div>
        <div class="row heading_center">
          <h2>Your Requirements</h2>
        </div>
        <div class="form-group row ">
            <div class="col-12 mb--20">
            <label  class="col-form-label-md ">Tell us what are you looking for?</label>
            <div class="row">
            <div class="col-4">
              <div class="check-box">
                  <input type="checkbox" id="">
                  <label for="">Mobile Application</label>
              </div>
              <div class="check-box">
                  <input type="checkbox" id="" data-shipping="">
                  <label for="">Web Application</label>
              </div>
            </div>
            <div class="col-4">
              <div class="check-box">
                  <input type="checkbox" id="">
                  <label for="">e-Commerce Application</label>
              </div>
              <div class="check-box">
                  <input type="checkbox" id="" data-shipping="">
                  <label for="">Product Design (UX/UI)</label>
              </div>
            </div>
            <div class="col-4">
              <div class="check-box">
                  <input type="checkbox" id="">
                  <label for="">App Prototype</label>
              </div>
              <div class="check-box">
                  <input type="checkbox" id="" data-shipping="">
                  <label for="">On-demand Application</label>
              </div>
            </div>
              </div>
            </div>

        </div>
        <div class="form-group row ">
          <div class="col-12">
              <label  class="col-form-label-md "></label>
              <div class="input-group">
                  <input  name="" id="" type="text" class="form-control no_border_bottom " placeholder="Give a brief about your project.">
              </div>
          </div>
          <div class="col-6">
              <label  class="col-form-label-md "></label>
              <div class="input-group">
                  <input  name="" id="" type="text" class="form-control no_border_bottom " placeholder="Please mention your budget.">
              </div>
          </div>
          <div class="col-6">
              <label  class="col-form-label-md "></label>
              <div class="input-group">
                  <input  name="" id="" type="text" class="form-control no_border_bottom " placeholder="When do you want to get started?">
              </div>
          </div>
          <div class="col-12">
            <label  class="col-form-label-md "></label>
            <center>
                  <input type="submit" class="btn btn_theme" name="Submit">
              </center>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>


      <script src="{{ url('assets')}}/js/plugins.js"></script>
      <script src="{{ url('assets')}}/js/main.js"></script>
      <script src="{{ url('assets')}}/js/jquery.themepunch.tools.min.js"></script>
      <script src="{{ url('assets')}}/js/jquery.themepunch.revolution.min.js"></script>


      <script>


// when the modal is opened autoplay it
$('#myModal').on('shown.bs.modal', function (e) {

});





      </script>

      </body>
      </html>
