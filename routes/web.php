<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','Frontcontroller@index');
Route::get('about-us','Frontcontroller@about');
Route::get('our-team','Frontcontroller@ourteam');
Route::get('process','Frontcontroller@process');
Route::get('quality_assurance','Frontcontroller@quality_assurance');
Route::get('reviews','Frontcontroller@reviews');
Route::get('portfolio','Frontcontroller@portfolio');
Route::get('quote','Frontcontroller@quote');
Route::get('contact','Frontcontroller@contact');
Route::get('blog','Frontcontroller@blog');
Route::post('/save_form','Frontcontroller@save_form');
Route::post('/get_quote_save','Frontcontroller@get_quote_save');


Route::group(['middleware'=>['auth','admin']], function (){

Route::get('addblog','Blogcontroller@index');
Route::post('createblog','Blogcontroller@createblog');
Route::get('view_blog','Blogcontroller@view_blog');
Route::get('update_blog/{id}','Blogcontroller@update_blog');
Route::post('save_blog','Blogcontroller@save_blog');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
