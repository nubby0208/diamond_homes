<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class FinanceController extends Controller
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
        $users = DB::table('users')->where('user_type','finances')->get();
        return view('finance.index',compact('users'));
    }
    
    public function destroy($id)
    {
        $result = DB::table('users')->where('id',$id)->delete();
         if(!empty($result)){
             Session::flash('message', 'Finance deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Finance Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
         return back();
    }
}
