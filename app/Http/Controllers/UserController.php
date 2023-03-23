<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\JobsModel;
use App\Exports\ExportJobs;
use App\Exports\ExportCompleteJobs;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
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
     
    public function get_jobs_data()
    {
         
        $file_name = 'jobs-'.Auth::user()->user_type.'-'.date('Y-M-d').''.date('Hs').'.xlsx';
        $data['file_name'] = $file_name;
        $data['user_id'] = Auth::user()->id;
        $data['file_type'] = 'jobs';
        $result =   DB::table('downloads_models')->insert($data);
         Excel::store(new ExportJobs, $file_name);
       
        return Excel::download(new ExportJobs, $file_name);
    }
    
    public function get_completejobs_data()
    {
        $file_name = 'jobs-'.Auth::user()->user_type.'-'.date('Y-M-d').''.date('Hs').'.xlsx';
        $data['file_name'] = $file_name;
        $data['user_id'] = Auth::user()->id;
        $data['file_type'] = 'jobs';
        $result =   DB::table('downloads_models')->insert($data);
        return Excel::download(new ExportCompleteJobs, $file_name);
    }
    
    public function get_downloads(Request $request)
    {
        $data['title'] = 'Downloads List';
        
         
         $_token = $request->_token;
        
        if(!empty($request->file_type)){
              $file_type = $request->file_type;
        }else{
              $file_type = '';
        }
         
        if(!empty($request->start_date)){
              $start_date = $request->start_date;
        }else{
              $start_date = '2000-01-01';
        }
         
        if(!empty($request->end_date)){
              $end_date =  $request->end_date;
        }else{
              $end_date = '2080-01-01';
        }
        
        if(!empty($_token)){
              
            $data['files'] = DB::table('downloads_models')
              ->where('file_type', 'LIKE', '%' . $file_type .'%')    
              ->where('created_at', '>=',  $start_date)
              ->where('created_at', '<=',  $end_date)
              ->get();
    
    
         }else{
             $data['files'] = DB::table('downloads_models')->get(); 
         }
         
        
        return view('user.download',$data);
    }
    
    
    public function index()
    {
        $users = DB::table('users')->where('user_type','!=','superadmin')->get();
        return view('user.index',compact('users'));
    }
    
    public function employees()
    {
        $data['title'] = 'Employees List';
        $data['users'] = DB::table('users')->where('user_type','user')->get();
        return view('user.employees',$data);
    }
    
    
    public function create_employee()
    {
        return view('user.create_employee');
    }
    
    public function stored_employee(Request $request)
    {
       $data['title'] = $request->title;
       $data['user_name'] = $request->user_name;
       $data['first_name'] = $request->first_name;
       $data['last_name'] = $request->last_name;
       $data['email'] = $request->email;
       $data['phone'] = $request->phone;
       $data['password'] = $request->password;
       $data['city'] = $request->city;
       $data['language'] = $request->language;
       $data['country'] = $request->country;
       $data['address'] = $request->address;
       $data['user_type'] = 'user';
       
       $result =   DB::table('users')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Employee added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Employee Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/employees');
    }
    
    public function edit_employee($id)
    {
        $data['title'] = 'Edit Employee';
        $data['user'] = DB::table('users')->where('id',$id)->first();
        return view('user.edit_employee',$data);
    }
    
    public function update_employee(Request $request, $id)
    {
       $data['title'] = $request->title;
       $data['user_name'] = $request->user_name;
       $data['first_name'] = $request->first_name;
       $data['last_name'] = $request->last_name;
       $data['email'] = $request->email;
       $data['phone'] = $request->phone;
       $data['city'] = $request->city;
       $data['language'] = $request->language;
       $data['country'] = $request->country;
       $data['address'] = $request->address;
       
        $result = DB::table('users')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Employee updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Employee Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
       
        return Redirect::to('/employees');
    }
    
    
    
    public function change_status(Request $request, $id)
    {
     
       $result = DB::table('users')->where('id', $id)->limit(1)->update(array('user_type' => $request->user_type));
       echo "1"; die;
        return back();
        // $users = DB::table('users')->where('user_type','!=','superadmin')->get();
        // return view('user.index',compact('users'));
    }
    
    public function destroy($id)
    {
        
       $result =  DB::table('users')->where('id',$id)->delete();
        if(!empty($result)){
             Session::flash('message', 'User deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'User Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
         return back();
    }
    
    
    public function inforesources()
    {
        $data['title'] = 'Resources List';
        $data['info_data'] = DB::table('inforesources_models')->get();
        return view('user.resources',$data);
    }
    
    
    public function inforesources_create()
    {
        $data['title'] = 'Create Resources';
        
        return view('user.create_resources',$data);
    }
    
    
    public function inforesources_store(Request $request)
    {
        $fileName = null;
        $filetype = null;
        if (request()->hasFile('file_name')) {
            $file = request()->file('file_name');
            $fileName = str_replace(" ","",$file->getClientOriginalName());
            $file->move('./uploads/inforesources/', $fileName);    
            $filetype = $file->getClientOriginalExtension();
        }
        // return $fileName;
       $data['resources_type'] = $request->resources_type;
       $data['name'] = $request->name;
       $data['expires'] = $request->expires;
       $data['file_name'] = $fileName;
       $data['file_type'] = $filetype;
       
       
        $result = DB::table('inforesources_models')->insert($data);
        if(!empty($result)){
             Session::flash('message', 'Resources added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Resources Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/info-resources');
    }
    
    public function inforesources_edit($id)
    {
        $data['title'] = 'Edit Resources';
        $data['user'] = DB::table('inforesources_models')->where('id',$id)->first();
        return view('user.edit_resources',$data);
    }
    
    
    public function inforesources_update(Request $request , $id)
    {
        $fileName = null;
        $filetype = null;
        if (request()->hasFile('file_name')) {
            $file = request()->file('file_name');
            $fileName = str_replace(" ","",$file->getClientOriginalName());
            $file->move('./uploads/inforesources/', $fileName);    
            $filetype = $file->getClientOriginalExtension();
        }
        // return $fileName;
       $data['resources_type'] = $request->resources_type;
       $data['name'] = $request->name;
       $data['expires'] = $request->expires;
       if(!empty($fileName)){
       $data['file_name'] = $fileName;
       $data['file_type'] = $filetype;
       }
       
       
        $result = DB::table('inforesources_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Resources updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Resources Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/info-resources');
    }
    
    
    public function inforesources_delete($id)
    {
       $result =  DB::table('inforesources_models')->where('id',$id)->delete();
        if(!empty($result)){
             Session::flash('message', 'Resources deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Resources Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/info-resources');
    }
    
    
    public function complete_job()
    {
        $data['title'] = 'Completed Jobs';
        $data['jobs_data'] = DB::table('jobs_models')->where('status','Completed')->get();
        return view('user.complete_job',$data);
    }
    
  
    
     
    
    
}
