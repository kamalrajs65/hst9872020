@extends('layouts.header')
@section('content')
<style>
.error{
  color: red;
    margin-left: 15px;
}
</style>
<div   data-black-overlay="6" class="brook-breadcaump-area pt--300 pt_md--250 pt_sm--200 pb--300 pb_md--250 pb_sm--200 bg_image--01 breadcaump-title-bar breadcaump-title-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading heading-h2 font-60 text-white">Get a Quote</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="page-content">

            <!-- STart Contact Us Modern -->
            <div class="contact-modern pb--120 pb_md--80 pb_sm--80">
              <br>
                <div class="container">
                    <div class="row align-items-end">


                        <div class="col-lg-12 col-12 pl--50">
<center><h4 class="heading heading-h2 text-black" id="quoteform">Fill in you details and we’ll schedule a conversation with you.</h4></center>
                            <div class="contact-form">
                                <form id="contact-form" action="{{ url('get_quote_save')}}#quoteform" method="post">
                                    @csrf
                                    <div class="row" >
                                        <div class="col-lg-6 mt--30" >
                                            <input name="name" type="text" placeholder="Name *" value="{{ old('name') }}">
                                            <p class="error">@error('name'){{$message}} @enderror</p>
                                        </div>


                                        <div class="col-lg-6 mt--30" >
                                            <input name="email" type="text" placeholder="Email *" value="{{ old('email') }}">
                                            <p class="error">@error('email'){{$message}} @enderror</p>
                                        </div>

                                        <div class="col-lg-6 mt--30">
                                            <input type="text" placeholder="Mobile Number" name="mobilenumber" value="{{ old('mobilenumber') }}">
                                            <p class="error">@error('mobilenumber'){{$message}} @enderror</p>

                                        </div>
                                        <div class="col-lg-6 mt--30">
                                            <input type="text" placeholder="Skype ID" name="skype_id" value="{{ old('skype_id') }}">
                                        </div>
                                        <div class="col-lg-6 mt--30">
                                            <input type="text" placeholder="Looking for" name="looking_for" value="{{ old('looking_for') }}">
                                        </div>
                                        <div class="col-lg-6 mt--30">
                                            <input type="text" placeholder="Website" name="website_url" value="{{ old('website_url') }}">
                                            <p class="error">@error('website_url'){{$message}} @enderror</p>

                                        </div>

                                        <div class="col-lg-6 mt--30">
                                            <textarea placeholder="Interested In" name="interested_in">{{ old('interested_in') }}</textarea>
                                            <p class="error">@error('interested_in'){{$message}} @enderror</p>

                                        </div>
                                        <div class="col-lg-6 mt--30">
                                            <textarea  placeholder="More details" name="more_details">{{ old('interested_in') }}</textarea>
                                        </div>

                                        <div class="col-lg-6 mt--30">
                                            <input type="submit" value="Send message">

                                        </div>

                                    </div>
                                </form>

                            </div>
                            <br>
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
