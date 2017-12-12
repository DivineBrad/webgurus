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

 Route::get('/', function () {
    return view('pages.home');
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


Route::resource('/test','TestController');

// to implement full authenticaion procedure
//Route::resource('/register','Auth\RegisterController');
//meanwhile implement registration view

Route::get('register', function () {
    return view('pages.register');
});

Route::resource('insights','InsightController');
Route::resource('indicators','IndicatorController');
Route::resource('careers','CareerController');
Route::resource('contact','ContactController');
Route::resource('admin','AdminController');
Route::resource('admin/login','AdminLoginController');
//Route::resource('admin/authenticate','AdminAuthenticateController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
