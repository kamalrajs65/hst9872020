@extends('layouts.front')
@section('content')
<style>
.bg_image--mobileapp {
    background-image: url('assets/img/services/prototype/banner_prototype.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
[data-heading-overlay]:before {
  background-color: #fcb72bd6;
  }

  .process-step .btn:focus{outline:none}
  .process{display:table;width:100%;position:relative}
  .process-row{display:table-row}
  .process-step button[disabled]{opacity:1 !important;filter: alpha(opacity=100) !important}
  .process-row:before{top:40px;bottom:0;position:absolute;content:" ";width:100%;height:1px;background-color:#ccc;z-order:0}
  .process-step{display:table-cell;text-align:center;position:relative}
  .process-step p{margin-top:4px}
  .btn-circle{width:80px;height:80px;text-align:center;font-size:12px;border-radius:50%;background-color: #fff;border:1px solid #000;}

</style>
<main class="page-content">
  <div class="countdown-area bg_image--mobileapp ptb--50 ptb-md--80 ptb-sm--80" data-heading-overlay="9">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 col-12">

                            <div class="brook-section-title mb--10  text-center ptb--120">
                                <h2 class="heading heading-h2 text-white">Making app development easier by offering clickable prototypes.</h2>
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
                                <h3 class="heading heading-h5 yellow-color-2 text-center">Clickable App Prototypes and Strategy</h3>
                                <div class="bkseparator--30"></div>
                                <h3 class="text-center">Giving you an idea of how your app would work via clickable prototypes.</h3>
                                <p class="text-center">If you don't have any idea of how the functional flow of your app is going to be, no problems. We are here to take care of that. We strategize and design how an app will navigate the users via clickable prototypes.<br>App prototype conveys the idea of apps fundamental design and functionalities though an interactive clickable visual mock-up.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start What Do Inner -->

                    <!-- End What Do Inner -->

                </div>
            </div>


            <div class="brook-what-do-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--5">
              <div class="container">

                  <div class="col-12">
                     <div class="brook-section-title text-center mb--45">
                        <h2 class="heading-40 fw-200">Development of Clickable Prototypes</h2>

                     </div>
                  </div>
            <div class="row">
              <div class="process">
                  <div class="process-row nav nav-tabs">
                  <div class="process-step">
                  <button type="button" class="btn  btn-circle">
                    <img src="{{ url('assets/img/services/prototype/icons/icon_1.png')}}">
                  </button>
                  <p>Getting <br>Requirment</p>
                  </div>
                  <div class="process-step">
                  <button type="button" class="btn  btn-circle"><img src="{{ url('assets/img/services/prototype/icons/icon_2.png')}}"></button>
                  <p>Brainstorming</p>
                  </div>
                  <div class="process-step">
                  <button type="button" class="btn  btn-circle"><img src="{{ url('assets/img/services/prototype/icons/icon_3.png')}}"></button>
                  <p>Wireframes</p>
                  </div>
                  <div class="process-step">
                  <button type="button" class="btn  btn-circle"><img src="{{ url('assets/img/services/prototype/icons/icon_4.png')}}"></button>
                  <p>Clickable <br> Prototypes</p>
                  </div>
                  <div class="process-step">
                  <button type="button" class="btn  btn-circle"><img src="{{ url('assets/img/services/prototype/icons/icon_5.png')}}"></button>
                  <p>Delivery</p>
                  </div>
                  </div>
                  </div>
            </div>
          </div>
      </div>

            <div class="case-studis-area pt--120 pt-md--80 pt-sm--60 ptb--80">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="brook-section-title text-center mb--45">
                  <h2 class="heading-40 fw-200">Tools of the Trade</h2>

               </div>
            </div>
            <div class="col">
            </div>
            <div class="col-7">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Prototypes Tools</a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">

                          <p>
                            <img src="{{ url('assets/img/services/prototype/tools/photoshop.png')}}">
                            <img src="{{ url('assets/img/services/prototype/tools/illustrator.png')}}">
                            <!-- <img src="{{ url('assets/img/services/prototype/tools/adobe_xd.png')}}"> -->

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
             <h2 class="heading-40 fw-200">Why choose us for app prototyping?</h2>

          </div>
       </div>
           <!-- Team member -->
           <div class="col-xs-12 col-sm-6 col-md-3">
               <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                   <div class="mainflip">
                       <div class="frontside">
                           <div class="card">
                               <div class="card-body text-center">
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_6.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Intuitive Design</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Intuitive Design</h4>
                                   <p class="card-text">The design we incorporate in our apps are intuitive, which means the user doesn't need a guide to use it.</p>
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
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_7.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Accurate Estimation</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Accurate Estimation</h4>
                                   <p class="card-text">As our prototypes represent the actual product, you can figure out the cost and time of your project exactly.</p>
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
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_8.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Improvisation</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Improvisation</h4>
                                   <p class="card-text">Our clickable prototypes allow you to evaluate the app concept and tweak it for best results.</p>
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
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_9.png')}}" alt="card image"></p>
                                   <h4 class="card-title">For All Screens</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">For All Screens</h4>
                                   <p class="card-text">We design prototypes for all applications, be it web or mobile or wearables, compatible to all device screens.</p>
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
                                   <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_10.png')}}" alt="card image"></p>
                                   <h4 class="card-title">Making it Clear</h4>
                               </div>
                           </div>
                       </div>
                       <div class="backside">
                           <div class="card">
                               <div class="card-body text-center mt-4">
                                   <h4 class="card-title">Making it Clear</h4>
                                   <p class="card-text">We give you a clear understanding of how your app would work once it's is finally developed.</p>
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
                                             <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_11.png')}}" alt="card image"></p>
                                             <h4 class="card-title">Fulfillment</h4>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="backside">
                                     <div class="card">
                                         <div class="card-body text-center mt-4">
                                             <h4 class="card-title">Fulfillment</h4>
                                             <p class="card-text">A lot of feedback sessions take place with the clients to ensure the workflow the app is up to their expectations. </p>
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
                                             <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_12.png')}}" alt="card image"></p>
                                             <h4 class="card-title">Saving Cost & Time</h4>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="backside">
                                     <div class="card">
                                         <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Saving Cost & Time</h4>
                                             <p class="card-text">Our design experts would help you to get the working model of your app right without wasting your time and money.</p>
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
                                             <p><img class=" img-fluid" src="{{ url('assets/img/services/prototype/icons/icon_13.png')}}" alt="card image"></p>
                                             <h4 class="card-title">Design Expertise</h4>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="backside">
                                     <div class="card">
                                         <div class="card-body text-center mt-4">
                                             <h4 class="card-title">Design Expertise</h4>
                                             <p class="card-text">Our team of design experts and analysts are capable of coming up with a well researched and viable model of your app.</p>
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
