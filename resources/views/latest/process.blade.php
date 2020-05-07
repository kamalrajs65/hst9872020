@extends('layouts.front')
@section('content')
<main class="page-content">
   <div class="brook-stratagy-area ">
      <div class="row" >
         <div class="col-lg-6" style="padding-left:0px;padding-right:0px;">
            <div class="bk-stratagy-thumb   h-100">
               <img src="{{ url('assets/img/process/process_banner.jpg')}}" class="img-responsive">
            </div>
         </div>
         <div class="col-lg-6 bg_color--5" style="padding-left:0px;padding-right:0px;">
            <div class="bk-stratagy-content max-width--600 float-right pt--120 pb--120 pr--160 pr_lg--30 pl_lg--30 pr_md--50 pl_md--50 pr_sm--30 pl_sm--30 ">
               <div class="content">
                  <h3 class="heading heading-h3 line-height-1-42 yellow-color-2 wow move-up text-black animate" style="visibility: visible; opacity: 0;">We don’t strive for the outcome, but care for the process that leads to it. </h3>
                  <div class="bkseparator--30"></div>
                  <p class="bk_pra font-16 line-height-1-87 pr--30 wow move-up text-black animate" style="visibility: visible; opacity: 0;">Just like a caterpillar never skips a single phase in its life before it emerges as a butterfly, we stick to every phase of the development to build a better product.</p>
                  <div class="bkseparator--40"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="bk-service-area">
      <div class="container">
         <div class="row mt--70 mt_sm--20 mt_md--30">
            <!-- Start Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up animate" style="visibility: visible; opacity: 0;">
               <div class="service service--1 text-center mt--30">
                  <div class="icons">
                     <img src="{{ url('assets/img/process/cutting_edge.png')}}" class="img-responsive">
                  </div>
                  <div class="content">
                     <h4>Cutting-edge Tech</h4>
                     <p>Is what we use at the core.
                     </p>
                  </div>
               </div>
            </div>
            <!-- End Single Service -->
            <!-- Start Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up animate" style="visibility: visible; opacity: 0;">
               <div class="service service--1 text-center mt--30">
                  <div class="icons">
                     <img src="{{ url('assets/img/process/elegant_design.png')}}" class="img-responsive">
                  </div>
                  <div class="content">
                     <h4>Elegant Design</h4>
                     <p>Is one among our first principles.
                     </p>
                  </div>
               </div>
            </div>
            <!-- End Single Service -->
            <!-- Start Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up animate" style="visibility: visible; opacity: 0;">
               <div class="service service--1 text-center mt--30">
                  <div class="icons">
                     <img src="{{ url('assets/img/process/seamless_experience.png')}}" class="img-responsive">
                  </div>
                  <div class="content">
                     <h4>Seamless Experience</h4>
                     <p>Is what we aim for.</p>
                  </div>
               </div>
            </div>
            <!-- End Single Service -->
         </div>
      </div>
   </div>
   <div class="brook-team-area  ptb--100 ptb-sm--60 ptb-md--80">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h3 class="text-center">From ideation to outcome and beyond!</h3>
               <br>
               <ul class="timeline">
                  <li>
                     <div class="timeline-image">
                        <img class="img-circle img-responsive process_img" src="{{ url('assets/img/process/process_1.png')}}" alt="">
                     </div>
                     <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="subheading">Idea</h4>
                        </div>
                        <div class="timeline-body">
                           <p class="text-muted">
                              Every app begins with an idea that goes through an extensive research on markets, demographics, and a lot of other things.
                           </p>
                        </div>
                     </div>
                     <div class="line"></div>
                  </li>
                  <li class="timeline-inverted">
                     <div class="timeline-image">
                        <img class="img-circle img-responsive process_img" src="{{ url('assets/img/process/process_2.png')}}" alt="">
                     </div>
                     <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="subheading">Wireframes</h4>
                        </div>
                        <div class="timeline-body">
                           <p class="text-muted">
                              Ideas in mind are brought into visuals on paper. A lot of sketching happens in this phase to ensure the flow and features meet the expectations.
                           </p>
                        </div>
                     </div>
                     <div class="line"></div>
                  </li>
                  <li>
                     <div class="timeline-image">
                        <img class="img-circle img-responsive process_img" src="{{ url('assets/img/process/process_3.png')}}" alt="">
                     </div>
                     <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="subheading">Prototype</h4>
                        </div>
                        <div class="timeline-body">
                           <p class="text-muted">
                              A prototype is a clickable version of the wireframes to see how the app works. User experience and design are primary objectives of the app prototype.
                           </p>
                        </div>
                     </div>
                     <div class="line"></div>
                  </li>
                  <li class="timeline-inverted">
                     <div class="timeline-image">
                        <img class="img-circle img-responsive process_img" src="{{ url('assets/img/process/process_4.png')}}" alt="">
                     </div>
                     <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="subheading">Development</h4>
                        </div>
                        <div class="timeline-body">
                           <p class="text-muted">
                              Once the flow and functionalities are finalized, development begins via Agile methodology.
                           </p>
                        </div>
                     </div>
                     <div class="line"></div>
                  </li>
                  <li>
                     <div class="timeline-image">
                        <img class="img-circle img-responsive process_img" src="{{ url('assets/img/process/process_5.png')}}" alt="">
                     </div>
                     <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="subheading">Testing</h4>
                        </div>
                        <div class="timeline-body">
                           <p class="text-muted">
                              The developed app is tested on various metrics such as usability, compatibility, security, and performance.
                           </p>
                        </div>
                     </div>
                     <div class="line"></div>
                  </li>
                  <li class="timeline-inverted">
                     <div class="timeline-image">
                        <img class="img-circle img-responsive process_img" src="{{ url('assets/img/process/process_6.png')}}" alt="">
                     </div>
                     <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="subheading">Deployment</h4>
                        </div>
                        <div class="timeline-body">
                           <p class="text-muted">
                              The ready-to-use app hits the app stores.
                           </p>
                        </div>
                     </div>
                     <div class="line"></div>
                  </li>
                  <li>
                     <div class="timeline-image">
                        <img class="img-circle img-responsive process_img" src="{{ url('assets/img/process/process_7.png')}}" alt="">
                     </div>
                     <div class="timeline-panel">
                        <div class="timeline-heading">
                           <h4 class="subheading">Maintenance</h4>
                        </div>
                        <div class="timeline-body">
                           <p class="text-muted">
                              Once the app is launched, a whole new cycle of maintenance and updates starts.
                           </p>
                        </div>
                     </div>
                  </li>
               </ul>
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
