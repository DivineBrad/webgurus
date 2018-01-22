<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use Auth;
use App\Newsletter_users;
use Mail;
use App\Mail\NewsletterSubscribedConfirmation;
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
        $menus = DB::table('menus')->get();
        

        $about = DB::table('about')->get();
        $faq = DB::table('faq')->get();
        $policy = DB::table('policy')->get();
        return view('pages.home')
        ->with('testimonials', $testimonials)       
        ->with('about', $about)
        ->with('faq', $faq)
        ->with('policy', $policy)
        ->with('menus', $menus)
        ->with('sliders', $sliders);
        

        
    }

    public function joinNewsletter(Request $request)
    {
           
    }
}
