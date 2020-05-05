@extends('layouts.front')
@section('content')
        <main class="page-content">
          <div class="brook-video-area bg_color--1 pb--130 pb_md--80 pb_sm--60 bg-as-text ptb--40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="video-with-thumb text-center move-up wow animate" style="visibility: visible; opacity: 0;">
                                <div class="thumb">
                                    <img src="{{ url('assets/img/about/about_img.png')}}" alt="video images">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 mt_md--40 mt_sm--40">
                            <div class="video-content move-up wow animate" style="visibility: visible; opacity: 0;">
                                <h3 class="heading heading-h3 line-height-1-42">We design and build applications that are scalable, compatible, and powerful.</h3>
                                <div class="bkseparator--25"></div>
                                <p class="bk_pra">Ours is a company that has committed itself to help businesses and organizations achieve their visions by providing them cutting-edge technological solutions.<br>To put it simply, we don't just build applications. We build opportunities your business can thrive on.</p>
                                <div class="bkseparator--40"></div>
                                <a class="moredetails-btn yellow-color-2" href="#"><span>More details</span> <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Box Area Start -->
            <div class="brook-icon-boxes-area ptb--50">
                <div class="container">
                    <div class="row">
                        <!-- Single Icon Box Start -->
                        <div class="col-lg-2 col-md-2 col-sm-6">

                        </div>
                        <!-- Single Icon Box End -->
                        <!-- Single Icon Box Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="icon-box text-center no-border bg-transparant vibrate-style">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ url('assets')}}/img/about/mission.png" class="img-responsive">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading heading-h5"> Our Mission</h5>
                                        <p>We work with a mission to deliver disruptive applications for mobile, web, and wearables that drive the growth of every business in every industry, ultimately leading to success and fulfillment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Icon Box End -->
                        <!-- Single Icon Box Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="icon-box text-center no-border bg-transparant vibrate-style">
                                <div class="inner">
                                    <div class="icon">
                                      <img src="{{ url('assets')}}/img/about/vision.png" class="img-responsive">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading heading-h5">Our Vision</h5>
                                        <p>To reach the frontiers of technologies including mobile, web, automation, and cloud and harness their power to help businesses, whether those are sprouting acorns or mighty oaks, grow and achieve their goals as envisaged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Icon Box End -->
                        <!-- Single Icon Box Start -->
                        <div class="col-lg-2 col-md-2 col-sm-6">

                        </div>
                        <!-- Single Icon Box End -->
                    </div>
                </div>
            </div>
            <!-- Icon Box Area End -->
            <div class="service-area bg_color--5 ptb--100">
            <div class="container">
              <div class="row">
                  <div class="col-md-12">
                     <div class="main-timeline">
                        <div class="timeline">
                           <a href="#" class="timeline-content">
                              <div class="timeline-year"><span>2018</span></div>
                              <h3 class="title">Web Designing <i class="fa fa-globe"></i></h3>
                              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo </p>
                           </a>
                        </div>
                        <div class="timeline">
                           <a href="#" class="timeline-content">
                              <div class="timeline-year"><span>2017</span></div>
                              <h3 class="title">Web Development <i class="fa fa-rocket"></i></h3>
                              <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                              </p>
                           </a>
                        </div>
                        <div class="timeline">
                           <a href="#" class="timeline-content">
                              <div class="timeline-year"><span>2016</span></div>
                              <h3 class="title">Java Script <i class="fa fa-users"></i></h3>
                              <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                              </p>
                           </a>
                        </div>
                        <div class="timeline">
                           <a href="#" class="timeline-content">
                              <div class="timeline-year"><span>2015</span></div>
                              <h3 class="title">Web Designing <i class="fa fa-briefcase"></i></h3>
                              <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                              </p>
                           </a>
                        </div>
                        <div class="timeline">
                           <a href="#" class="timeline-content">
                              <div class="timeline-year"><span>2014</span></div>
                              <h3 class="title">Web Development <i class="fa fa-plane"></i></h3>
                              <p class="description">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo
                              </p>
                           </a>
                        </div>

                     </div>

                  </div>

               </div>
            </div>
              </div>



            <div class="brook-call-to-action bg_color--13 ptb--70 bg-as-text2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="call-content text-center text-md-left text-center">
                                    <h4 class="heading heading-h4 text-white">Sign up for new updates from us.</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="text-center text-md-right text-center mt_sm--30 mt_md--40 contact-form contact-form--4 yellow-color-2">
                                    <form action="#">
                                        <div class="input-box">
                                            <input type="email" placeholder="Your e-mail">
                                            <button>Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
@endsection
