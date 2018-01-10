<?php

namespace App\Http\Controllers;
use DB;
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
<<<<<<< HEAD
        return view('pages.home')->with(['testimonials' => $testimonials]);

        $about = DB::table('about')->get();
        $faq = DB::table('faq')->get();
        $policy = DB::table('policy')->get();
        return view('pages.home')
        ->with('testimonials', $testimonials)       
        ->with('about', $about)
        ->with('policy', $policy);
=======
        $sliders = DB::table('sliders')->get();

        return view('pages.home')
        ->with('testimonials', $testimonials)
        ->with('sliders', $sliders);
>>>>>>> f9b6431969593fa8faa34c39efcc9ba32c3dc6f2
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
