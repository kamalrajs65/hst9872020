@extends('layouts.front')
@section('content')
<style>
.bg_image--mobileapp {
    background-image: url('assets/img/services/mobileapp/banner_mobileappdevelopment.jpg');
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
                                <h2 class="heading heading-h2 text-white">When you have a mobile presence, you offer your personal attention.</h2>
                            </div>
                          </div>

                          <div class="col-lg-6 col-12 mt_md--40 mt_sm--40">
                            <div class="contact-form bg_color--1 contact-form--2">
                                <h4 class="heading heading-h4">Newsletter sign-up</h4>
                                <form action="#">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <input type="text" placeholder="Your name">
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input type="email" placeholder="Your e-mail">
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-desc"> Sign up to our newsletter for regular updates and
                                                more.</div>
                                        </div>
                                        <div class="col-lg-12 mt--30">
                                            <input type="submit" placeholder="Subscribe">
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
                                <h5 class="heading heading-h5 yellow-color-2 text-center">Mobile App Development</h5>
                                <div class="bkseparator--30"></div>
                                <h3 class="heading heading-h3 line-height-1-42 text-center">Hi-tech mobile applications for a seamless experience and sustainable growth.</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Start What Do Inner -->
                    <div class="row mt--20 mt_sm--5 mt_md--5">

                        <div class="col-lg-4">
                            <div class="what-do mt--40">
                                <div class="content">
                                    <h5 class="heading heading-h5 yellow-color-2 wow move-up animate" style="visibility: visible; opacity: 0;">FNative Mobile Applications</h5>
                                    <div class="bkseparator--20"></div>
                                    <p class="bk_pra wow move-up animate" style="visibility: visible; opacity: 0;">We build applications specifically for Android and iOS platforms using their own development languages and tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="what-do mt--40">
                                <div class="content">
                                    <h5 class="heading heading-h5 yellow-color-2 wow move-up animate" style="visibility: visible; opacity: 0;">Hybrid Mobile Applications</h5>
                                    <div class="bkseparator--20"></div>
                                    <p class="bk_pra wow move-up animate" style="visibility: visible; opacity: 0;">We interlace web and native technologies to create hybrid mobile applications.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="what-do mt--40">
                                <div class="content">
                                    <h5 class="heading heading-h5 yellow-color-2 wow move-up animate" style="visibility: visible; opacity: 0;">Wearable Technology</h5>
                                    <div class="bkseparator--20"></div>
                                    <p class="bk_pra wow move-up animate" style="visibility: visible; opacity: 0;">We build mobile applications exclusively for wearables that analyze and transmit information about the wearer's body.</p>
                                </div>
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
                  <h2 class="heading-40 fw-200">Tools of the Trade</h2>
                  <p class="ptb--40">Tools we use for native, hybrid, and wearable apps.</p>
               </div>
            </div>
            <div class="col">
            </div>
            <div class="col-7">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Android Apps</a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <p class="pb--20">Essentials of Android app development</p>
                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/android/android_gear.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/android_nougat.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/android-launcher.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/android-tv.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/androidview_animations.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/bl_deviceintegration.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/android/java.png')}}">
                          </p>

                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">iOS Apps</a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                        <div class="panel-body">
                          <p class="pb--20">Essentials of iOS app development</p>
                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/ios/anfetworking.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-3d-touch.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-callkit.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-healthkit.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/Appletv-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/apple-watch-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/cocoapods.png')}}">
                          </p><br>

                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/ios/cocoa-touch-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/core_data.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/ibeacon-device-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/iMessage-apps.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/in_app_purchases.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/objective-c-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/react_native.png')}}">
                          </p><br>

                          <p>
                            <img src="{{ url('assets/img/services/mobileapp/ios/sirikit.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/swift.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/touch-security-icon.png')}}">
                            <img src="{{ url('assets/img/services/mobileapp/ios/xcode-icon.png')}}">
                          </p>



                          </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">Hybrid Apps</a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="">
                        <div class="panel-body">
                            <p class="pb--20">Essentials of Hybrid app development</p>
                            <p>
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/angularjs.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/html-5.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/ionic.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/phonegap-icon.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/hybrid/sencha_touch.png')}}">
                            </p>
                        </div>
                     </div>
                  </div>

                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Wearables</a>
                        </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" style="">
                        <div class="panel-body">
                            <p class="pb--20">Essentials of Wearables</p>
                            <p>
                              <img src="{{ url('assets/img/services/mobileapp/wearable/android_gear.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/wearable/apple-watch-icon.png')}}">
                              <img src="{{ url('assets/img/services/mobileapp/wearable/fitness_tracker.png')}}">

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
