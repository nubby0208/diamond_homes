<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DB::table('orders_models')->get();
        return view('orders.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = DB::table('jobs_models')->get();
       return view('orders.create',compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array('data_type'=>$request->data_type,"comments"=>$request->comments,'job_id'=>$request->job_id);
       
       $result =   DB::table('orders_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Order added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Order Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/orders');
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
         $notes = DB::table('orders_models')->find($id);
         return view('orders.edit',compact('notes','jobs'));
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
       $data=array('data_type'=>$request->data_type,"comments"=>$request->comments,'job_id'=>$request->job_id);
       
       $result = DB::table('orders_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Order updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Order Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $result = DB::table('orders_models')->where('id', $id)->delete();
       if(!empty($result)){
             Session::flash('message', 'Order deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Order Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/orders');
    }
}
