<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class ContractorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->where('user_type','contractors')->get();
        return view('contractor.index',compact('users'));
    }
    
    
    public function timesheets()
    {
        $data['title'] = "Jobs Time Sheet";
        $data['timesheets'] =  DB::table('jobs_models')->orderBy('id', 'DESC')->get();
        return view('contractor.timesheets',$data);
    }
    
    
    public function details($id)
    {
        $users = DB::table('users')->where('user_type','contractors')->find($id);
        return view('contractor.details',compact('users'));
    }
    
    
    
    
    public function destroy($id)
    {
       $result = DB::table('users')->where('id',$id)->delete();
         if(!empty($result)){
             Session::flash('message', 'Contractor deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Contractor Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
         return back();
    }
}
