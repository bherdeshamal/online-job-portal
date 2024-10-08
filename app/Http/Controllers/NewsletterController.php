<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function storesubcription(Request $request)
    {
        if($request->isMethod('post'))
        {
          $data =$request->all();
          
          $usersCount = Newsletter::where('user_email',$data['user_email'])->count();
          if($usersCount >0)
          {
            return redirect()->back()->with('error','You have already subscribe to E-Shopper');
          }
          else
          {
            $user = new Newsletter();
            $user->user_email = request('user_email');
            $user->save();

            $user_email = $request->user_email;
            $msgdata=[
               '$user_email' =>$request->user_email,
               '$admin_reply'=>$request->admin_reply,
            ];
            Mail::send('emails.subscription_reply',$msgdata,function($message)use($user_email)
            {
                $message->to($user_email)->subject('Thanks For Subscription');
            });
            Session::flash('success','Reply send Successfully.');
            return redirect()->back()->with('success','Subscription done Successfully');
         }
        }
    }

    public function display()
    {
        $category=Newsletter::latest()->paginate(3);
        return view('frontend.view-subscription', ['newsletters'=>$category]);
    }

    public function sendreply()
    {
      $user = Newsletter::all();
      return view('frontend.sendreply',compact('user'));
    }

    public function sendupdate(Request $request)
    {
      if($request->isMethod('post'))
      {
        $data =$request->all();
          $user_email = $request->user_email;
          $admin_reply = $request->admin_reply;
            $data=[
                'user_email' =>$request->user_email,
                'admin_reply'=>$request->admin_reply,
            ];
          
          $user = Newsletter::all();
          foreach ($user as $a)
          {
            Mail::send('emails.updates',$data,function($message)use($a)
              {
                  $message->to($a->user_email)->subject('New Updates From Online Job Portal');
              });
          }
      }
      Session::flash('success','Reply send Successfully.');
      return redirect('view-subscription');
    }

    public function deletesubscription($id)
    {
      $banner = Newsletter::find($id);
	    $banner->delete();
      Session::flash('danger','Subscriber deleted Successfully.');
      return redirect('view-subscription');
    }
}
