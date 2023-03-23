<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       if(!empty($_GET['jobcategory'])){
        $category = $_GET['jobcategory'];
      }else{
           $category = "";
      }
      
      if(!empty($_GET['area'])){
        $area = $_GET['area'];
      }else{
           $area = "";
      }
      
      if(!empty($_GET['version'])){
        $version = $_GET['version'];
      }else{
           $version = "";
      }
      if(!empty($_GET['start_date'])){
        $start_date = $_GET['start_date'];
      }else{
        $start_date = "1980-01-01";
      }
      if(!empty($_GET['end_date'])){
        $end_date = $_GET['end_date'];
      }else{
        $end_date = "2080-01-01";
      }
        // ->whereIn('status', $valuesArray)
       $jobs = DB::table('informations_models')
      
       ->where('job_category', 'LIKE', '%' . $category .'%')
       ->where('version', 'LIKE', '%' . $version .'%')
       ->where('area', 'LIKE', '%' . $area .'%')
       ->where('start_date', '>=',  $start_date)
       ->where('end_date', '<=',  $end_date)
       ->get();
     
        return view('info.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data=array('title'=>$request->title,"description"=>$request->description,"job_code"=>$request->job_code,"uom"=>$request->uom,"job_category"=>$request->job_category,"start_date"=>$request->start_date,"end_date"=>$request->end_date,"version"=>$request->version,"area"=>$request->area);
       $result =   DB::table('informations_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Info added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Info Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/info');
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
          $job = DB::table('informations_models')->find($id);
         return view('info.edit',compact('job'));
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
      $data=array('title'=>$request->title,"description"=>$request->description,"job_code"=>$request->job_code,"uom"=>$request->uom,"job_category"=>$request->job_category,"start_date"=>$request->start_date,"end_date"=>$request->end_date,"version"=>$request->version,"area"=>$request->area);
         
       $result = DB::table('informations_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Info updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Info Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
       
        return Redirect::to('/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $result = DB::table('informations_models')->where('id', $id)->delete();
       
         if(!empty($result)){
             Session::flash('message', 'Info deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Info Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/info');
    }
}
