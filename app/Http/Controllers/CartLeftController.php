<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartLeftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $notes = DB::table('card_left_models')->get();
        return view('cardlefts.index',compact('notes'));
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
       return view('cardlefts.create',compact('jobs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/uploads'), $filename);
            $photo= $filename;
        }else{
             $photo = '';
        }
        
       $data=array('action'=>$request->action,"assigned_to"=>$request->assigned_to,"lattitude"=>$request->lattitude,"longitude"=>$request->longitude,"distance"=>$request->distance,"photo"=>$photo,"reason"=>$request->reason,'job_id'=>$request->job_id);
       
       $result =   DB::table('card_left_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Card left added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Card left Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/cardlefts');
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
         $notes = DB::table('card_left_models')->find($id);
         return view('cardlefts.edit',compact('notes','jobs','users'));
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
         if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/uploads'), $filename);
            $photo= $filename;
        }else{
             $photo = '';
        }
        if(!empty($photo)){
            $data=array('action'=>$request->action,"assigned_to"=>$request->assigned_to,"lattitude"=>$request->lattitude,"longitude"=>$request->longitude,"distance"=>$request->distance,"photo"=>$photo,"reason"=>$request->reason,'job_id'=>$request->job_id);
       
        }else{
               $data=array('action'=>$request->action,"assigned_to"=>$request->assigned_to,"lattitude"=>$request->lattitude,"longitude"=>$request->longitude,"distance"=>$request->distance,"reason"=>$request->reason,'job_id'=>$request->job_id);
       
        }
        
        
        $result = DB::table('card_left_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Card left updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Card left Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/cardlefts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('card_left_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Card left deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Card left Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/cardlefts');
    }
}
