@extends('layouts.header')
@section('content')
        <div class="brook-breadcaump-area bg_image--12 fullscreen breadcaump-title-bar breadcaump-title-white d-flex align-items-center pt_md--70 pt_sm--100 pb_sm--50"
            data-black-overlay="6">
            <div class="container-fluid plr--180 plr_lg--100 plr_md--50 plr_sm--50">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcaump-inner text-left">
                            <h1 class="heading heading-h1 font-60 text-white">We design and build applications<br> that are scalable, compatible and powerful</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 mt_md--30 mt_sm--30">
                        <div class="row">
                            <!-- Strat Single Speach -->
                            <div class="col-lg-12 col-xl-12 col-12">
                                <div class="single-motive-speach wow move-up">
                                    <div class="icon">
                                      <img src="{{ url('assets/img/about/mission.png')}}">
                                    </div>
                                    <div class="content">
                                        <h4 class="text-white">Our Mission</h4>
                                        <p class="bk_pra heading-font pr--40 text-white">We work with a mission to deliver disruptive applications for mobile and web that drives the growth of every business in every industry, ultimately leading to success and fulfillment.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Speach -->

                            <!-- Strat Single Speach -->
                            <div class="col-lg-12 col-xl-12 col-12 mt--70 mt_lg--40 mt_md--30 mt_sm--30">
                                <div class="single-motive-speach wow move-up">
                                    <div class="icon">
                                        <img src="{{ url('assets/img/about/vission.png')}}">
                                    </div>
                                    <div class="content">
                                        <h4 class="text-white">Our Vision</h4>
                                        <p class="bk_pra heading-font pr--40 text-white">We do and will effectively use innovative technology as a tool to help businesses, whether that is sprouting acorns or mighty oaks, grow and achieve their goals as envisaged.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Speach -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->

        <!-- Page Conttent -->
        <main class="page-content">

            <!-- Start Work area -->
            <div class="brook-whatdo-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="thumb">
                                <img class="w-100" src="{{ url('assets/img/about/whatwedo.jpg')}}" alt="about images">
                            </div>
                        </div>
                        <div class="col-lg-8 mt_sm--40 mt_md--40">
                            <div class="bk-title--default text-left">
                                <h5 class="heading heading-h5 theme-color wow move-up">What we do</h5>
                                <div class="bkseparator--30"></div>
                                <h3 class="heading heading-h3 wow move-up">We design and build applications that are scalable, compatible and powerful.</h3>
                            </div>
                            <div class="row">

                                <!-- Start Single -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="what-do mt--30">
                                        <div class="content">
                                            <h5 class="heading heading-h5 wow move-up">Native Mobile Application</h5>
                                            <div class="bkseparator--20"></div>
                                            <p class="bk_pra wow move-up">We build applications specifically for Android and iOS platforms using their own development languages and tools.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->

                                <!-- Start Single -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="what-do mt--30">
                                        <div class="content">
                                            <h5 class="heading heading-h5 wow move-up">Hybrid Mobile Application</h5>
                                            <div class="bkseparator--20"></div>
                                            <p class="bk_pra wow move-up">We interlace web and native technologies to create hybrid mobile applications.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="what-do mt--30">
                                        <div class="content">
                                            <h5 class="heading heading-h5 wow move-up">Web Application</h5>
                                            <div class="bkseparator--20"></div>
                                            <p class="bk_pra wow move-up">We build web-only applications which are accessible to both mobile and desktop users.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Work area -->



            <!-- Start Team Area -->
               <div class="brook-team-area  ptb--150 ptb-sm--60 ptb-md--80 slick-arrow-hover">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-12">
                               <div class="bk-title--default text-center mb--70">
                                   <h6 class="heading heading-h6 theme-color">TEAM MEMBERS</h6>
                                   <div class="bkseparator--30"></div>
                                   <h3 class="heading heading-h3">Our creative crew</h3>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-lg-12">
                               <div class="brook-element-carousel slick-arrow-center slick-arrow-rounded"
                                   data-slick-options='{
                                   "spaceBetween": 15,
                                   "slidesToShow": 4,
                                   "slidesToScroll": 4,
                                   "arrows": true,
                                   "infinite": true,
                                   "dots": false,
                                   "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "ion ion-ios-arrow-back" },
                                   "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "ion ion-ios-arrow-forward" }
                               }'
                                   data-slick-responsive='[
                               {"breakpoint":991, "settings": {"slidesToShow": 2}},
                               {"breakpoint":690, "settings": {"slidesToShow": 2}},
                               {"breakpoint":590, "settings": {"slidesToShow": 1}}
                               ]'>


                                   <!-- Start Single Team -->
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/bala.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Bala</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/bhuganesh.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Bhuganesh</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/ganesh.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Ganesh</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/gayathri.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Gayathri</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/gomathi.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Gomathi</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/karthi.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Karthi</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/maren.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Maran</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/nandha.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Nandha</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/naren.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Naren</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/nivetha_2.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Nivetha</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/praveen.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Praveen</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/vivek.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Vivek</h5>
                                                   <!-- <span>Founder</span> -->
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="team team__style--2 move-up wow">
                                       <div class="thumb">
                                           <img src="{{ url('assets/img/about/team/kamal.jpg')}}" alt="team Images">
                                           <div class="overlay"></div>
                                           <div class="team-info">
                                               <div class="info">
                                                   <h5>Kamal</h5>

                                               </div>
                                           </div>
                                       </div>
                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- End Team Area -->

        </main>
    </div>

@endsection
