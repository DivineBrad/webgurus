<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use DB;

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
}
