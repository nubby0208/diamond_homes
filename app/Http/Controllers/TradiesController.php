<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TradiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Tradies directory";
        $data['tradies'] = DB::table('tradies_models')->get();
        return view('tradies.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Create Tradie";
        return view('tradies.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array('tradie_name'=>$request->tradie_name,"phone"=>$request->phone);
       
       $result =   DB::table('tradies_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Tradie added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Tradie Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/tradies-directory');
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
         $data['title'] =  "Edit Tradie";
         $data['tradies_data'] = DB::table('tradies_models')->find($id);
         return view('tradies.edit',$data);
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
        $data=array('tradie_name'=>$request->tradie_name,"phone"=>$request->phone);
       $result = DB::table('tradies_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Tradies updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Tradies Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/tradies-directory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $result = DB::table('tradies_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Tradies deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Tradies Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
         return Redirect::to('/tradies-directory');
    }
}
