<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Policy;
use App\Http\Requests\PolicyFormRequest;
use DB;
class PolicyController extends Controller
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
        $policy = DB::table('policy')
        ->select('policy.*')
        ->get();
        return view('pages.policy')
        ->with('policy',$policy)
        ->with('menus',$menus);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.policy.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PolicyFormRequest $request)
    {
        $policy = new Policy();
        $policy->text12 = $request->input('text12');
        $policy->text13 = $request->input('text13');
        $policy->topic1 = $request->input('topic1');
        $policy->text1 = $request->input('text1');
        $policy->topic2 = $request->input('topic2');
        $policy->text2 = $request->input('text2');
        $policy->topic3 = $request->input('topic3');
        $policy->text3 = $request->input('text3');
        $policy->topic4 = $request->input('topic4');
        $policy->text4 = $request->input('text4');
        $policy->topic5 = $request->input('topic5');
        $policy->text5 = $request->input('text5');
        $policy->topic6 = $request->input('topic6');
        $policy->text6 = $request->input('text6');
        $policy->topic7 = $request->input('topic7');
        $policy->text7 = $request->input('text7');
        $policy->topic8 = $request->input('topic8');
        $policy->text8 = $request->input('text8');
        $policy->topic9 = $request->input('topic9');
        $policy->text9 = $request->input('text9');
        $policy->topic10 = $request->input('topic10');
        $policy->text10 = $request->input('text10');
        $policy->topic11 = $request->input('topic11');
        $policy->text11 = $request->input('text11');
        $policy->save();
        return redirect()->route('policy');
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
        $policy = Policy::find($id);
        $policy->text12 = $request->input('text12');
        $policy->text13 = $request->input('text13');
        $policy->topic1 = $request->input('topic1');
        $policy->text1 = $request->input('text1');
        $policy->topic2 = $request->input('topic2');
        $policy->text2 = $request->input('text2');
        $policy->topic3 = $request->input('topic3');
        $policy->text3 = $request->input('text3');
        $policy->topic4 = $request->input('topic4');
        $policy->text4 = $request->input('text4');
        $policy->topic5 = $request->input('topic5');
        $policy->text5 = $request->input('text5');
        $policy->topic6 = $request->input('topic6');
        $policy->text6 = $request->input('text6');
        $policy->topic7 = $request->input('topic7');
        $policy->text7 = $request->input('text7');
        $policy->topic8 = $request->input('topic8');
        $policy->text8 = $request->input('text8');
        $policy->topic9 = $request->input('topic9');
        $policy->text9 = $request->input('text9');
        $policy->topic10 = $request->input('topic10');
        $policy->text10 = $request->input('text10');
        $policy->topic11 = $request->input('topic11');
        $policy->text11 = $request->input('text11');
        $policy->save();
        return redirect()->route('policy');
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
        $Policy = Policy::find($id);
        $Policy->delete();
        return redirect()->route('policy');
    }
}