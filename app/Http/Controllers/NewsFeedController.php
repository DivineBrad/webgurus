<?php

namespace App\Http\Controllers;

use App\NewsFeed;
use Illuminate\Http\Request;
use DB;

class NewsFeedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $newsFeeds = NewsFeed::all();
        return view('pages.newsfeeds.index')
        ->with('newsFeeds',$newsFeeds)
        ->with('menus',$menus);
    }

    /**
     * Display a listing of the resource for users.
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex()
    {
        $newsFeeds = NewsFeed::all();
        return view('pages.newsfeed')
        ->with('newsFeeds',$newsFeeds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.newsfeeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
           [
               'title' => 'required|min:5',
               'date' => 'required',
               'info' =>'required'

           ]
           );
       NewsFeed::create($request->all());
       return Redirect('newsfeeds');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newsFeed = NewsFeed::findOrFail($id);
        return view('pages.newsfeeds.profile')
                ->with('newsFeed',$newsFeed);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsFeed = NewsFeed::findOrFail($id);
        return view('pages.newsfeeds.edit')
                ->with('newsFeed',$newsFeed);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'title' => 'required|min:5',
            'date' => 'required',
            'info' =>'required'

        ]
        );
    NewsFeed::find($id)->update($request->all());
    return Redirect('newsfeeds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsFeed  $newsFeed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsFeed::findOrFail($id)->delete();

        return Redirect('newsfeeds');
    }
}
