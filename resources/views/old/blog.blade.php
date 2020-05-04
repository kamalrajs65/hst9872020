@extends('layouts.header')
@section('content')
<style>
.extra-small-screen {
    height: 300px;
}
.opacity-medium {
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: 0.75;
    top: 0;
    left: 0;
}
.bg-extra-dark-gray {
    background-color: #1c1c1c;
}
.text-center {
    text-align: center!important;
}
.page-title-large h1 {
    font-size: 46px;
    line-height: 49px;
}
</style>
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{ url('assets/img/blog_bg.jpg')}}');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog list</h1>
                        <span class="text-white-2 opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start blog content section -->
        <section>
            <div class="container">
                <div class="row">
                    <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom md-padding-15px-lr">
                        <!-- start post item -->
                        <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                            <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                                <a href="blog-standard-post.html"><img src="images/blog-img37.jpg" alt=""></a>
                            </div>
                            <div class="col-12 col-lg-6 blog-text p-0">
                                <div class="content margin-20px-bottom md-no-padding-left ">
                                    <a href="blog-standard-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Design is thinking made visual</a>
                                    <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Emily Wright</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Design</a></div>
                                    <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-standard-post.html">Continue Reading</a>
                            </div>
                        </div>
                        <!-- end post item -->


                        <!-- start pagination -->
                        <div class="col-12 text-center margin-100px-top md-margin-50px-top position-relative wow fadeInUp">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul class="mx-auto">
                                    <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end pagination -->
                    </main>
                    <aside class="col-12 col-lg-3">
                        <div class="d-inline-block width-100 margin-45px-bottom sm-margin-25px-bottom">
                            <form>
                                <div class="position-relative">
                                    <input type="text" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Enter your keywords...">
                                    <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search ml-0"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>About Me</span></div>
                            <a href="about-me.html"><img src="images/aside-image-1.jpg" alt="" class="margin-25px-bottom"/></a>
                            <p class="margin-20px-bottom text-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="about-me.html">About Author</a>
                        </div>
                        <div class="margin-50px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Follow Us</span></div>
                            <div class="social-icon-style-1 text-center">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categories</span></div>
                            <ul class="list-style-6 margin-50px-bottom text-small">
                                <li><a href="blog-masonry.html">Arts and Entertainment</a><span>12</span></li>
                                <li><a href="blog-masonry.html">Blog</a><span>05</span></li>
                                <li><a href="blog-masonry.html">Blog Full width</a><span>08</span></li>
                                <li><a href="blog-masonry.html">Blog Grid</a><span>10</span></li>
                                <li><a href="blog-masonry.html">Branding</a><span>21</span></li>
                                <li><a href="blog-masonry.html">Design Tutorials</a><span>09</span></li>
                                <li><a href="blog-masonry.html">Designing</a><span>07</span></li>
                                <li><a href="blog-masonry.html">Feature</a><span>06</span></li>
                                <li><a href="blog-masonry.html">Home Blog</a><span>10</span></li>
                                <li><a href="blog-masonry.html">Onepage Fashion</a><span>11</span></li>
                                <li><a href="blog-masonry.html">Sample</a><span>06</span></li>
                            </ul>
                        </div>
                        <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
                            <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
                            <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">The future belongs to those who believe in the beauty of their dreams.</span>
                            <a class="btn btn-very-small btn-transparent-white border text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Popular post</span></div>
                            <ul class="latest-post position-relative">
                                <li class="media">
                                    <figure>
                                        <a href="blog-post-layout-01.html"><img src="images/aside-image-2.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-post-layout-01.html" class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">Traveling abroad will change you forever</span></a> <span class="d-block text-medium-gray text-small">April 30, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-post-layout-02.html"><img src="images/aside-image-3.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-post-layout-02.html" class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">Having a new perspec-tive on new york city</span></a> <span class="d-block text-medium-gray text-small">March 10, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-post-layout-03.html"><img src="images/aside-image-4.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-post-layout-03.html" class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">The incredible talents of street performers</span></a> <span class="d-block text-medium-gray text-small">March 05, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-post-layout-04.html"><img src="images/aside-image-5.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-post-layout-04.html" class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">Praesent placerat risus quis eros</span></a> <span class="d-block text-medium-gray text-small">March  01, 2016</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>tags cloud</span></div>
                            <div class="tag-cloud">
                                <a href="blog-grid.html">ADVERTISEMENT</a>
                                <a href="blog-grid.html">ARTISTRY</a>
                                <a href="blog-grid.html">BLOG</a>
                                <a href="blog-grid.html">CONCEPTUAL</a>
                                <a href="blog-grid.html">DESIGN</a>
                                <a href="blog-grid.html">FASHION</a>
                                <a href="blog-grid.html">INSPIRATION</a>
                                <a href="blog-grid.html">SMART</a>
                                <a href="blog-grid.html">QUOTES</a>
                                <a href="blog-grid.html">UNIQUE</a>
                                <a href="blog-grid.html">CONCEPTS</a>
                            </div>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Archive</span></div>
                            <ul class="list-style-6 margin-20px-bottom text-small">
                                <li><a href="blog-grid.html">July 2017</a><span>12</span></li>
                                <li><a href="blog-grid.html">June 2017</a><span>05</span></li>
                                <li><a href="blog-grid.html">May 2017</a><span>08</span></li>
                                <li><a href="blog-grid.html">April 2017</a><span>10</span></li>
                                <li><a href="blog-grid.html">March 2017</a><span>21</span></li>
                                <li><a href="blog-grid.html">February 2017</a><span>09</span></li>
                                <li><a href="blog-grid.html">January 2017</a><span>07</span></li>
                            </ul>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
                            <div class="d-inline-block width-100">
                                <form>
                                    <div class="position-relative">
                                        <input type="email" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Enter your email...">
                                        <button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="far fa-envelope ml-0"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Instagram</span></div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-aside"></ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
@endsection
