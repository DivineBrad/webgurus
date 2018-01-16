<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests\MenuFormRequest;
use DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = DB::table('menus')
        ->select('menus.*')
        ->get();
        return view('pages.menus.index')
        ->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuFormRequest $request)
    {

        $menu = new Menu();
        $menu->menu_name = $request->input('menu_name');
        $menu->menu_link = $request->input('menu_link');
        $menu->parent_id = $request->input('parent_id');
        $menu->save();
        return redirect()->route('menus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Menutypes = DB::table('menus')
        ->get();
        return view('pages.menus.profile', ['menu' => menu::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('pages.menus.edit')
        ->with('menu',$menu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuFormRequest $request, $id)
    {

        $menu = Menu::find($id);
        $menu->menu_name = $request->input('menu_name');
        $menu->menu_link = $request->input('menu_link');
        $menu->parent_id = $request->input('parent_id');
        $slider->save();

        return redirect()->route('sliders.index');
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
        $Menus = Menu::find($id);
        $Menus->delete();

        return redirect()->route('menus.index');
    }
}
