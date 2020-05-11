@extends('layouts.front')
@section('content')
<style>
.bg-image-2 {
    background-image: url('assets/img/works/heyla_bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    position: relative;
}
</style>

<main class="page-content">
  <section class="bg-image-2 bg-image-1 fp-section fp-table active pb--100" data-skin="light" style="height: 500px;margin-bottom: 100px;
"><div class="fp-tableCell" style="height: 388px;">
                    <div class="presentation-slider-wrapper">
                        <div class="presentation-inner">
                            <div class="inner about-service">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-4 d-none d-md-block ">
                                            <div class="thumb">
                                                <img style="margin-top:300px;" src="{{ url('assets/img/works/heyla_image.png')}}" class="img-responsive">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <div class="case-studis-area pt--120 pt-md--80 pt-sm--60 pb--100">
                  <div class="container">
                      <div class="row">
                          <div class="col-12">
                              <div class="brook-section-title text-center mb--45">
                                  <h6 class="heading-13 theme-color text-uppercase fw-500">Our case studies</h6>
                                  <div class="bkseparator--25"></div>
                                  <h2 class="heading-40 fw-200">Our projects make us proud</h2>
                              </div>
                          </div>

                      </div>
                      <div class="row">
                          <div class="col-12 text-center">
                            <div class="thumb">
                                <img src="{{ url('assets/img/works/android_small.png')}}" class="img-responsive work_platform_img">
                                <img src="{{ url('assets/img/works/ios_small.png')}}" class="img-responsive work_platform_img">
                                <img src="{{ url('assets/img/works/website_small.png')}}" class="img-responsive work_platform_img">
                            </div>
                          </div>


                      </div>

                  </div>
        </div>

</main>
@endsection
