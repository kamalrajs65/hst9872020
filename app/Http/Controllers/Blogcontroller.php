<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogmodel;
use Illuminate\Support\Facades\DB;


class Blogcontroller extends Controller
{

  public function index(){
    return view('blog.create_blog');
  }

  public function view_blog(){
    $blog_data=Blogmodel::all();
    return view('blog.view_blog',compact('blog_data'));
  }

  public function update_blog($id){
    $blog_data=Blogmodel::find($id);
    return view('blog.update_blog',compact('blog_data'));
  }


  public function createblog(Request $res){
    $validate_data=$res->validate([
      'blog_title'=>'required',
       'blog_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
      'blog_description'=>'required',
    ],[
      'blog_title.required'=>'Blog title is required',
      'blog_image.required'=>'Blog image  is required',
      'blog_description.required'=>'Blog description  is required',
    ]);
      $image = $res->file('blog_image');
      $blog_image = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = storage_path('blog/');
      $image->move($destinationPath, $blog_image);

      $blog_title=$res->input('blog_title');
      $blog_description=$res->input('blog_description');
      $blog_status=$res->input('status');
      $query=DB::table('tbl_blog')->insert([
          'blog_title'=>$blog_title,
          'blog_description'=>$blog_description,
          'blog_image'=>$blog_image,
          'status'=>$blog_status,
          'created_at'=>NOW(),
        ]);
        if($query=='1'){
          return redirect('view_blog')->with('status','Blog added successfully!!!');
        }else{
          return redirect('view_blog')->with('status','Something went wrong!!!');
        }

  }

  public function save_blog(Request $res){
    $validate_data=$res->validate([
      'blog_title'=>'required',
       'blog_image' => 'image|mimes:jpeg,png,jpg|max:2048',
      'blog_description'=>'required',
    ],[
      'blog_title.required'=>'Blog title is required',
      'blog_image.required'=>'Blog image  is required',
      'blog_description.required'=>'Blog description  is required',
    ]);

      $blog_title=$res->input('blog_title');
      $id=$res->input('id');
      $blog_old_image=$res->input('blog_old_image');
      $blog_description=$res->input('blog_description');
      $blog_status=$res->input('status');
      $image = $res->file('blog_image');


      if(empty($image)){
        $img=$blog_old_image;
      }else{
        $blog_image = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = storage_path('blog/');
        $image->move($destinationPath, $blog_image);
        $img=$blog_image;
      }
    
      $query=DB::table('tbl_blog')->where('id',$id)->update([
          'blog_title'=>$blog_title,
          'blog_description'=>$blog_description,
          'blog_image'=>$img,
          'status'=>$blog_status,
          'created_at'=>NOW(),
        ]);
        if($query=='1'){
          return redirect('view_blog')->with('status','Blog updated successfully!!!');
        }else{
          return redirect('view_blog')->with('status','Something went wrong!!!');
        }
  }
}
