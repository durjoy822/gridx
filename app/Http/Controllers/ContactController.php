<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contactIndex(){
        return view('admin.contact.index',[
            'contacts'=>Contact::latest()->get(),
        ]);
    }
    public function contactAdd(){
        return view('admin.contact.add');
    }
    public function contactStore(Request $request){
        Contact::contactStore($request);
        Session::flash('success','Contact info Add successful!');
        return redirect()->route('contact.index');
    }
    public function contactEdit($id){
        return view('admin.contact.edit',[
            'contact'=>Contact::find($id),
        ]);
    }
    public function contactUpdate(Request $request,$id){
        Contact::contactUpdate($request,$id);
        Session::flash('success','Contact info Updated successful!');
        return redirect()->route('contact.index');
    }
    public function contactDelete($id){
        Contact::contactDelete($id);
        Session::flash('success','Contact info Delete successful!');
        return redirect()->route('contact.index');
    }
}
