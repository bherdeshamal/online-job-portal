<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Category;
use App\Applicant;
use App\User;
use App\Company;
use App\Job;
use Auth;
use Session;
use DB;
use Mail;
use App\Mail\Detailmail;
use Carbon\Carbon;

class IndexpageController extends Controller
{
    public function jobs()
    {  
      $key = Category::select('id','profile')->distinct()->get()->sortByDesc('id');
      $pkey = Company::select('id','name','requirement','Location','profile')->distinct()->get()->sortByDesc('id');
      return view('frontend.jobs')->with(compact('key','pkey'));
    }

    public function jobsDetails($id)
    {  
      $product = Company::find($id);
      return view('frontend.job-details')->with(compact('product'));
    }

    public function viewjobs()
    {  
      $key = Category::select('id','profile')->distinct()->get()->sortByDesc('id');
      $pkey = Company::select('id','name','requirement','Location','profile')->distinct()->get()->sortByDesc('id');
      return view('frontend.view-jobs')->with(compact('key','pkey'));
    }

    public function viewDetails($id)
    {  
      $product = Company::find($id);
      return view('frontend.view-details')->with(compact('product'));
    }

    public function register()
    {
        return view('frontend.signup');
    }

    public function check(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
              ]);

        if($request->isMethod('post'))
        {
            $data =$request->all();
       
          if(Auth::attempt(['email'=>$data['email'],'password'=> $data['password'],'role'=>0]))
          {
                return redirect('/account')->with('success','login Successfully');
          }
          else
          {
          return redirect()->back()->with('error','Invalid Email or Password');
          } 
        }
    }

    public function storeDevice(Request $request)
       {
        $this->validate($request, [
           'name'=>'string|required',
           'email' => 'email|required',
           'password'=>'string|required|min:8|max:12|same:cpassword',
           'cpassword'=>'required|min:8|max:12'
              ]);

          if($request->isMethod('post'))
          {
            $data =$request->all();
            $usersCount = User::where('email',$data['email'])->count();
            if($usersCount >0)
            {
              return redirect('/account')->with('error','Email Already Exists');
            }
            else
            {
              $user = new User();
              $user->name = $data['name'];
              $user->email = $data['email'];
              $user->password = bcrypt($data['password']);
              $user->cpassword = bcrypt($data['cpassword']);
              $user->role=0;
              $user->save();
              if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
              {
                return redirect('/account')->with('success','Register Successfully');
              }
            }
          }
       }

       public function adminregister()
       {
           return view('admin.admin-register');
       }
   
       public function admincheck(Request $request)
       {
        if($request->isMethod('post'))
        {
            $data =$request->all();
               if(Auth::attempt(['email'=>$data['email'],'password'=> $data['password'],'role'=>1]))
               {
                   return redirect('/dashboard')->with('success','login Successfully');
               }
               else
               {
                return redirect()->back()->with('error','Unauthorized User');
               } 
         }
       }


       public function store(Request $request)
       {
          if($request->isMethod('post'))
          {
            $data =$request->all();
            $usersCount = User::where('email',$data['email'])->count();
            if($usersCount >0)
            {
              return redirect()->back()->with('error','Email Already Exists');
            }
            else
            {
              $user = new User();
              $user->name = $data['name'];
              $user->email = $data['email'];
              $user->password = bcrypt($data['password']);
              $user->role=1;
              $user->save();
              if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
              {
                return redirect('/dashboard')->with('success','Register Successfully');
              }
            }
          }
       }

       public function addtocart(Request $request)
       {
            $user_email = Auth::User()->email;
            $data=$request->all();
              if(empty(Auth::user()->email))
              {
                  $data['user_email']='';
              }
              else{
                  $data['user_email']=Auth::user()->email;
              }

              $session_id = Session::get('session_id');
              if(empty($session_id))
              {
                  $session_id = str_random(40);
                  Session::put('session_id',$session_id);
              }
              $countProducts=DB::table('jobs')->where(['product_id'=>$data['product_id'],'session_id'=>$session_id])->count();
              
                   if($countProducts>0)
                   {
                       return redirect()->back()->with('success','Application already exists in list');
                   }
                   else
                   {
                      $cart = new Job();
                      $cart->product_id = request('product_id');
                      $cart->name = request('name');
                      $cart->desc = request('desc');
                      $cart->profile = request('profile');
                      $cart->type = request('type');
                      $cart->Location = request('Location');
                      $cart->requirement = request('requirement');
                      $cart->user_email = $data['user_email'];
                      $cart->session_id = $session_id;
                      $cart->save();

                      $email = $user_email;
                        $data= array(
                        'name' =>$request->name,
                        'desc' =>$request->desc,
                        'profile' =>$request->profile,
                        'type' =>$request->type,
                        'Location' =>$request->Location,
                        'requirement' =>$request->requirement,
                        'user_email' =>$user_email,
                        );

                      Mail::send('emails.useremail',$data,function($message)use($email)
                      {
                          $message->to($email)->subject('Online JOb Portal');
                      });

                      $email = $user_email;
                        $data= array(
                        'name' =>$request->name,
                        'desc' =>$request->desc,
                        'profile' =>$request->profile,
                        'type' =>$request->type,
                        'Location' =>$request->Location,
                        'requirement' =>$request->requirement,
                        'user_email' =>$user_email,
                        );
                      Mail::to('shamalbherde02@gmail.com')->send(new detailmail($data)); 
                   }
                   return redirect('my-application')->with('success','Job added successfully ');
       }
   
       public function cart()
       {
            $session_id = Session::get('session_id');
            $userCart = Job::where(['session_id'=>$session_id])->get();
           return view('frontend.my-application')->with(compact('userCart'));
       }
   
       public function checkstatus()
       {
          $session_id = Session::get('session_id');
          $userCart = Job::where(['session_id'=>$session_id])->get();
          return view('frontend.status')->with(compact('userCart'));
       }

       public function deletecartitem($id=null)
       {
          $userCart= Job::where('id',$id)->delete();
          return redirect('my-application')->with('success','Application delete from list');
       }
   
       public function vieworders()
       {
         $order = Job::with('orders')->latest()->paginate(5);
         return view('admin.track-order', ['orders'=>$order]);
       }

       public function viewappli()
       {
         $order = User::latest()->paginate(5);
         return view('admin.track-status', ['orders'=>$order]);
       }

       public function proceedorder($id)
        {
        if(Job::where('id',$id)->exists())
        {
            $orders = Job::find($id);
            return view('admin.proceed',compact('orders'));
        }
        else
        {
            return redirect()->back()->with('success','No Job Found');
        }
       }

    public function trackingstatus(Request $request,$id)
    {
      $user_email = Auth::User()->email;
      $user_id = Auth::User()->id;
      $orders = Job::find($id);

          $orders->tracking_msg=$request->input('tracking_msg');
          $orders->update();

            $email = $user_email;
            $data= array(
            'tracking_msg' =>$request->tracking_msg,
              'user_id'=>$user_id,
            'user_email' => $user_email,
            );
            Mail::send('emails.trackemail',$data,function($message)use($email)
            {
                $message->to($email)->subject('Job Application Status');
            });
            return redirect('view-applications')->with('success','Tracking Status Updated');
    }

    public function deleteapplication($id=null)
    {
        $userCart= Job::where('id',$id)->delete();
        return redirect('view-applications')->with('success','Application delete from list');
    }

    public function viewCharts()
    {
    $current_month_users=Company::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->month)->count();
                          
    $last_month_users=Company::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(1))->count();

    $last_last_month_users=1;

    $last_last_last_month_users=2;

    $current_month_app=User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->month)->count();
                          
    $last_month_app=User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(1))->count();

    $last_last_month_app=User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(2))->count();

    $last_last_last_month_app=User::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(3))->count();

    $Jobs=Job::all()->count();

    $categories=Category::all()->count();

    $companies=Company::all()->count();

    $applicants=User::all()->count();

    $pending_status = Job::where('tracking_msg','=','pending')->count();
    $selected_status = Job::where('tracking_msg','=','Selected')->count();
    $rejected_status = Job::where('tracking_msg','=','Rejected')->count();
    $inprocess_status = Job::where('tracking_msg','=','Technical Round')->count();

      return view('admin.dashboard')->with(compact('current_month_users','last_month_users','last_last_month_users','last_last_last_month_users','current_month_app','last_month_app','last_last_month_app','last_last_last_month_app','Jobs','applicants','companies','categories','pending_status','selected_status','rejected_status','inprocess_status'));
    }



    public function viewUserCharts()
    {
  
    $pending_status = Job::where('tracking_msg','=','pending')->count();
    $selected_status = Job::where('tracking_msg','=','Selected')->count();
    $rejected_status = Job::where('tracking_msg','=','Rejected')->count();
    $inprocess_status = Job::where('tracking_msg','=','Technical Round')->count();

      return view('admin.Charts')->with(compact('pending_status','selected_status','rejected_status','inprocess_status'));
    }

    public function viewCompanyCharts()
    {
    
    $current_month_app=Company::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->month)->count();
                          
    $last_month_app=Company::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(1))->count();

    $last_last_month_app=Company::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(2))->count();

    $last_last_last_month_app=Company::whereYear('created_at',Carbon::now()->year)->whereMonth('created_at',Carbon::now()->submonth(3))->count();

    

      return view('admin.Company_Chart')->with(compact('current_month_app','last_month_app','last_last_month_app','last_last_last_month_app'));
    }
}
