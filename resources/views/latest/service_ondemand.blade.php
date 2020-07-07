@extends('layouts.front')
@section('content')
<style>
.bg_image--mobileapp {
    background-image: url('assets/img/services/ondemand/banner_service-to-industry.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
[data-heading-overlay]:before {
  background-color: #fcb72bd6;
  }


</style>
<main class="page-content">
  <div class="countdown-area bg_image--mobileapp ptb--50 ptb-md--80 ptb-sm--80" data-heading-overlay="9">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 col-12">

                            <div class="brook-section-title mb--10  text-center ptb--120">
                                <h2 class="heading heading-h2 text-white">Make your move quick with our on-demand applications.</h2>
                            </div>
                          </div>

                          <div class="col-lg-6 col-12 mt_md--40 mt_sm--40">
                            <div class="contact-form bg_color--1 contact-form--2">
                                <h4 class="heading heading-h4">Let's Talk</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control " placeholder="Your name">
                                        </div>
                                        <div class="col-lg-12 mt--10">
                                            <input type="text" class="form-control " placeholder="Your Phone Number">
                                        </div>

                                        <div class="col-lg-12 mt--10">
                                            <input type="email" class="form-control " placeholder="Your Email ID">
                                        </div>
                                        <div class="col-lg-12 mt--10">
                                            <textarea class="form-control " placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-lg-12 mt--20">
                                            <input type="submit" name="Save">
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="brook-what-do-area ptb--160 ptb-md--80 ptb-sm--60 bg_color--1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brook-section-title wow move-up animate" style="visibility: visible; opacity: 0;">
                                <h3 class="heading heading-h5 yellow-color-2 text-center">Event Management</h3>
                                <div class="bkseparator--30"></div>
                                <h3 class="text-center">Entertain the mass with our on-demand event management app.</h3>
                                <p class="text-center">Be it movies, food festivals, workshops, business meets or any event that enthralls the public, we offer you a ready-to-deploy app that lets you to thrive in event management business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="brook-what-do-area ptb--160 ptb-md--80 ptb-sm--60 bg_color--5">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="brook-section-title wow move-up animate" style="visibility: visible; opacity: 0;">
                              <h3 class="heading heading-h5 yellow-color-2 text-center">Education</h3>
                              <div class="bkseparator--30"></div>
                              <h3 class="text-center">A school management application for a better administration.</h3>
                              <p class="text-center">For educational institutions that struggle to manage the academic activities from admission to enrollment, student registration to class allocation, scheduling timetable to scheduling term examinations, we offer an integrated ready-made app that makes the school administration easier. Our school management app helps the educators focus on what really matters - educating students better.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="brook-what-do-area ptb--160 ptb-md--80 ptb-sm--60 bg_color--1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brook-section-title wow move-up animate" style="visibility: visible; opacity: 0;">
                            <h3 class="heading heading-h5 yellow-color-2 text-center">Field Tracking</h3>
                            <div class="bkseparator--30"></div>
                            <h3 class="text-center">Track your field staff right from where you are.</h3>
                            <p class="text-center">Whether you're a marketing company that wants to track its marketing professionals or an NGO that wants to guide its volunteers in the field, our field tracking application will make your work easier without you need to travel. The app allows you to schedule work to your field staff and track their travel and location via the GPS feature.</p>
                        </div>
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
