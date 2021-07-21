<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\User;
use App\Applicant;
use Auth;

class AccountController extends Controller
{
    public function account(Request $request)
    {
        $user_id = Auth::User()->id;
        $userDetails= User::find($user_id);
    
        if($request->isMethod('post'))
          {
             $data=$request->all();
               // echo "<pre>"; print_r($data); die;
  
              if(empty($data['name']))
              {
                return redirect()->back()->with('success','Please Enter Your Name');
              }
          
              if(empty($data['address']))
              {
                return redirect()->back()->with('success','Please Enter Your Address');
              }
              if(empty($data['city']))
              {
                return redirect()->back()->with('success','Please Enter Your City');
              }
              if(empty($data['state']))
              {
                return redirect()->back()->with('success','Please Enter Your State');
              }
              if(empty($data['country']))
              {
                return redirect()->back()->with('success','Please Enter Your Country');
              }
              if(empty($data['pincode']))
              {
                return redirect()->back()->with('success','Please Enter Your Pincode');
              }
              if(empty($data['mobile']))
              {
                return redirect()->back()->with('success','Please Enter Your Mobile');
              }
              if(empty($data['degree']))
              {
                return redirect()->back()->with('success','Please Enter Your stream');
              }
              if(empty($data['hsc']))
              {
                return redirect()->back()->with('success','Please Enter Your 12th percentage');
              }
              if(empty($data['ssc']))
              {
                return redirect()->back()->with('success','Please Enter Your 10th percentage');
              }
              if(empty($data['degree_percent']))
              {
                return redirect()->back()->with('success','Please Enter Your degree percentage');
              }
              if(empty($data['university']))
              {
                return redirect()->back()->with('success','Please Enter Your university');
              }
              
                $user=User::find($user_id);
                
                $user->name= $data['name'];
                $user->applicant_father_name= $data['applicant_father_name'];
                
                $user->address= $data['address'];
                $user->city= $data['city'];
                $user->state= $data['state'];
                $user->country= $data['country'];
                $user->pincode= $data['pincode'];
                $user->mobile= $data['mobile'];
                $user->hsc= $data['hsc'];
                $user->ssc= $data['ssc'];
                $user->degree= $data['degree'];
                $user->degree_percent= $data['degree_percent'];
                $user->year_of_completion= $data['year_of_completion'];
                $user->dob= $data['dob'];
                $user->technology= $data['technology'];
                $user->university= $data['university'];
                //  $user->dob= $data['dob'];
                
                $user->save();
                return redirect()->back()->with('success', 'Account Updated Successfully');
          
          }
        
            return view('frontend.account')->with(compact('userDetails'));
            
   }
     
}
