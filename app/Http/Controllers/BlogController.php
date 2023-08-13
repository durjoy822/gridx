<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function blogIndex(){
        $blogs=Blog::latest()->get();
        return view('admin.blog.index',compact("blogs"));
    }
    public function blogAdd(){
        return view('admin.blog.add');
    }
    public function blogStore(Request $request){
        Blog::blogStore($request);
        Session::flash('success','Blog Add Successful');
        return redirect()->route('blog.index');
    }
    public function blogEdit($id){
        return view('admin.blog.edit',[
            'blog'=>Blog::find($id),
        ]);
    }
    public function blogUpdate(Request $request,$id){
        Blog::blogUpdate($request,$id);
        Session::flash('success','Blog Updated Successful');
        return redirect()->route('blog.index');
    }
    public function blogDelete($id){
        Blog::blogDelete($id);
        Session::flash('success','Blog Deleted Successful');
        return redirect()->route('blog.index');
    }
}
