<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class TimeSpentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DB::table('timne_spent_models')->get();
        return view('timespents.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $jobs = DB::table('jobs_models')->get();
       $users = DB::table('users')->where('user_type','contractors')->get();
       return view('timespents.create',compact('jobs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array('contact_type'=>$request->contact_type,"created_by"=>$request->created_by,"job_id"=>$request->job_id,"comments"=>$request->comments,'card_left'=>$request->card_left);
       
       $result =   DB::table('timne_spent_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Time spent added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Time spent Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/timespents');
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
         $users = DB::table('users')->where('user_type','contractors')->get();
         $notes = DB::table('timne_spent_models')->find($id);
         return view('timespents.edit',compact('notes','jobs','users'));
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
      $data=array('contact_type'=>$request->contact_type,"created_by"=>$request->created_by,"job_id"=>$request->job_id,"comments"=>$request->comments,'card_left'=>$request->card_left);
         $result = DB::table('timne_spent_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Time spent updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Time spent Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/timespents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $result = DB::table('timne_spent_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Time spent deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Time spent Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/timespents');
    }
}
