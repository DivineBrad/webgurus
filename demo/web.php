<?php
use App\Http\Controllers\InsightController;
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

Route::post('insights/results', function (Request $request) {
    $insightController = new InsightController();
    $insightController->results($request);

});




Route::resource('/test','TestController');
Route::resource('/register','Auth\RegisterController');
//Route::resource('/','HomeController');
Route::resource('insights','InsightController');
Route::resource('indicators','IndicatorController');
Route::resource('careers','CareerController');
Route::resource('contact','ContactController');
Route::resource('admin','AdminController');
Route::resource('admin/login','AdminLoginController');
//Route::resource('admin/authenticate','AdminAuthenticateController');
