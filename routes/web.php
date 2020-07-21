<?php

use Illuminate\Support\Facades\Route;

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
//welcome page=====================
Route::get('/', function () {
    return view('welcome');
});

//frontend side start ===============

//brand page==============
Route::get('/brands', 'frontend\BrandsController@brands')->name('brand_page');

//service page==============
Route::get('/services', 'frontend\ServiceController@services')->name('service_page');

//compare page==============
Route::get('/compares', 'frontend\CompareController@compares')->name('compare_page');

//contact page==============
Route::get('/contacts', 'frontend\ContactController@contacts')->name('contact_page');
// contact form data collect
Route::post('/contacts', 'frontend\ContactController@collect');

//review page==============
Route::get('/reviews', 'frontend\ReviewController@reviews')->name('review_page');



//user login and registration==================
//register===================
Route::get('/user/registration', 'frontend\UserController@userRegistration');
Route::post('/user/registration', 'frontend\UserController@processRegister');
//login===================
Route::get('/user/login', 'frontend\UserController@userLogin')->name('userloginpage');
Route::post('/user/login', 'frontend\UserController@processLogin');



//frontend side end ===============
