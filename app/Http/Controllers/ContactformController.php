<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Session;

class ContactformController extends Controller
{
    public function SentMail( Request $request){
//        dd($request->all());
        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ];
        Mail::to('developer@devdurjoy.com')->send(new ContactMail($details));
        Session::flash('success','Message sent successfully!');
        return back();
    }



}
