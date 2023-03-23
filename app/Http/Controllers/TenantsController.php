<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $notes = DB::table('tenants_models')->get();
        return view('tenants.index',compact('notes'));
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
       return view('tenants.create',compact('jobs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array('to_from'=>$request->to_from,"entered_by"=>$request->entered_by,"notified_to"=>$request->notified_to,"message"=>$request->message,'job_id'=>$request->job_id);
       
       $result =   DB::table('tenants_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Tenant added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Tenant Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/tenants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
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
         $notes = DB::table('tenants_models')->find($id);
         return view('tenants.edit',compact('notes','jobs','users'));
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
        
        $data=array('to_from'=>$request->to_from,"entered_by"=>$request->entered_by,"notified_to"=>$request->notified_to,"message"=>$request->message,'job_id'=>$request->job_id);
       $result = DB::table('tenants_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Tenant updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Tenant Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/tenants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('tenants_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Tenant deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Tenant Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/tenants');
    }
}
