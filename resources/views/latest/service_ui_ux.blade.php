@extends('layouts.front')
@section('content')
<style>
.bg_image--mobileapp {
    background-image: url('assets/img/services/ui_ux/banner_ui_uxdesign.jpg');
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
                                <h2 class="heading heading-h2 text-white">What you experience while you interact with an app is what we design.</h2>
                            </div>
                          </div>

                          <div class="col-lg-6 col-12 mt_md--40 mt_sm--40">
                            <div class="contact-form bg_color--1 contact-form--2">
                                <h4 class="heading heading-h4">Newsletter sign-up</h4>
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
                                <h5 class="heading heading-h5 yellow-color-2 text-center">"Frictionless navigation + Stunning Visuals" creates a marvellous experience.</h5>
                                <div class="bkseparator--30"></div>
                                <p>We desperately care about the way a user feel when s/he uses the app we build as much as we care about what app would accomplish. That's why we design our apps' interface based on the principles of simplicity, balance, harmony, hierarchy, space, and color. We offer the following UX/UI solutions:</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start What Do Inner -->
                    <div class="row">
                       <div class="col">
                          <div class="q_img_box">
                             <img src="{{ url('assets/img/services/ui_ux/icons/icon_1.png')}}" class="img-responsive quality_img_unit">
                             <p class="quality_box_text">Experience Design</p>
                          </div>
                       </div>
                       <div class="col">
                          <div class="q_img_box">
                             <img src="{{ url('assets/img/services/ui_ux/icons/icon_2.png')}}" class="img-responsive quality_img_unit">
                             <p class="quality_box_text">Interface Design</p>
                          </div>
                       </div>
                       <div class="col">
                          <div class="q_img_box">
                             <img src="{{ url('assets/img/services/ui_ux/icons/icon_3.png')}}" class="img-responsive quality_img_unit">
                             <p class="quality_box_text">Front-end Development</p>
                          </div>
                       </div>
                       <div class="col">
                          <div class="q_img_box">
                             <img src="{{ url('assets/img/services/ui_ux/icons/icon_4.png')}}" class="img-responsive quality_img_unit">
                             <p class="quality_box_text">Responsive Design</p>
                          </div>
                       </div>
                       <div class="col">
                          <div class="q_img_box">
                             <img src="{{ url('assets/img/services/ui_ux/icons/icon_5.png')}}" class="img-responsive quality_img_unit">
                             <p class="quality_box_text">Mobile UX/UI</p>
                          </div>
                       </div>
                       <div class="col">
                          <div class="q_img_box">
                             <img src="{{ url('assets/img/services/ui_ux/icons/icon_6.png')}}" class="img-responsive quality_img_unit">
                             <p class="quality_box_text">Custom Web <br>& Mobile Design</p>
                          </div>
                       </div>
                    </div>
                    <!-- End What Do Inner -->

                </div>
            </div>

            <div class="case-studis-area pt--120 pt-md--80 pt-sm--60 ptb--80">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="brook-section-title text-center mb--45">
                  <h2 class="heading-40 fw-200">Our Design Tools</h2>

               </div>
            </div>
            <div class="col">
            </div>
            <div class="col-7">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">UI</a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">

                          <p>
                            <img src="{{ url('assets/img/services/ui_ux/tools/photoshop.png')}}">
                            <img src="{{ url('assets/img/services/ui_ux/tools/illustrator.png')}}">
                            <img src="{{ url('assets/img/services/ui_ux/tools/photoshop.png')}}">
                            <img src="{{ url('assets/img/services/ui_ux/tools/photoshop.png')}}">
                            <img src="{{ url('assets/img/services/ui_ux/tools/photoshop.png')}}">
                            <img src="{{ url('assets/img/services/ui_ux/tools/photoshop.png')}}">

                          </p>

                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">UX</a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                        <div class="panel-body">
                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/ios/anfetworking.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-3d-touch.png')}}">
                          </p>
                          </div>
                     </div>
                  </div>

               </div>
            </div>
            <div class="col">
            </div>
         </div>
      </div>
   </div>
   <div class="brook-stratagy-area bg_color--5 ptb--100">
      <div class="container">
     <div class="row">
       <div class="col-md-12 col-sm-12">
          <div class="brook-section-title text-center mb--45">
             <h2 class="heading-40 fw-200">Why choose us for UX/UI design solutions?</h2>

          </div>
       </div>
           <!-- Team member -->
           <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                   <div class="mainflip">
                       <div class="frontside">
                           <div class="card">
                               <div class="card-body text-center">
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_7.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Design for Persona</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Design for Persona</h4>
                                   <p class="card-text">We bring in user personas to anticipate the user expectations and how the app should respond to those expectations.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                   <div class="mainflip">
                       <div class="frontside">
                           <div class="card">
                               <div class="card-body text-center">
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_8.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Modern Technology</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Modern Technology</h4>
                                   <p class="card-text">The tools, gears, and frameworks we use for the purpose of design are latest.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                   <div class="mainflip">
                       <div class="frontside">
                           <div class="card">
                               <div class="card-body text-center">
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_9.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Quality Assurance</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Quality Assurance</h4>
                                   <p class="card-text">Our testing team ensures the design of the application is flawless and intuitive to use.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                   <div class="mainflip">
                       <div class="frontside">
                           <div class="card">
                               <div class="card-body text-center">
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_10.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Versatile Projects</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Versatile Projects</h4>
                                   <p class="card-text">Our design portfolio comprises designs for interface, experience, information architecture and navigation model.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>


           <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                   <div class="mainflip">
                       <div class="frontside">
                           <div class="card">
                               <div class="card-body text-center">
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_11.png')}}" alt="card image"></p>
                                   <h4 class="card-title">World-class UI Design</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">World-class UI Design</h4>
                                   <p class="card-text">The design practices we adhere to while we  work on interfaces are of global standards.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>


                     <div class="col-xs-12 col-sm-6 col-md-3">
                         <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                             <div class="mainflip">
                                 <div class="frontside">
                                     <div class="card">
                                         <div class="card-body text-center">
                                             <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_12.png')}}" alt="card image"></p>
                                             <h4 class="card-title">Effective Wireframes</h4>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="backside">
                                     <div class="card">
                                         <div class="card-body text-center mt-4">
                                             <h4 class="card-title">Effective Wireframes</h4>
                                             <p class="card-text">We put the ideas on the paper first to confirm the flow of the app. Only then we go for prototypes. </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-3">
                         <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                             <div class="mainflip">
                                 <div class="frontside">
                                     <div class="card">
                                         <div class="card-body text-center">
                                             <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_13.png')}}" alt="card image"></p>
                                             <h4 class="card-title">Rich Visual Resources</h4>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="backside">
                                     <div class="card">
                                         <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Rich Visual Resources</h4>
                                             <p class="card-text">We have a repository of resources to design interfaces, such as unique color palette, style guides, and typography.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-xs-12 col-sm-6 col-md-3">
                         <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                             <div class="mainflip">
                                 <div class="frontside">
                                     <div class="card">
                                         <div class="card-body text-center">
                                             <p><img class=" img-fluid" src="{{ url('assets/img/services/ui_ux/icons/icon_14.png')}}" alt="card image"></p>
                                             <h4 class="card-title">User-Centric Design</h4>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="backside">
                                     <div class="card">
                                         <div class="card-body text-center mt-4">
                                             <h4 class="card-title">User-Centric Design</h4>
                                             <p class="card-text">We believe that a good design gives the user a feel of fulfillment. We ensure this via User Accessibility Tests.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
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
