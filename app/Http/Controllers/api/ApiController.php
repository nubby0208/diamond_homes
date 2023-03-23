<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
class ApiController extends Controller
{
    
   
    
    public function register(Request $request)
    {
        
        
      $match =  DB::table('users')->where('email',$request->email)->first();
      if(!empty($match)){
           $array = array(
                'status' => false,
                'message' => 'Email Allready exist',
                );
      }else{
      $data['title'] = $request->title;
      $data['user_name'] = $request->user_name;
      $data['first_name'] = $request->first_name;
      $data['last_name'] = $request->last_name;
      $data['email'] = $request->email;
      $data['phone'] = $request->phone;
      $data['password'] = Hash::make($request->password);
      $data['city'] = $request->city;
      $data['language'] = $request->language;
      $data['country'] = $request->country;
      $data['address'] = $request->address;
      $data['idr_number'] = $request->idr_number;
      $data['user_type'] = 'user';
      $data['remember_token'] = $request->token;
       
      $result =   DB::table('users')->insert($data);
      $id = DB::getPdo()->lastInsertId();
       
      if($result > 0){
         $userdata =  DB::table('users')->where('id',$id)->first();
            $array = array(
                'status' => true,
                'message' => 'User Added succesfully',  
                'data'=>$userdata,                    
            );
            }else{
            $array = array(
                'status' => false,
                'message' => 'User not Added',
                );
            }
      }
            
    return json_encode($array);   

    }
    
    public function login(Request $request)
    {
        
      $user =  DB::table('users')->where('email',$request->email)->where('email',$request->email)->first();
      $password = $request->password;
      if(!empty($user)){
          $id = $user->id;
           $data['remember_token'] = $request->token;
            DB::table('users')->where('id',$id)->update($data);
          
         if (!Hash::check($password, $user->password)) {
          
             
              $array = array(
                'status' => false,
                'message' => 'Login Fail, pls check password',  
            );
            
             
         }else{
               
              $array = array(
                'status' => true,
                'message' => 'User Login successfully',
                'data' =>$user
            );
              
         }
      
      }else{
            $array = array(
                'status' => false,
                'message' => 'User Not Exist',  
            );
      }
            
     return json_encode($array);   

    }
    
     public function forgotPassword(Request $request)
    {
        
      $user =  DB::table('users')->where('email',$request->email)->first();
      
    
      if(!empty($user)){
          
            $to_name = $user->first_name." ".$user->last_name;
            $to_email = $user->email;
            $pass= rand(100, 9999);
            $data = array("name"=>$to_name, "otp" =>  $pass);
            
            Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject("Laravel Test Mail");
            $message->from("info@support24.in","Resert  Password");
            });
            $data1['otp'] = $pass;
              DB::table('users')->where('email',$request->email)->update($data1);
              $array = array(
                'status' => true,
                'message' => 'Send OTP your email ', 
                'otp' => $pass
            );
            
             
         }else{
               
              $array = array(
                'status' => false,
                'message' => 'Email not exist',
                
            );
              
         }
      
      
            
     return json_encode($array);   

    }
    
    
    public function verify_otp(Request $request)
    {
        
      $user =  DB::table('users')->where('email',$request->email)->where('otp',$request->otp)->first();
      
    
      if(!empty($user)){
          $data1['otp'] = NULL;
           DB::table('users')->where('email',$request->email)->update($data1);
            $array = array(
                'status' => true,
                'message' => 'OTP verified successfully', 
               
            );
            
             
         }else{
               
              $array = array(
                'status' => false,
                'message' => 'OTP not verified',
                
            );
              
         }
      
      
            
     return json_encode($array);   

    }
    
    public function resetPassword(Request $request)
    {
        
      $user =  DB::table('users')->where('email',$request->email)->first();
      if(!empty($user)){
          $data1['password'] = Hash::make($request->password);
           DB::table('users')->where('email',$request->email)->update($data1);
            $array = array(
                'status' => true,
                'message' => 'Password reset successfully', 
               
            );
            
             
         }else{
               
              $array = array(
                'status' => false,
                'message' => 'Password not reset',
                
            );
              
         }
      
      
            
     return json_encode($array);   

    }
    
    public function changePassword(Request $request)
    {
        
      $user =  DB::table('users')->where('id',$request->user_id)->first();
      if(!empty($user)){
           $password = $request->old_password;
           if (!Hash::check($password, $user->password)) {
          
             
              $array = array(
                'status' => false,
                'message' => 'Old password does not matched, pls enter currect password',  
            );
            
             
         }else{
             
           $data1['password'] = Hash::make($request->new_password);
           DB::table('users')->where('id',$request->user_id)->update($data1);  
              $array = array(
                'status' => true,
                'message' => 'Password change successfully',
               
            );
              
         }
         
             
         }else{
               
              $array = array(
                'status' => false,
                'message' => 'user not exist',
                
            );
              
         }
      
      
            
     return json_encode($array);   

    }
}
