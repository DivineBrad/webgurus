<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Newsletter_users;
use Mail;
use App\Mail\NewsletterSubscribedConfirmation;
use Validator;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class NewsletterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'email' => 'email|max:40|unique:newsletter_users',
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
                Mail::to($newsletter_user->email)->send(new NewsletterSubscribedConfirmation($newsletter_user->id));                 
                return redirect('/');
            }
        }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }

    public function unsubscribe(Request $request){
        $id=$request->query('id');
        // try{
        $newsletterUser=Newsletter_users::findOrFail($id)->delete();
            
        // }
        // catch(Exception $e){
        //     throw new ModelNotFoundException($e->getMessage());
        // }
        
        return redirect('/');
    }
}
