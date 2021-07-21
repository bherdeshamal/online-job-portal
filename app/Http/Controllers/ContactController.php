<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
use App\Mail\adminmail;

use App\Mail\replyback;
use Session;

class ContactController extends Controller
{
    public function sendadmin(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'email' =>'required|email',
            'message' =>'required'
        ]);
        $data= array(
            'name' =>$request->name,
            'email' =>$request->email,
            'message'=>$request->message
        );
        Mail::to('shamalbherde02@gmail.com')->send(new adminmail($data)); 
        $category = new Contact();
        $category->name = request('name');
        $category->email = request('email');
        $category->message = request('message');
        $category->save();
        return redirect()->back()->with('success', 'Details are Send to Admin');
    }

    public function display()
    {
        $category = Contact::latest()->paginate(4);
        return view('frontend.view-contact', ['contacts'=>$category]);
    }

    public function revertBack($id)
    {
        $category = Contact::find($id);
        return view('frontend.revert-back', compact('category'));
    }

    public function sendreply(Request $request,$id)
    {
        $this->validate($request, [
               'reply' =>'required|max:255'
              ]);
         $categoryData = Contact::find($id);

        $categoryData->name = $request->name;
        $categoryData->email = $request->email;
        $categoryData->reply = $request->reply;
        $categoryData->save();

        $email=$request->email;
        
        $data =[
            'name'=>$categoryData['name'],
            'email'=>$categoryData['email'],
            'reply'=>$categoryData['reply'],
           
        ];
         Mail::to('shamalbherde02@gmail.com')->send(new replyback($data)); 
         Session::flash('success','Reply send Successfully.');
         return redirect('/view-contact');
    }
}
