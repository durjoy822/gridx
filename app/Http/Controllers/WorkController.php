<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkController extends Controller
{
    public function workIndex(){
        return view('admin.work.index',[
            'works'=>Work::all(),
        ]);
    }
    public function workAdd(){
        return view('admin.work.add');
    }
    public function workStore(Request $request){
        Work::workStore($request);
        Session::flash('success','Add info success');
        return redirect()->route('work.home');
    }
    public function workEdit($id){
         return view('admin.work.edit',[
             'work'=>Work::findOrFail($id),
         ]);
    }
    public function workUpdate(Request $request, $id){
        Work::workUpdate( $request , $id);
        Session::flash('success','Project Updated successfully!');
        return redirect()->route('work.home');
    }
    public function workView($id){
        return view('admin.work.view',[
            'work'=>Work::find($id),
        ]);
    }
    public function workDelete($id){
        Work::workDelete($id);
        Session::flash('success','Delete info success');
        return redirect()->route('work.home');

    }

}
