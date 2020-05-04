@extends('layouts.header')
@section('content')
<style>

.header-default.header-transparent{
  background: rgba(0, 0, 0, 0.9) none no-repeat scroll center center / cover;
  padding: 0px;
}

</style>
<div class="breadcaump-area pt--130 pb--50 bg_color--1 breadcaump-title-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h1 class="heading heading-h1">Portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="page-content">


          <div class="brook-portfolio-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1 bk-masonary-wrapper">
                <div class="messonry-button text-center mb--70">
                    <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                    <button data-filter=".cat--1" class=""><span class="filter-text">Mobile</span> </button>
                    <button data-filter=".cat--2" class=""><span class="filter-text">Web</span> </button>
                </div>

                <div class="portfolio-grid-metro5 mesonry-list" style="position: relative; height: 1550.94px;">
                    <div class="resizer" style="position: absolute; left: 0%; top: 0px;"></div>





                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--1" style="position: absolute; left: 33.2912%; top: 0px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/1.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Ensyfi</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--1 cat--4" style="position: absolute; left: 66.6456%; top: 0px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/2.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Heyla</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--1" style="position: absolute; left: 33.2912%; top: 351px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/3.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">M3</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--1" style="position: absolute; left: 66.6456%; top: 351px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/4.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">SkilEx</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2" style="position: absolute; left: 0%; top: 527px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/5.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Acedata</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2" style="position: absolute; left: 0%; top: 984px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/6.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Ener|You</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--3" style="position: absolute; left: 66.6456%; top: 1011px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/7.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Ensyfi</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2" style="position: absolute; left: 33.2912%; top: 1066px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/8.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Heyla</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2" style="position: absolute; left: 33.2912%; top: 1066px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/9.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Kalaimagal</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2" style="position: absolute; left: 33.2912%; top: 1066px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/10.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">M3</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2" style="position: absolute; left: 33.2912%; top: 1066px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/11.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">Vision Palpro</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio portfolio_style--1 portfolio-33-33  cat--2" style="position: absolute; left: 33.2912%; top: 1066px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/12.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">RMD</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio portfolio_style--1 portfolio-33-33 cat--2" style="position: absolute; left: 33.2912%; top: 1066px;">
                        <div class="poss_relative">
                            <div class="thumb">
                                <img src="{{ url('assets/img/portfolio/13.jpg') }}" alt="Portfolio Images">
                            </div>
                            <div class="port-overlay-info">
                                <div class="hover-action">
                                    <h3 class="post-overlay-title"><a href="#">SkilEx</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>

            <!-- Start Portfolio Area -->
            <!-- <div class="brook-portfolio-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1">
                <div class="container">
                    <div class="row">


                        <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                            <div class="portfolio portfolio_style--1 mt--30">
                                <div class="thumb">
                                    <img src="{{ url('assets/img/portfolio/1.jpg') }}" alt="Portfolio Images">
                                </div>
                                <div class="port-overlay-info">
                                    <div class="hover-action">
                                        <h3 class="post-overlay-title"><a href="#">Ensyfi</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                              <div class="portfolio portfolio_style--1 mt--30">
                                  <div class="thumb">
                                      <img src="{{ url('assets/img/portfolio/2.jpg') }}" alt="Portfolio Images">
                                  </div>
                                  <div class="port-overlay-info">
                                      <div class="hover-action">
                                          <h3 class="post-overlay-title"><a href="#">Heyla</a></h3>
                                      </div>
                                  </div>
                              </div>
                          </div>

                            <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                <div class="portfolio portfolio_style--1 mt--30">
                                    <div class="thumb">
                                        <img src="{{ url('assets/img/portfolio/3.jpg') }}" alt="Portfolio Images">
                                    </div>
                                    <div class="port-overlay-info">
                                        <div class="hover-action">
                                            <h3 class="post-overlay-title"><a href="#">M3</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/4.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">SkilEx</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/5.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">AceData</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/6.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">Ener|You</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/7.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">Ensyfi</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/8.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">Heyla</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/9.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">Kalaimagal Vidyalaya</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/10.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">M3</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/11.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">Vision Pal Pro</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/12.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">RMD</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 col-12 move-up wow  animate" style="visibility: visible; opacity: 0;">
                                  <div class="portfolio portfolio_style--1 mt--30">
                                      <div class="thumb">
                                          <img src="{{ url('assets/img/portfolio/13.jpg') }}" alt="Portfolio Images">
                                      </div>
                                      <div class="port-overlay-info">
                                          <div class="hover-action">
                                              <h3 class="post-overlay-title"><a href="#">SkilEx</a></h3>
                                          </div>
                                      </div>
                                  </div>
                              </div>








                    </div>
                </div>
            </div> -->
            <!-- End Portfolio Area -->


        </main>
@endsection
