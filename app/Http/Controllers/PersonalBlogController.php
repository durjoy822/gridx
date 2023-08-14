<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalBlog;
use Illuminate\Support\Facades\Session;

class PersonalBlogController extends Controller
{
    public function  blogIndex(){
        return view('admin.personal-blog.index',[
            'personal_blog'=>PersonalBlog::all(),
        ]);
    }
    public function  blogAdd(){
        return view('admin.personal-blog.add');
    }
    public function  blogStore(Request $request){
        PersonalBlog::blogStore($request);
        Session::flash('success','blog add successfully');
        return redirect()->route('blog.index');
    }
    public function blogEdit($id){
        return view('admin.personal-blog.edit',[
            'blog'=>PersonalBlog::findOrFail($id),
        ]);
    }
}
