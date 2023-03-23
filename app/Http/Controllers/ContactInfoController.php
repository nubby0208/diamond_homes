<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DB::table('contact_info_models')->get();
        return view('contacts.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = DB::table('jobs_models')->get();
       return view('contacts.create',compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array('contact_type'=>$request->contact_type,"contact_name"=>$request->contact_name,"job_id"=>$request->job_id,"communication_type"=>$request->communication_type,'value'=>$request->value,'preferred'=>$request->preferred);
       
       $result =   DB::table('contact_info_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Contact added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Contact Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/contact-info');
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
         $notes = DB::table('contact_info_models')->find($id);
         return view('contacts.edit',compact('notes','jobs'));
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
       $data=array('contact_type'=>$request->contact_type,"contact_name"=>$request->contact_name,"job_id"=>$request->job_id,"communication_type"=>$request->communication_type,'value'=>$request->value,'preferred'=>$request->preferred);
        $result = DB::table('contact_info_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Contact updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Contact Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/contact-info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('contact_info_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Contact deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Contact Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/contact-info');
    }
}
