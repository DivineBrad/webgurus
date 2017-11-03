<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Career;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //IndicatorResource::Collection(Indicator::where('type_id','=',$type_id)->get());
        
        $careers = DB::table('careers')
        ->join('career_groups', 'careers.group_id', '=', 'career_groups.group_id')
        ->select('careers.*', 'career_groups.group_title')
        ->get();
        return view('pages.careers.index')
        ->with('careers',$careers);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // query for career_groups
        $careergroups = DB::table('career_groups')
        ->get();
        return view('pages.careers.create')
        ->with('careergroups',$careergroups);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career = new Career();
        $career->title = $request->input('title');
        $career->description = $request->input('description');
        $career->group_id=(int)($request->input('careergroups'));
        $career->save();
        return redirect()->route('careers.index');
        

        // $career = app\Career::create(['title' => $request->title,'description' => $request->description]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $careergroups = DB::table('career_groups')
        ->get();
        return view('pages.careers.profile', ['career' => Career::findOrFail($id)])
        ->with('careergroups',$careergroups);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $careergroups = DB::table('career_groups')
        ->get();
        $career = Career::findOrFail($id);
        return view('pages.careers.edit')
        ->with('careergroups',$careergroups)
        ->with('career',$career);
      
    }

    public function link_indicators($id)
    {
        $careergroups = DB::table('career_groups')
        ->get();
        $career = Career::findOrFail($id);
        return view('pages.careers.link_indicators')
        ->with('careergroups',$careergroups)
        ->with('career',$career);
      
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
        $career = Career::find($id);
        $career->title = $request->input('title');
        $career->description = $request->input('description');
        $career->group_id=(int)($request->input('careergroups'));
        $career->save();
        return redirect()->route('careers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $careers = Career::find($id);
        $careers->delete();

        // redirect
        return redirect()->route('careers.index');
    }
}
