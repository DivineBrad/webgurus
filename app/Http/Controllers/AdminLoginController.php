<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $menus = DB::table('menus')->get();
            return view('pages.admin.index')
            ->with('menus',$menus);
        }
    
}
