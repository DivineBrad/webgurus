<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Newsletter_users;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // call from db
        $testimonials = DB::table('testimonials')->get();
        $sliders = DB::table('sliders')->get();

        return view('pages.home')
        ->with('testimonials', $testimonials)
        ->with('sliders', $sliders);
    }

    public function joinNewsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|max:40',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $id=Auth::id();
            $newsletter_user=new Newsletter_users();
            $newsletter_user->email = $request->email;
            $newsletter_user->user_id =$id;
            if($newsletter_user->save()){
                \Session::flash('newsletter','You have successfully subscribed to our newsletters. Get ready to hear from us');
                return redirect('/');
            }
        }
        
    }
}
