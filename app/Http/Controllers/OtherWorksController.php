<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class OtherWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DB::table('other_works_models')->get();
        return view('otherworks.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $jobs = DB::table('jobs_models')->get();
       return view('otherworks.create',compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array('order_id'=>$request->order_id,"client_ref"=>$request->client_ref,"status"=>$request->status,"priority"=>$request->priority,"description"=>$request->description,'job_id'=>$request->job_id);
       
       $result =   DB::table('other_works_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Other work added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Other work Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/otherworks');
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
         $notes = DB::table('other_works_models')->find($id);
         return view('otherworks.edit',compact('notes','jobs'));
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
        $data=array('order_id'=>$request->order_id,"client_ref"=>$request->client_ref,"status"=>$request->status,"priority"=>$request->priority,"description"=>$request->description,'job_id'=>$request->job_id);
        $result = DB::table('other_works_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Other work updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Other work Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/otherworks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $result = DB::table('other_works_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Other work deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Other work Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/otherworks');
    }
}
