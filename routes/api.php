<?php

use Illuminate\Http\Request;

use App\Indicator;
use App\Http\Resources\Indicator as IndicatorResource;

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

Route::get('/indicator', function () {
    return IndicatorResource::Collection(Indicator::all());
   
}); 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::get("/test",function(){
   
 });