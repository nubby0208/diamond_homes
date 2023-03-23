<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class JobDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
        $notes = DB::table('jobd_details_models')->get();
        return view('jobdetails.index',compact('notes'));
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
       return view('jobdetails.create',compact('jobs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = array('location'=>$request->location,"job_code"=>$request->job_code,"description"=>$request->description,"uom"=>$request->uom,'job_id'=>$request->job_id,"damages"=>$request->damages,"notes"=>$request->notes,"quantity"=>$request->quantity,"rate"=>$request->rate,"total"=>$request->total,"variance"=>$request->variance,"complete"=>$request->complete,"completed_by"=>$request->completed_by,"pwrk_req"=>$request->pwrk_req,"exclude"=>$request->exclude,"pre_app"=>$request->preapp,"allocated"=>$request->allocated);
       $result =   DB::table('jobd_details_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Job Details added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Job Details Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/jobdetails');
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
         $notes = DB::table('jobd_details_models')->find($id);
         return view('jobdetails.edit',compact('notes','jobs','users'));
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
        $data = array('location'=>$request->location,"job_code"=>$request->job_code,"description"=>$request->description,"uom"=>$request->uom,'job_id'=>$request->job_id,"damages"=>$request->damages,"notes"=>$request->notes,"quantity"=>$request->quantity,"rate"=>$request->rate,"total"=>$request->total,"variance"=>$request->variance,"complete"=>$request->complete,"completed_by"=>$request->completed_by,"pwrk_req"=>$request->pwrk_req,"exclude"=>$request->exclude,"pre_app"=>$request->preapp,"allocated"=>$request->allocated);
         $result = DB::table('jobd_details_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Job Details updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Job Details Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/jobdetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('jobd_details_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Job Details deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Job Details Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/jobdetails');
    }
}
