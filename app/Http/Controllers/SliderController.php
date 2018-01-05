<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Http\Requests\SliderFormRequest;
use DB;

class SliderController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = DB::table('sliders')
        ->select('sliders.*')
        ->get();
        return view('pages.sliders.index')
        ->with('sliders',$sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderFormRequest $request)
    {
        $slider = new Slider();
        $slider->slider_name = $request->input('slider_name');
        $slider->slider_img = $request->input('slider_img');
        $slider->description = $request->input('description');
        $slider->save();
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Slidertypes = DB::table('sliders')
        ->get();
        return view('pages.sliders.profile', ['slider' => slider::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('pages.sliders.edit')
        ->with('slider',$slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderFormRequest $request, $id)
    {
        $slider = Slider::find($id);
        $slider->slider_name = $request->input('slider_name');
        $slider->slider_img = $request->input('slider_img');
        $slider->description=$request->input('description');
        $slider->save();
        return redirect()->route('sliders.index');
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
        $Sliders = Slider::find($id);
        $Sliders->delete();

        return redirect()->route('sliders.index');
    }
}
