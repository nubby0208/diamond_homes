<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $notes = DB::table('documents_models')->get();
        return view('documents.index',compact('notes'));
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
       return view('documents.create',compact('jobs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array('name'=>$request->name,"loaded_by"=>$request->loaded_by,"job_code"=>$request->job_code,"code"=>$request->code,"location"=>$request->location,"comments"=>$request->comments,'job_id'=>$request->job_id);
       
       $result =   DB::table('documents_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Document added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Document Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/documents');
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
         $notes = DB::table('documents_models')->find($id);
         return view('documents.edit',compact('notes','jobs','users'));
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
        $data=array('name'=>$request->name,"loaded_by"=>$request->loaded_by,"job_code"=>$request->job_code,"code"=>$request->code,"location"=>$request->location,"comments"=>$request->comments,'job_id'=>$request->job_id);
        $result = DB::table('documents_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Document updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Document Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/documents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('documents_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Document deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Document Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/documents');
    }
}
