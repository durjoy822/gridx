<?php

namespace App\Http\Controllers;

use App\Models\SocialMeida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SocialMediaController extends Controller
{
    public function socialIndex(){
        return view('admin.social-media.index',[
            'socials'=>SocialMeida::latest()->get(),
        ]);
    }
    public function socialAdd(){
        return view('admin.social-media.add');
    }
    public function socialStore(Request $request){
        SocialMeida::socialStore($request);
        Session::flash('success','Social Media info Add Successful!');
        return redirect()->route('social.index');
    }
    public function socialEdit($id){
        return view('admin.social-media.edit',[
            'social'=>SocialMeida::find($id),
        ]);
    }
    public function socialUpdate(Request $request,$id){
        SocialMeida::socialUpdate($request,$id);
        Session::flash('success','Social Media info Updated Successful!');
        return redirect()->route('social.index');
    }
    public function socialDelete($id){
        SocialMeida::socialDelete($id);
        Session::flash('success','Social Media info Deleted Successful!');
        return redirect()->route('social.index');
    }
}
