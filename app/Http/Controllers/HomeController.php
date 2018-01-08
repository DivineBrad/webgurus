<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

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
        return view('pages.home')->with(['testimonials' => $testimonials]);

        $about = DB::table('about')->get();
        $faq = DB::table('faq')->get();
        $policy = DB::table('policy')->get();
        return view('pages.home')
        ->with('testimonials', $testimonials)       
        ->with('about', $about)
        ->with('policy', $policy);
    }
}
