<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function projectIndex(){
        return view('admin.project.index',[
            'projects'=>Project::latest()->get(),
        ]);
    }
    public function projectAdd(){
        return view('admin.project.add');
    }
    public function projectStore(Request $request){
        Project::projectStore($request);
        Session::flash('success','Project Add Successful!');
        return redirect()->route('project.index');
    }
    public function projectEdit($id){
        return view('admin.project.edit',[
            'project'=>Project::find($id),
        ]);

    }
    public function projectDetails($id){
        return view('admin.project.details',[
            'details'=>Project::find($id),
        ]);

    }
    public function projectUpdate(Request $request,$id){
        Project::projectUpdate($request,$id);
        Session::flash('success','Project Updated Successful!');
        return redirect()->route('project.index');
    }
    public function projectDelete($id){
        Project::projectDelete($id);
        Session::flash('success','Project Deleted Successful!');
        return redirect()->route('project.index');
    }
}
