<?php

use Illuminate\Http\Request;

use App\IndicatorPoints;
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
    $traits = $request->input('traits.data');
    $skills = $request->input('skills.data');
    $passion = $request->input('passion.data');
    // $indicator_points = new IndicatorPoints();
    // $indicator_points->load(1,"Test",3);
     $indicator_array= array();
    
    foreach ($skills as $value){
        
        $indicator_array[]=  new IndicatorPoints($value,1);
     }
     foreach ($traits as $value){
        
        $indicator_array[]= new IndicatorPoints($value,2);
     }
     foreach ($passion as $value){
        
        $indicator_array[]=  new IndicatorPoints($value,4);
     }

//     return response()->json([ 
//     'skills' => $indicator_array[1]->indicator,
//     'traits' => $indicator_array[0]->indicator,
//     'passion' => $indicator_array[2]->indicator,
//    ]

return response()->json($indicator_array); 
});
  
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });