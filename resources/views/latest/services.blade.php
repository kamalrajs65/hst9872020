@extends('layouts.front')
@section('content')
<style>
.blog-grid-minimal .post-content{
  text-align: center;
}
.blog-grid-minimal .post-content h5.heading a{
  color:#fff;
}
.post-meta .post-date{
  color:#fff;
}
</style>
<main class="page-content">
  <div class="brook-stratagy-area ">
     <div class="row" >
        <div class="col-lg-6" style="padding-left:0px;padding-right:0px;">
           <div class="bk-stratagy-thumb   h-100">
              <img src="{{ url('assets/img/services/services_banner.jpg')}}" class="img-responsive">
           </div>
        </div>
        <div class="col-lg-6 bg_color--5" style="padding-left:0px;padding-right:0px;">
           <div class="bk-stratagy-content max-width--600 float-right pt--120 pb--120 pr--120 pr_lg--30 pl_lg--30 pr_md--50 pl_md--50 pr_sm--30 pl_sm--30 ">
              <div class="content">
                 <h3 class="heading heading-h3 line-height-1-42 yellow-color-2 wow move-up text-black animate" style="visibility: visible; opacity: 0;">Since our inception, we've always tendered tech-solutions that are _____. </h3>
                 <div class="bkseparator--30"></div>
                 <p class="bk_pra font-16 line-height-1-87 pr--30 wow move-up text-black animate" style="visibility: visible; opacity: 0;">Effective</p>
                  <p class="bk_pra font-16 line-height-1-87 pr--30 wow move-up text-black animate" style="visibility: visible; opacity: 0;">Viable</p>
                   <p class="bk_pra font-16 line-height-1-87 pr--30 wow move-up text-black animate" style="visibility: visible; opacity: 0;">& Fruitful</p>

                 <div class="bkseparator--40"></div>
              </div>
           </div>
        </div>
     </div>
  </div>

  <div class="bk-blog-grid-area bg_color--5 ptb--120 ptb-md--80 ptb-sm--60">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="brook-section-title mb--10 text-center">
                              <h2 class="heading heading-h2">Latest news</h2>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <!-- Start Single Blog -->
                      <div class="col-lg-4 col-md-6 col-sm-12 col-12 move-up wow mt--60 animate" style="visibility: visible; opacity: 0;">
                          <div class="blog-grid-minimal" style="background-image: url(assets/img/services/appdevelopment_bg.jpg)">
                              <div class="post-content">
                                <p><img src="{{ url('assets/img/services/app_develop.png')}}"></p>
                                  <h5 class="heading"><a href="#">Mobile Applications</a></h5>
                                  <div class="post-meta">
                                      <div class="post-date">We build apps that are native (Android and iOS) as well as hybrid, for mobile as well as wearables.</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Single Blog -->

                      <!-- Start Single Blog -->
                      <div class="col-lg-4 col-md-6 col-sm-12 col-12 move-up wow mt--60 animate" style="visibility: visible; opacity: 0;">
                        <div class="blog-grid-minimal" style="background-image: url(assets/img/services/webdevelopment_bg.jpg)">
                            <div class="post-content">
                              <p><img src="{{ url('assets/img/services/web_develop.png')}}"></p>
                                <h5 class="heading"><a href="#">Web Applications</a></h5>
                                <div class="post-meta">
                                    <div class="post-date">Whether it's for CRM or ERP, cloud or workflow management, our web applications are robust and hi-tech.</div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- End Single Blog -->

                      <!-- Start Single Blog -->
                      <div class="col-lg-4 col-md-6 col-sm-12 col-12 move-up wow mt--60 animate" style="visibility: visible; opacity: 0;">
                        <div class="blog-grid-minimal" style="background-image: url(assets/img/services/ecommerce_bg.jpg)">
                            <div class="post-content">
                              <p><img src="{{ url('assets/img/services/ecommerce.png')}}"></p>
                                <h5 class="heading"><a href="#">E-commerce Solutions</a></h5>
                                <div class="post-meta">
                                    <div class="post-date">We help businesses evolve from brick-and-mortar to digital.</div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- End Single Blog -->

                      <!-- Start Single Blog -->
                      <div class="col-lg-4 col-md-6 col-sm-12 col-12 move-up wow mt--60 animate" style="visibility: visible; opacity: 0;">
                        <div class="blog-grid-minimal" style="background-image: url(assets/img/services/ui_ux_bg.jpg)">
                            <div class="post-content">
                              <p><img src="{{ url('assets/img/services/ui_ux.png')}}"></p>
                                <h5 class="heading"><a href="#">Product Design (UI/UX)</a></h5>
                                <div class="post-meta">
                                    <div class="post-date">We care about the way you feel while you're using an app, so we design the way it interact with you.</div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- End Single Blog -->

                      <!-- Start Single Blog -->
                      <div class="col-lg-4 col-md-6 col-sm-12 col-12 move-up wow mt--60 animate" style="visibility: visible; opacity: 0;">
                        <div class="blog-grid-minimal" style="background-image: url(assets/img/services/prototype_bg.jpg)">
                            <div class="post-content">
                              <p><img src="{{ url('assets/img/services/prototype.png')}}"></p>
                                <h5 class="heading"><a href="#">App Prototype & Strategy</a></h5>
                                <div class="post-meta">
                                    <div class="post-date">We help you with the first original model of your app upon which all the other elements are built.</div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- End Single Blog -->

                      <!-- Start Single Blog -->
                      <div class="col-lg-4 col-md-6 col-sm-12 col-12 move-up wow mt--60 animate" style="visibility: visible; opacity: 0;">
                        <div class="blog-grid-minimal" style="background-image: url(assets/img/services/ondemand_bg.jpg)">
                            <div class="post-content">
                              <p><img src="{{ url('assets/img/services/ondemand.png')}}"></p>
                                <h5 class="heading"><a href="#">On-demand Apps</a></h5>
                                <div class="post-meta">
                                    <div class="post-date">We already have the solutions for your needs. All you need to do is cherry-pick them.</div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- End Single Blog -->

                  </div>
              </div>
          </div>
          <div class="bk-portfolio-with-caption-area pt--20 pb--100 pt_md--80 pt_sm--80 pb_md--80 pb_sm--80 bg_color--5">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="brook-section-title text-center mb--45">                                        
                                          <h5 class="ptb--40">Check out our recent works.</h5>
                                      </div>
                                  </div>
                              </div>
                              <div class="row mt--30">

                                  <!-- Start Single Portfolio -->
                                  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                      <div class="portfolio with-caption">
                                          <div class="thumb video-with-thumb">
                                              <a href="#">
                                                  <img src="{{ url('assets/img/works/ensyfi_cover.jpg')}}" alt="portfolio images">
                                              </a>



                                          </div>
                                          <div class="caption-bottom text-center">
                                              <div class="info">
                                                  <h5 class="heading heading-h5"><a href="#">The Language of
                                                          Designs</a></h5>
                                                  <p class="bk_pra">Design</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Single Portfolio -->

                                  <!-- Start Single Portfolio -->
                                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow animate" data-wow-delay=".15s" style="visibility: visible; animation-delay: 0.15s; opacity: 0;">
                                      <div class="portfolio with-caption mt_mobile--30">
                                          <div class="thumb">
                                              <a href="#">
                                                <img src="{{ url('assets/img/works/heyla_cover.jpg')}}" alt="portfolio images">
                                              </a>
                                          </div>
                                          <div class="caption-bottom text-center">
                                              <div class="info">
                                                  <h5 class="heading heading-h5"><a href="#">The Language of
                                                          Designs</a></h5>
                                                  <p class="bk_pra">Design</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Single Portfolio -->

                                  <!-- Start Single Portfolio -->
                                  <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow animate" data-wow-delay=".16s" style="visibility: visible; animation-delay: 0.16s; opacity: 0;">
                                      <div class="portfolio with-caption mt_sm--30 mt_md--30">
                                          <div class="thumb">
                                              <a href="#">
                                                <img src="{{ url('assets/img/works/ener_you_cover.jpg')}}" alt="portfolio images">
                                              </a>
                                          </div>
                                          <div class="caption-bottom text-center">
                                              <div class="info">
                                                  <h5 class="heading heading-h5"><a href="#">Gifts for
                                                          Photography Lovers</a></h5>
                                                  <p class="bk_pra">Digital</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End Single Portfolio -->






                              </div>
                          </div>
                      </div>
          <div class="brook-call-to-action bg_color--13 ptb--40 bg-as-text2">
             <div class="container">
                <div class="row align-items-center">
                   <div class="col-lg-6 col-sm-12 col-12">
                      <div class="call-content text-center text-md-left text-center">
                         <h4 class="heading heading-h4 text-white">Get to know more about us and our works.</h4>
                      </div>
                   </div>
                   <div class="col-lg-6 col-sm-12 col-12">
                      <div class="text-center text-md-right text-center mt_sm--30 mt_md--40 contact-form contact-form--4 yellow-color-2">
                         <div class="button-group  move-up wow animate" style="opacity: 0; visibility: visible;">
                            <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="#">View our team
                            </a>
                            <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="#">View our projects</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
</main>
@endsection
