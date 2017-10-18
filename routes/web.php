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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/about',function () {
    return view('pages.about');
});

Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/policy', function () {
    return view('pages.policy');
});

Route::resource('/test','TestController');
Route::resource('/register','RegisterController');
Route::resource('/','HomeController');
Route::resource('/insights','InsightsController');
Route::resource('/careers','CareersController');
Route::resource('/contact','ContactController');
Route::resource('/admin','AdminController');
Route::resource('/admin/login','AdminLoginController');
Route::resource('/admin/authenticate','AdminAuthenticateController');
