<?php

use App\Http\Controllers\InsightController;
use App\Http\Controllers\CareerController;
use Illuminate\Http\Request;

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

<<<<<<< HEAD
//  Route::get('/', function () {
//     return view('pages.home');
// }); 
=======
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> f9b6431969593fa8faa34c39efcc9ba32c3dc6f2

Route::get('/', 'HomeController@index');

Route::get('/home',function () {
    return view('home')->name('home');
});

Route::get('about',function () {
    return view('pages.about');
});

Route::get('faq', function () {
    return view('pages.faq');
});
Route::get('policy', function () {
    return view('pages.policy');
});
Route::get('career-insights', function () {
    $careers= DB::table('careers')->get();
    return view('pages.career-insights')
    ->with('careers',$careers);
});

Route::get('careers-list', function () {
    $careers= DB::table('careers')->get();
    return response()->json($careers);
});


Route::post('insights/results', function (Request $request) {
    $insightController = new InsightController();
    $insightController->results($request);

});
Route::post('careers/add/indicators', function (Request $request) {
    $careerController = new CareerController();
    $careerController->addIndicators($request);

});
Route::get('careers/link/indicators/{id}', function ($id) {
    $careerController = new CareerController();
    $careerController->linkIndicators($id);

});

Route::post('/send','ContactController@sendEmail');


Route::resource('/test','TestController');

// to implement full authenticaion procedure
//Route::resource('/register','Auth\RegisterController');
//meanwhile implement registration view

// Route::get('register', function () {
//     return view('pages.register');
// });

Route::resource('insights','InsightController');
Route::resource('indicators','IndicatorController');
Route::resource('sliders','SliderController');
Route::resource('careers','CareerController');
Route::resource('contact','ContactController');
Route::resource('admin','AdminController');
Route::resource('admin/login','AdminLoginController');
Route::resource('about','AboutController');
Route::resource('faq','FaqController');
Route::resource('policy','PolicyController');
//Route::resource('admin/authenticate','AdminAuthenticateController');


<<<<<<< HEAD
Route::get('/', 'HomeController@index');
//Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> f9b6431969593fa8faa34c39efcc9ba32c3dc6f2
