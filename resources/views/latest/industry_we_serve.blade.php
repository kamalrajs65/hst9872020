@extends('layouts.front')
@section('content')
<style>
.carousel-img{
    background-color: #000;
    color: #fff;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    -webkit-clip-path: polygon(0 0, 96% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 0, 90% 0, 100% 100%, 0% 100%);
    opacity: 0.8;
}
.carousel-title{
  color:#fff;
}
</style>
<main class="page-content">

              <div class="brook-what-do-area ptb--160 ptb-md--80 ptb-sm--60 bg_color--5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brook-section-title wow move-up animate" style="visibility: visible; opacity: 0;">
                                <h3 class="heading heading-h5 yellow-color-2 text-center">Industries We Serve</h3>
                                <div class="bkseparator--30"></div>
                                <h3 class="text-center">Helping businesses of all sizes and all kinds to make a positive difference via technology.</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <div class="brook-what-do-area ptb--60 ptb-md--80 ptb-sm--60 bg_color--1">
            <div class="container">
                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/academia.jpg');">
                          <h1 class="carousel-title">Academia</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Academia</h3>
                      <hr>
                      <p>We help educational institutions to manage their academic activities and operations by offering them customized tech solutions.</p>
                  </div>
                </div>
                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/real_estate.jpg');">
                          <h1 class="carousel-title">Real Estate & Infrastructure</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Real Estate & Infrastructure</h3>
                      <hr>
                      <p>Our tech solutions like ERP, CMS, CRM, BRP and integrated web and mobile apps help realty sector to mange its expanding operations.</p>
                  </div>
                </div>
                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/public_utility.jpg');">
                          <h1 class="carousel-title">Public Utility</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Public Utility</h3>
                      <hr>
                      <p>We help businesses that mobilize experts to offer utility services by creating a platform and a reliable business model.</p>
                  </div>
                </div>
                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/travel.jpg');">
                          <h1 class="carousel-title">Travel & Hospitality</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Travel & Hospitality</h3>
                      <hr>
                      <p>We help you with every aspect of your services to give a better experience for your customers, by building platforms for booking tickets and rooms.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/health.jpg');">
                          <h1 class="carousel-title">Healthcare & Fitness</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Healthcare & Fitness</h3>
                      <hr>
                      <p>We help hospitals, healthcare organizations, laboratories, pharmacies, and fitness centers with a range of web and mobile applications.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/social.jpg');">
                          <h1 class="carousel-title">Social Networking</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Social Networking</h3>
                      <hr>
                      <p>We create platforms for people to connect with each other. This includes dating, messaging, and professional networking apps.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/banking.jpg');">
                          <h1 class="carousel-title">Banking, Finance & Insurance</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Banking, Finance & Insurance</h3>
                      <hr>
                      <p>Considering the rising need for digital transactions, we help financial organizations to perform secured engagements with their customers easily like never before.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/ecommerce.jpg');">
                          <h1 class="carousel-title">e-Commerce</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>e-Commerce</h3>
                      <hr>
                      <p>With increased number of people spending their time online, we help businesses to serve their customers right at their doorsteps.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/media.jpg');">
                          <h1 class="carousel-title">Media & Entertainment</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Media & Entertainment</h3>
                      <hr>
                      <p>From AR&VR to photo editor apps to collage makers to filter apps, we build applications that keep you occupied always.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/transport.jpg');">
                          <h1 class="carousel-title">Transport & Automotive</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Transport & Automotive</h3>
                      <hr>
                      <p>Our services for the transport and automotive sector includes route planning, logistics solutions and providing real-time information access.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/gaming.jpg');">
                          <h1 class="carousel-title">Gaming & Leisure</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Gaming & Leisure</h3>
                      <hr>
                      <p>We're passionate about creating highly interactive games for mobile and desktop that will keep the gaming enthusiasts on the edge of their seat.</p>
                  </div>
                </div>

                <div class="row ptb--30">
                  <div class="col-md-6 div-l">
                      <div class="carousel-img" style="background-image: url('assets/img/services/industry_we_serve/events.jpg');">
                          <h1 class="carousel-title">Events & Tickets</h1>
                      </div>
                    </div>
                  <div class="col-md-6 div-r">
                      <h3>Events & Tickets</h3>
                      <hr>
                      <p>We help event management businesses achieve their goals on a global scale. We do this by building a platform for booking and organizing events of any kind.</p>
                  </div>
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
