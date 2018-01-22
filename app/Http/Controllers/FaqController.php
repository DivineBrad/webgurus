<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Faq;
use App\Http\Requests\FaqFormRequest;
use DB;
class FaqController extends Controller
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
        $faq = DB::table('faq')
        ->select('faq.*')
        ->get();
        return view('pages.faq')
        ->with('faq',$faq)
        ->with('menus',$menus);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.faq.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqFormRequest $request)
    {
        $faq = new Faq();
        $faq->text1 = $request->input('text1');
        $faq->text2 = $request->input('text2');
        $faq->text3 = $request->input('text3');
        $faq->text4 = $request->input('text4');
        $faq->q1 = $request->input('q1');
        $faq->q2 = $request->input('q2');
        $faq->q3 = $request->input('q3');
        $faq->q4 = $request->input('q4');
        $faq->q5 = $request->input('q5');
        $faq->ans1 = $request->input('ans1');
        $faq->ans2 = $request->input('ans2');
        $faq->ans2_1 = $request->input('ans2_1');
        $faq->ans3 = $request->input('ans3');
        $faq->ans3_1 = $request->input('ans3_1');
        $faq->ans4 = $request->input('ans4');
        $faq->ans4_1 = $request->input('ans4_1');
        $faq->ans5 = $request->input('ans5');
        $faq->save();
        return redirect()->route('faq');
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
    public function update(FaqFormRequest $request, $id)
    {
        $faq = Faq::find($id);
        $faq->text1 = $request->input('text1');
        $faq->text2 = $request->input('text2');
        $faq->text3 = $request->input('text3');
        $faq->text4 = $request->input('text4');
        $faq->q1 = $request->input('q1');
        $faq->q2 = $request->input('q2');
        $faq->q3 = $request->input('q3');
        $faq->q4 = $request->input('q4');
        $faq->q5 = $request->input('q5');
        $faq->ans1 = $request->input('ans1');
        $faq->ans2 = $request->input('ans2');
        $faq->ans2_1 = $request->input('ans2_1');
        $faq->ans3 = $request->input('ans3');
        $faq->ans3_1 = $request->input('ans3_1');
        $faq->ans4 = $request->input('ans4');
        $faq->ans4_1 = $request->input('ans4_1');
        $faq->ans5 = $request->input('ans5');
        $faq->save();
        return redirect()->route('faq');
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
        $Faq = Faq::find($id);
        $Faq->delete();
        return redirect()->route('faq');
    }
}