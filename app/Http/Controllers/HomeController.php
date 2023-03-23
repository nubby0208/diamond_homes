<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
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
        return view('home');
    }
    
    
    public function profile()
    {
        $data['title'] ='My Profile';
        $id = Auth::user()->id;
        $data['users'] = DB::table('users')->where('id',$id)->first();
        return view('profile',$data);
    }
    
    public function update_profile(Request $request, $id)
    {
       
          $data['title'] = $request->title;
       $data['user_name'] = $request->first_name.$id;
       $data['first_name'] = $request->first_name;
       $data['last_name'] = $request->last_name;
       $data['email'] = $request->email;
       $data['phone'] = $request->phone;
       
       $result = DB::table('users')->where('id',$id)->update($data);
       if(!empty($result)){
             Session::flash('message', 'Profile updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Profile Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/profile');
    }
    
    
     public function update_address(Request $request, $id)
    {
       
       $data['country'] = $request->country;
       $data['city'] = $request->city;
       $data['address'] = $request->address;
       $data['language'] = $request->language;
       $data['idr_number'] = $request->idr_number;
       
       $result = DB::table('users')->where('id',$id)->update($data);
       if(!empty($result)){
             Session::flash('message', 'Address updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Address Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/profile');
    }
    
    
}
