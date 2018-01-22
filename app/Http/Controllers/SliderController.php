<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Http\Requests\SliderFormRequest;
use DB;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
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

        $file = $request->file('slider_img');
        $filename = $file->getClientOriginalName();

        $slider = new Slider();
        $slider->slider_name = $request->input('slider_name');
        $slider->slider_img = $filename;
        $slider->slider_header = $request->input('slider_header');
        $slider->description = $request->input('description');
        $slider->save();


         //$file->move_uploaded_file($file,"img/");
         //Storage::put('upload/images/'.$filename, file_get_contents($request->file('slider_img')->getRealPath()));
         Storage::disk('uploads')->put($filename, file_get_contents($request->file('slider_img')->getRealPath()));
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
    
        //$file = $request->file('slider_img');
        //$filename = $request->file('slider_img')->getClientOriginalName();

        $slider = Slider::find($id);
        $slider->slider_name = $request->input('slider_name');
        $slider->slider_img = $filename;
        $slider->slider_header = $request->input('slider_header');
        $slider->description=$request->input('description');
        $slider->save();

       // Storage::disk('uploads')->put($filename, file_get_contents($request->file('slider_img')->getRealPath()));

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
