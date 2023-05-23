<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    public function educationIndex(){
        return view('admin.education.index',[
            'educations'=>Education::latest()->get(),
        ]);
    }
    public function educationAdd(){
        return view('admin.education.add');
    }
    public function educationStore(Request $request){
        Education::educationStore($request);
      Session::flash('success','Educational Qualification Add Successful!');
      return redirect()->route('education.index');
    }

    public function educationEdit($id){
        return view('admin.education.edit',[
            'education'=>Education::find($id),
        ]);
    }
    public function educationUpdate(Request $request, $id ){
        Education::educationUpdate($request, $id);
        Session::flash('success','Educational Qualification Update Successful!');
        return redirect()->route('education.index');
    }
    public function educationDelete($id ){
        Education::educationDelete( $id);
        Session::flash('success','Educational Qualification Deleted Successful!');
        return redirect()->route('education.index');
    }
}
