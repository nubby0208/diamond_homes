<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\JobsModel;
use App\Exports\ExportJobs;
use Maatwebsite\Excel\Facades\Excel;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
   
         $_token = $request->_token;
         
          if(!empty($request->notes)){
              $notes = $request->notes;
         }else{
              $notes = '';
         }
         
         if(!empty($request->assigned_to)){
              $assigned_to = $request->assigned_to;
         }else{
              $assigned_to = '';
         }
         
          if(!empty($request->customer)){
              $customer = $request->customer;
         }else{
              $customer = '';
         }
         
          if(!empty($request->priority)){
              $priority = $request->priority;
         }else{
              $priority = '';
         }
         
          if(!empty($request->start_date)){
              $start_date = $request->start_date;
         }else{
              $start_date = '2000-01-01';
         }
         
        
         
         if(!empty( $request->end_date)){
              $end_date =  $request->end_date;
         }else{
              $end_date = '2080-01-01';
         }
         
         
         if(!empty($request->status)){
              $status = $request->status;
         }else{
              $status = ['New','Waiting Approval','Started','Completed','Cancelled'];
         }
         
         if(!empty($request->type)){
              $type = $request->type;
         }else{
               $type = ['Scoping','Car','Trade','GGS Only','Left Card'];
         }
        
        
         
       
         
         if(!empty($_token)){
              
              $jobs = DB::table('jobs_models')
              ->where(function($query) use ($status)
                {
                    $query->whereIn('status', $status);
                })
                ->where(function($query) use ($type)
                {
                      $query->whereIn('type', $type);
                })
         
              ->where('priority', 'LIKE', '%' . $priority .'%')
          
              ->where('client_name', 'LIKE', '%' . $customer .'%')
              ->where('assigned', 'LIKE', '%' . $assigned_to .'%')
              ->where('notes', 'LIKE', '%' . $notes .'%')
              ->where('created_at', '>=',  $start_date)
              ->where('created_at', '<=',  $end_date)
              ->get();
    
    
         }else{
            $jobs = DB::table('jobs_models')
            ->get();  
         }  
        
     
        return view('jobs.index',compact('jobs'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // if($request->file('notes')){
        //     $file= $request->file('notes');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('/uploads'), $filename);
        //     $notes= $filename;
        // }else{
        //      $notes = '';
        // }
     
         $data=array('title'=>$request->title,"description"=>$request->description,"order_no"=>$request->order_no,"address"=>$request->address,"external_job_no"=>$request->external_job_no,"ecd"=>$request->ecd,"type"=>$request->type,"client_name"=>$request->client_name,"priority"=>$request->priority,"assigned"=>$request->assigned,"allocation"=>$request->allocation,"from_date"=>$request->from_date,"to_date"=>$request->to_date,"status"=>$request->status,"ret_rem"=>$request->ret_rem,"comments"=>$request->comments,"approved"=>$request->approved,"value"=>$request->value,"your_ref"=>$request->your_ref,"cl_access_no"=>$request->cl_access_no,'notes'=>$request->notes);
       
       $result =   DB::table('jobs_models')->insert($data);
       if(!empty($result)){
             Session::flash('message', 'Job added successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Job Not added'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
        return Redirect::to('/jobs');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = DB::table('jobs_models')->find($id);
        $job_details = DB::table('jobd_details_models')->where('job_id',$id)->get();
        $exemptions = DB::table('exemptions_models')->where('job_id',$id)->get();
        $logs = DB::table('logs_models')->where('job_id',$id)->get();
        $notes = DB::table('notes_models')->where('job_id',$id)->get();
        $orders = DB::table('orders_models')->where('job_id',$id)->get();
        $other_works = DB::table('other_works_models')->where('job_id',$id)->get();
        $tenants = DB::table('tenants_models')->where('job_id',$id)->get();
        $time_spents = DB::table('timne_spent_models')->where('job_id',$id)->get();
        $documents = DB::table('documents_models')->where('job_id',$id)->get();
        $contacts = DB::table('contact_info_models')->where('job_id',$id)->get();
        $cards= DB::table('card_left_models')->where('job_id',$id)->get();
        return view('jobs.show',compact('jobs','job_details','exemptions','logs','notes','orders','other_works','tenants','time_spents','documents','contacts','cards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = DB::table('jobs_models')->find($id);
         return view('jobs.edit',compact('jobs'));
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
 
    //  if($request->file('notes')){
    //         $file= $request->file('notes');
    //         $filename= date('YmdHi').$file->getClientOriginalName();
    //         $file->move(public_path('/uploads'), $filename);
    //         $notes= $filename;
    //     }
      
        $data=array('title'=>$request->title,"description"=>$request->description,"order_no"=>$request->order_no,"address"=>$request->address,"external_job_no"=>$request->external_job_no,"ecd"=>$request->ecd,"type"=>$request->type,"client_name"=>$request->client_name,"priority"=>$request->priority,"assigned"=>$request->assigned,"allocation"=>$request->allocation,"from_date"=>$request->from_date,"to_date"=>$request->to_date,"status"=>$request->status,"ret_rem"=>$request->ret_rem,"comments"=>$request->comments,"approved"=>$request->approved,"value"=>$request->value,"your_ref"=>$request->your_ref,"cl_access_no"=>$request->cl_access_no,'notes'=>$request->notes);
         
        
       $result = DB::table('jobs_models')->where('id',$id)->update($data);
        if(!empty($result)){
             Session::flash('message', 'Job updated successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Job Not updated'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
       
        return Redirect::to('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
       $result = DB::table('jobs_models')->where('id', $id)->delete();
       
         if(!empty($result)){
             Session::flash('message', 'Job deleted successfully !'); 
             Session::flash('alert-class', 'alert-success'); 
       }else{
             Session::flash('message', 'Job Not deleted'); 
             Session::flash('alert-class', 'alert-danger'); 
       }
          return Redirect::to('/jobs');
    
    }
    
    
    public function get_jobs_data()
    {
        return Excel::download(new JobsModel, 'jobs.xlsx');
    }
    
   
   
    
    
}
