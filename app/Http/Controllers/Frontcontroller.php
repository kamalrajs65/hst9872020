<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Contactform;
use App\Quotemodel;
use Mail;



class Frontcontroller extends Controller
{


    public function index(){

      return view('latest.home');
      //return view('front.index');
    }
    public function about(){
      // return view('front.about');
        return view('latest.aboutus');
    }
    public function ourteam(){
        return view('latest.ourteam');
    }
    public function process(){
      return view('front.process');
    }
    public function portfolio(){
      return view('front.portfolio');
    }
    public function quote(){
      return view('front.quote');
    }
    public function blog(){
      return view('front.blog');
    }
    public function contact(){
     return view('front.contact');
    }
    public function save_form(Request $request){
    $validate_data=$request->validate([
      'name'=>'required',
      'message'=>'required',
      'phoneno'=>'required|digits:10',
      'email' => 'required|email',
    ],[
      'name.required'=>'Name is required',
      'email.required'=>'Email ID is required',
      'phoneno.required'=>'Phone number is required',
      'phoneno.numeric'=>'Phone number must be number only',
    ]);
    $to_name=$request->input('name');
    $to_email='kamal.happysanz@gmail.com';
    $data=array('name'=>$to_name,'body'=>$validate_data);
    Mail::send('emails.mail',$data,function($message) use($to_name,$to_email){
     $message->to($to_email)->subject('From contact form');
    });
      $user=Contactform::create($validate_data);

      if($user){
        return redirect('contact')->with('status','Thanks for your interest. We will reach you in a couple of days.');
      }else{
      return redirect('contact')->with('status','Pssh! You have left fields empty');
      }
    }



    public function get_quote_save(Request $request){

    $validate_data=$request->validate([
      'name'=>'required',
      'interested_in'=>'required',
      'website_url'=>'required',
      'mobilenumber'=>'required|digits:10',
      'email' => 'required|email',
    ],[
      'name.required'=>'Name is required',
      'email.required'=>'Email ID is required',
      'mobilenumber.required'=>'Phone number is required',
      'mobilenumber.numeric'=>'Phone number must be number only',
    ]);

    $skype_id=$request->input('skype_id');
    $name=$request->input('name');
    $email=$request->input('email');
    $mobilenumber=$request->input('mobilenumber');
    $interested_in=$request->input('interested_in');
    $website_url=$request->input('website_url');
    $looking_for=$request->input('looking_for');
    $more_details=$request->input('more_details');
    $query=DB::table('get_quote_form')->insert([
      'name'=>$name,
      'mobilenumber'=>$mobilenumber,
      'email'=>$email,
      'skype_id'=>$skype_id,
      'interested_in'=>$interested_in,
      'more_details'=>$more_details,
      'website_url'=>$website_url,
      'looking_for'=>$looking_for,
    ]);
    $details=array(
      'name'=>$name,'skype_id'=>$skype_id,
      'email'=>$email,'mobilenumber'=>$mobilenumber,
      'interested_in'=>$interested_in,'website_url'=>$website_url,
      'looking_for'=>$looking_for,'more_details'=>$more_details);
    $to_name=$name;
    $to_email='kamal.happysanz@gmail.com';
    $data=array('name'=>$to_name,'body'=>$details);
    Mail::send('emails.quote',$data,function($message) use($to_name,$to_email){
     $message->to($to_email)->subject('Happy sanz Quote form');
    });
      if($query=='1'){
        return redirect('quote')->with('status','Thanks for your interest. We will reach you in a couple of days.');
      }else{
      return redirect('quote')->with('status','Pssh! You have left fields empty');
      }
    }


}
