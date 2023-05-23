<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoController extends Controller
{
    public function logoIndex(){
        return view('admin.logo.index',[
            'logos'=>Logo::latest()->get(),
        ]);
    }
    public function logoAdd(){
        return view('admin.logo.add');
    }
    public function logoStore(Request $request){
//        return $request->all();
        Logo::logoStore($request);
        Session::flash('success','Add info success');
        return redirect()->route('logo.index');
    }
    public function logoEdit($id){
        return view('admin.logo.edit',[
            'logo'=>Logo::find($id),
        ]);
    }
    public function logoUpdate(Request $request,$id){
        Logo::logoUpdate($request,$id);
        Session::flash('success','Update info success');
        return redirect()->route('logo.index');
    }
    public function logoDelete($id){
        Logo::logoDelete($id);
        Session::flash('success','Delete info success');
        return redirect()->route('logo.index');
    }
}
