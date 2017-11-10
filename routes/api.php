<?php

use Illuminate\Http\Request;
use App\Http\Controllers\InsightController;
use App\CareerPoints;
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

     // Get joined table for career indicators and careers
     $career_points=[];
     $first_run=0;
     $career_indicators = DB::table('career_indicators')
     ->join('careers', 'career_indicators.career_id', '=', 'careers.career_id')
     ->select('career_indicators.*', 'careers.title','careers.description')
     ->get();
     $indicators = DB::table('indicators')->get();
     // Get Indicator ID to use for comparisons 
     foreach($indicator_array as $value){
      
     foreach ($indicators as $val){
         if ($val->indicator==$value->indicator){
            $value->indicator_id=$val->indicator_id;
            break;
         }
     }
       
     }

     // Search and Compare Logic to get careers associate with user selected indicators
     foreach ($indicator_array as $value){
         $career_match=false;
        
     foreach ($career_indicators as $val){
        if($val->indicator_id==$value->indicator_id){
        // Create new career Points object to store the carerr info associated with user selected indicator
        foreach($career_points as $item){
            $career_match=false;
            if ($item->career == $val->title){
            $item->add_points($value->points);
            $career_match=true;
            break;
             }
        }
        if (!$career_match){
            $career_points[]= new CareerPoints($val->career_id,$val->title,
            $val->description,$value->points);
            
        }
        
     }
        
     }

     }
     // Sort career_points array based on points, descending order
     for ($i=0;$i<sizeof($career_points);$i++){
        if ($i<(sizeof($career_points)-1)){
           if ($career_points[$i]->total_points < $career_points[$i+1]->total_points)  {
               $career_temp = $career_points[$i];
               $career_points[$i] =  $career_points[$i+1];
               $career_points[$i+1]=$career_temp;

           }
        }
       
     }

     


//return response()->json($indicator_array); 
    return response()->json($career_points); 
});
  
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });