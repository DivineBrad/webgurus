<?php

use Illuminate\Http\Request;
use App\Http\Controllers\InsightController;
use App\CareerPoints;
use App\IndicatorPoints;
use App\Indicator;
use App\Slider;
use App\Menu;
use App\Http\Resources\Indicator as IndicatorResource;
use App\Http\Resources\Slider as SliderResource;
use App\Http\Resources\Menu as MenuResource;
use App\IndicatorType;
use App\Http\Resources\IndicatorType as IndicatorTypeResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/sliders', function () {
    return SliderResource::Collection(Slider::all());
   
   
});

Route::get('/menus', function () {
    return MenuResource::Collection(Menu::all());
   
   
});
Route::get('/indicators', function () {
    return IndicatorResource::Collection(Indicator::all());
   
   
}); 



Route::get('/indicator/{id}', function ($id) {
    return new IndicatorResource(Indicator::findOrFail($id));
   
   }); 
 Route::get('/indicators/{type}', function ($type) {
    $type_id= IndicatorType::where('type','=',$type)->value('type_id'); 
    return IndicatorResource::Collection(Indicator::where('type_id','=',$type_id)->get());
   
   }); 
   Route::POST('/insights/results', function (Request $request) {
     $insights = new InsightController();
     $career_points=$insights->getInsights($request);
     return response()->json($career_points); 

});
  
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });