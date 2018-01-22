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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

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
Route::post('insights/share', function (Request $request) {
    $insightController = new InsightController();
    $insightController->share($request);

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
Route::get('admin/newsletter','NewsletterController@create');
Route::post('/post-newsletter','NewsletterController@store');
Route::get('/newsletter_user_delete','NewsletterUserController@unsubscribe');
Route::get('/exception/no-user', function(){
    return view('pages.errors.nouser');
});
Route::get('/exception/500', function(){
    return view('pages.errors.500');
});



Route::post('/subscribe','HomeController@joinNewsletter');
Route::get('/newsfeed','NewsFeedController@Userindex');



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
Route::resource('menus','MenuController');
Route::resource('careers','CareerController');
Route::resource('newsfeeds','NewsFeedController');
Route::resource('contact','ContactController');
Route::resource('admin','AdminController');
Route::resource('newsletter_user','NewsletterUserController');
Route::resource('admin/login','AdminLoginController');
Route::resource('newsletters','NewsletterController');
Route::resource('about','AboutController');
Route::resource('faq','FaqController');
Route::resource('policy','PolicyController');
//Route::resource('admin/authenticate','AdminAuthenticateController');


