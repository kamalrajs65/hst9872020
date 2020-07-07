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
Route::get('ourworks','Frontcontroller@ourworks');
Route::get('ensyfi_work','Frontcontroller@ensyfi_work');
Route::get('heyla_work','Frontcontroller@heyla_work');
Route::get('services','Frontcontroller@services');
Route::get('service_mobile_app','Frontcontroller@service_mobile_app');
Route::get('service_android_app','Frontcontroller@service_android_app');
Route::get('service_ios_app','Frontcontroller@service_ios_app');
Route::get('service_hybrid_app','Frontcontroller@service_hybrid_app');
Route::get('service_wearable_app','Frontcontroller@service_wearable_app');
Route::get('service_web_development','Frontcontroller@service_web_development');
Route::get('service_ecommerce_app','Frontcontroller@service_ecommerce_app');
Route::get('service_ui_ux','Frontcontroller@service_ui_ux');
Route::get('service_prototype','Frontcontroller@service_prototype');
Route::get('service_ondemand','Frontcontroller@service_ondemand');
Route::get('industry_we_serve','Frontcontroller@industry_we_serve');
Route::get('consultancy_service','Frontcontroller@consultancy_service');
Route::get('software_maintainence','Frontcontroller@software_maintainence');








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
