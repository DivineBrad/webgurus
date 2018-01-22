<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\About;
use App\Http\Requests\SliderFormRequest;
use DB;
class AboutController extends Controller
{
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = DB::table('menus')->get();
        $about = DB::table('about')
        ->select('about.*')
        ->get();
        return view('pages.about')
        ->with('about',$about)
        ->with('menus',$menus);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.about.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutFormRequest $request)
    {
        $about = new About();
        $about->heading1 = $request->input('heading1');
        $about->heading2 = $request->input('heading2');
        $about->heading3 = $request->input('heading3');
        $about->para1 = $request->input('para1');
        $about->para2 = $request->input('para2');
        $about->para3 = $request->input('para3');
        $about->para4 = $request->input('para4');
        $about->para5 = $request->input('para5');
        $about->para6 = $request->input('para6');
        $about->para7 = $request->input('para7');
        $about->save();
        return redirect()->route('about');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutFormRequest $request, $id)
    {
        $about = About::find($id);
        $about->heading1 = $request->input('heading1');
        $about->heading2 = $request->input('heading2');
        $about->heading3 = $request->input('heading3');
        $about->para1 = $request->input('para1');
        $about->para2 = $request->input('para2');
        $about->para3 = $request->input('para3');
        $about->para4 = $request->input('para4');
        $about->para5 = $request->input('para5');
        $about->para6 = $request->input('para6');
        $about->para7 = $request->input('para7');
        $about->save();
        return redirect()->route('about');
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
        $About = About::find($id);
        $About->delete();
        return redirect()->route('about');
    }
}