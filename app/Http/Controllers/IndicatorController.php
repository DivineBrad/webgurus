<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicator;
use App\Http\Requests\IndicatorFormRequest;
use DB;

class IndicatorController extends Controller
{


    public function __construct()
    {
        $this->middleware('admin');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $indicators = DB::table('indicators')
        ->join('indicator_types', 'indicators.type_id', '=', 'indicator_types.type_id')
        ->select('indicators.*', 'indicator_types.type')
        ->get();
        return view('pages.indicators.index')
        ->with('indicators',$indicators);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.indicators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndicatorFormRequest $request)
    {
        $indicator = new Indicator();
        $indicator->indicator = $request->input('indicator');
        $indicator->description = $request->input('description');
        $indicator->type_id=(int)($request->input('areas'));
        $indicator->save();
        return redirect()->route('indicators.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicatortypes = DB::table('indicator_types')
        ->get();
        return view('pages.indicators.profile', ['indicator' => Indicator::findOrFail($id)])
        ->with('indicatortypes',$indicatortypes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicator = Indicator::findOrFail($id);
        return view('pages.indicators.edit')
        ->with('indicator',$indicator);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IndicatorFormRequest $request, $id)
    {
        $indicator = Indicator::find($id);
        $indicator->indicator = $request->input('indicator');
        $indicator->description = $request->input('description');
        $indicator->type_id=(int)($request->input('areas'));
        $indicator->save();
        return redirect()->route('indicators.index');
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
        $indicators = Indicator::find($id);
        $indicators->delete();

        return redirect()->route('indicators.index');
    }
}
