<?php

namespace App\Http\Controllers;

use App\Models\Working_exprience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Working_exprienceController extends Controller
{
    public function experienceIndex(){
        return view('admin.working-experience.index',[
            'experiences'=>Working_exprience::latest()->get(),
        ]);
    }
    public function experienceAdd(){
        return view('admin.working-experience.add');
    }
    public function experienceStore(Request $request){
//        dd($request->all());
        Working_exprience::experienceStore($request);
        Session::flash('succ','Working Experience add successfull!');
        return redirect()->route('experience.index');
    }
    public function experienceEdit($id){
         return view('admin.working-experience.edit',[
             'experience'=>Working_exprience::find($id),
             ]);
    }
    public function experienceUpdate(Request $request, $id){
        Working_exprience::experienceUpdate($request,$id);
        Session::flash('success','Working Experience Updated Successfull!');
        return redirect()->route('experience.index');
    }
    public function experienceDelete($id){
        Working_exprience::experienceDelete($id);
        Session::flash('success','Working Experience Deleted Successfull!');
        return redirect()->route('experience.index');

    }

}
