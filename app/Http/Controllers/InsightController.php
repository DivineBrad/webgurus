<?php

namespace App\Http\Controllers;
use App\Mail\ShareInsights;
use Mail;
use Illuminate\Http\Request;
use App\Indicator;
use App\CareerPoints;
use App\IndicatorPoints;
use App\IndicatorType;
use App\Http\Resources\Indicator as IndicatorResource;
use App\Http\Resources\IndicatorType as IndicatorTypeResource;
use DB;


class InsightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    


    public function index()
    {
       /*  $indicators = Indicator::all();
        return view('pages.insights.index')
        ->with('indicators',$indicators); */
        $menus = DB::table('menus')->get();

        $indicators = Indicator::all();
        return view('pages.insights.index')
        ->with('indicators',$indicators)
        ->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function share(Request $request)
    {
        $sender = $request->input("sender");
        $to = $request->input("recipients");
       // $recipients = str_replace(",",";",$to);
        $recipients = explode(',',$to);
        
       // Mail::to($recipients)->send(new ShareInsights($request));
        Mail::to($recipients)->send(new ShareInsights($request));
        return redirect("/");
    }


    // Custom Function to get then pass the results to the /insights/results view
    public function results(Request $request)
    {
       //echo "Test";
       // get Json
       $results = $request->input('results');
       // convert json to array
       $results = json_decode($results, true);
        //  create a new collection instance from the array
        collect($results);
        echo view('pages.insights.results')->with('results',$results);
    }

    public function getInsights (Request $request){

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
         //limit to top 3 results
         $final_results = [];
         $end;
         if (sizeOf($career_points) <3 ){
             $end = sizeOf($career_points);
         }
         else {
             $end=3;
         }
         for ($i=0;$i<$end ;$i++){
            $final_results[$i]=$career_points[$i];
         }
        return $final_results;  
        
    //return response()->json($indicator_array); 
        

    }
}
