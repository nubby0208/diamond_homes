<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ExemptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DB::table('exemptions_models')->get();
        return view('exemptions.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = DB::table('jobs_models')->get();
        $users = DB::table('users')->where('user_type','superadmin')->orWhere('user_type','admin')->get();
       return view('exemptions.create',compact('jobs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=array('exemptions_type'=>$request->exemptions_type,"exemptions_by"=>$request->exemptions_by,"job_id"=>$request->job_id,"eot_type"=>$request->eot_type,'eot_date_time'=>$request->eot_date_time,'reason'=>$request->reason,'additional_reason'=>$request->additional_reason,'notes'=>$request->notes,'acknowledged'=>$request->acknowledged,'acknowledged_by'=>$request->acknowledged_by);
       
       $result =   DB::table('exemptions_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Exemptions added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Exemptions Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/exemptions');
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
         $users = DB::table('users')->where('user_type','superadmin')->orWhere('user_type','admin')->get();
         $jobs = DB::table('jobs_models')->get();
         $notes = DB::table('exemptions_models')->find($id);
         return view('exemptions.edit',compact('notes','jobs','users'));
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
       $data=array('exemptions_type'=>$request->exemptions_type,"exemptions_by"=>$request->exemptions_by,"job_id"=>$request->job_id,"eot_type"=>$request->eot_type,'eot_date_time'=>$request->eot_date_time,'reason'=>$request->reason,'additional_reason'=>$request->additional_reason,'notes'=>$request->notes,'acknowledged'=>$request->acknowledged,'acknowledged_by'=>$request->acknowledged_by);
      
       $result = DB::table('exemptions_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Exemptions updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Exemptions Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/exemptions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $result = DB::table('exemptions_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Exemptions deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Exemptions Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/exemptions');
    }
}
