@extends('layouts.header')
@section('content')
<style>
.error{
  color: red;
    margin-left: 15px;
}
</style>
<div class="brook-breadcaump-area pt--300 pt_md--250 pt_sm--200 pb--300 pb_md--250 pb_sm--200 bg_image--55 breadcaump-title-bar breadcaump-title-white"   data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading heading-h2 font-60 text-white">Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="page-content">

            <!-- STart Contact Us Modern -->
            <div class="contact-modern pb--120 pb_md--80 pb_sm--80">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-6 col-12 pr--50 ptb-md--80 ptb-sm--80">
                            <div class="contact-modern bg_color--18 space_dec--100 pt--120 pb--120 pl--60 pr--60">
                                <div class="inner">
                                    <h2 class="heading heading-h2 text-white">Start a new project?</h2>

                                    <div class="classic-address text-left mt--60">
                                        <h4 class="heading heading-h4 text-white">Location</h4>
                                        <div class="desc mt--15">
                                          <p class="bk_pra text-white line-height-1-63"><b>Singapore headquaters</b> <br>No. 28, Bukit Pasoh Road,<br>Singapore 089842.</p>
                                          <br>
                                          <p class="bk_pra text-white line-height-1-63"><b>India Office</b><br>Building No. 16,<br>MahalakshmiKovil Street,
                                            Masakalipalayam (PO),<br>Uppilipalayam,<br>Tamil Nadu 641015</p>
                                        </div>
                                    </div>

                                    <div class="classic-address text-left mt--60">
                                        <h4 class="heading heading-h4 text-white">Message us</h4>
                                        <div class="desc mt--15 mb--30">
                                          <p class="bk_pra line-height-1-63 bk-hover"><a class="text-white" href="#">hello@happysanztech.com</a></p>
                                          <p class="bk_pra line-height-1-63 bk-hover"><a class="text-white">(+68)-9887-2345</a></p>
                                          <p class="bk_pra line-height-1-63 bk-hover"><a class="text-white">(+91)-422-257-5551</a></p>
                                        </div>
                                        <div class="social-share social--transparent text-white">
                                          <a href="https://www.facebook.com/happysanztech" target="_blank"><i class="fab fa-facebook"></i></a>
                                          <a href="https://twitter.com/happysanztech" target="_blank"><i class="fab fa-twitter"></i></a>
                                          <a href="https://www.linkedin.com/company/happysanztech" target="_blank"><i class="fab fa-instagram"></i></a>
                                          <a href="https://www.youtube.com/channel/UCZ59wRwBFVFdS2kh-NLpU1A" target="_blank"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 pl--50" id="contactform">
                          <h4>Great ideas emerge from great conversations,<br>And great conversations start with a hello.</h4>
                            <div class="contact-form" >
                                <form id="contact-form" action="{{ url('save_form') }}#contactform" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input name="name" type="text" placeholder="Name *">
                                        </div>
                                        <p class="error">@error('name'){{$message}} @enderror</p>

                                        <div class="col-lg-12 mt--30">
                                            <input name="email" type="text" placeholder="Email *">
                                        </div>
                                        <p class="error">@error('email'){{$message}} @enderror</p>

                                        <div class="col-lg-12 mt--30">
                                            <input type="text" name="phoneno" placeholder="Phone number">
                                        </div>
                                        <p class="error">@error('phoneno'){{$message}} @enderror</p>

                                        <div class="col-lg-12 mt--30">
                                            <textarea name="message"  placeholder="Your message"></textarea>
                                        </div>
                                        <p class="error">@error('message'){{$message}} @enderror</p>

                                        <div class="col-lg-12 mt--30">
                                            <input type="submit" value="Send message">
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Us Modern -->


        </main>
@endsection
