@extends('layouts.front')
@section('content')


        <main class="page-content">
          <div class="brook-service-area landing-degital-product bg_color--1 ptb_lp--80 ptb--40">
                  <div class="row row--0 align-items-center">
                      <div class="col-lg-12 col-12 col-xl-6">
                          <div class="thumbnail">
                              <img class="w-100" src="{{ url('assets/img/about/about_img.png')}}" alt="multipurpose">
                          </div>
                      </div>
                      <div class="col-lg-12 col-12 col-xl-6 ptb-lg--60 ptb-md--60 ptb-sm--60">
                          <div class="landing-digital-product-inner plr--100 plr_lp--50  plr_md--50 plr_sm--30">
                              <div class="content mb--70 mb_sm--45">
                                  <h2 class="heading heading-h2 line-height-1-42">Meet our happy people.</h2>
                                      <p>Every impactful work is a result of collective effort. We know this very well, because we have invoked the principle of team work ever since the day we had started out.</p>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>


              <div class="brook-team-area bg_color--5 ptb--100 ptb-sm--60 ptb-md--80">
                <div class="container">
                    <center><h3 class="heading heading-h3">Our excutive</h3></center>
                    <br>
                    <div class="row row--30">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="team team__style--3">
                                <div class="thumb">
                                    <img src="{{ url('assets/img/about/team/nandha.jpg')}}" alt="team Images">
                                    <div class="overlay" style="background-image: url('assets/img/about/team/nandha.jpg');"></div>
                                    <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                        <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-info text-center">
                                    <div class="info">
                                        <h5>Kasahara May</h5>
                                        <span>Project manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->

                        <!-- Start Single Team -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt_mobile--40">
                            <div class="team team__style--3 move-up wow animate" data-wow-delay=".13s" style="visibility: visible; animation-delay: 0.13s; opacity: 0;">
                                <div class="thumb">
                                  <img src="{{ url('assets/img/about/team/gomathi.jpg')}}" alt="team Images">
                                  <div class="overlay" style="background-image: url('assets/img/about/team/gomathi.jpg');"></div>
                                    <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                        <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-info text-center">
                                    <div class="info">
                                        <h5>Blake Hamilton</h5>
                                        <span>Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->

                        <!-- Start Single Team -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt_sm--40">
                            <div class="team team__style--3 move-up wow animate" data-wow-delay="0.16s" style="visibility: visible; animation-delay: 0.16s; opacity: 0;">
                                <div class="thumb">
                                  <img src="{{ url('assets/img/about/team/gayathri.jpg')}}" alt="team Images">
                                  <div class="overlay" style="background-image: url('assets/img/about/team/gayathri.jpg');"></div>
                                    <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                        <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-info text-center">
                                    <div class="info">
                                        <h5>John Doe</h5>
                                        <span>Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->
                    </div>
                </div>

            </div>
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

@endsection
