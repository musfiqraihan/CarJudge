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
//dashboard===========================
Route::get('/user/profile', 'frontend\UserController@showProfile')->name('profile');
Route::get('/logout', 'frontend\UserController@logout')->name('logout');

//frontend side end ===============




//backend side start==========================

//admin panel===========
Route::get('/admin', 'backend\AdminController@login')->name('admin');
Route::post('/admin', 'backend\AdminController@loginprocess');
Route::get('/admin/logout', 'backend\AdminController@adminlogout')->name('logout');
Route::get('/admin/dashboard', 'backend\AdminController@dashboard')->name('dashboard');


//admin brands panel=============================
Route::get('/admin/addbrands', 'backend\BrandController@add')->name('brands.add');

Route::post('/admin/storebrands', 'backend\BrandController@store')->name('brands.store');

Route::get('/admin/brandslist', 'backend\BrandController@show')->name('brands.show');

Route::get('/admin/brandslist/edit/{id}', 'backend\BrandController@edit');

Route::post('/admin/brandslist/update/{id}', 'backend\BrandController@update');

Route::get('/admin/brandslist/{id}', 'backend\BrandController@delete');

Route::get('/admin/brands/user/show', 'backend\BrandController@user')->name('brands.user');
//backend side end==========================
