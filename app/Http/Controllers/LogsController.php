<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DB::table('logs_models')->get();
        return view('logs.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $jobs = DB::table('jobs_models')->get();
      $users = DB::table('users')->get();
       return view('logs.create',compact('jobs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data=array('action'=>$request->action,"description"=>$request->description,"job_id"=>$request->job_id,"user"=>$request->user,'dispatch_id'=>$request->dispatch_id);
       
       $result =   DB::table('logs_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Log added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Log Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/logs');
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
        $jobs = DB::table('jobs_models')->get();
         $users = DB::table('users')->get();
         $notes = DB::table('logs_models')->find($id);
         return view('logs.edit',compact('notes','jobs','users'));
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
        $data=array('action'=>$request->action,"description"=>$request->description,"job_id"=>$request->job_id,"user"=>$request->user,'dispatch_id'=>$request->dispatch_id);
        $result = DB::table('logs_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Log updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Log Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/logs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $result = DB::table('logs_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Log deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Log Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/logs');
    }
}
