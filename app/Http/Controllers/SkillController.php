<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkillController extends Controller
{
    public function skillIndex(){
        return view('admin.skill.index',[
           'skills'=>Skill::all(),
        ]);
    }
    public function skillAdd(){
        return view('admin.skill.add');
    }
    public function skillStore(Request $request){
        Skill::skillStore($request);
        Session::flash('success','Skill Add Successful!');
        return redirect()->route('skill.index');
    }
    public function skillEdit($id){
        return view('admin.skill.edit',[
            'skill'=>Skill::find($id),
        ]);
    }
    public function skillUpdate(Request $request,$id){
        Skill::skillUpdate($request,$id);
        Session::flash('success','Skill Updated Successful!');
        return redirect()->route('skill.index');
    }
    public function skillDelete($id){
        Skill::skillDelete($id);
        Session::flash('success','Skill Deleted Successful!');
        return redirect()->route('skill.index');
    }
}
