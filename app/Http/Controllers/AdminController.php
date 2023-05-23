<?php

namespace App\Http\Controllers;

use App\Mail\PasswordReset;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\Logo;
use App\Models\Project;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Fluent\Concerns\Has;
use Mail;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home',[
//            'project'=>Project::count(),
//            'blog'=>Blog::count(),
//            'subscriber'=>Subscriber::count(),
        ]);
    }
    public function login(){
        return view('admin.auth.login',[
            'logo'=>Logo::where('status',1)->first(),
        ]);
    }
    public function register(){
        return view('admin.auth.register',[
            'logo'=>Logo::where('status',1)->first(),
        ]);
    }



    public function forgotPass(){
        return view('admin.auth.forgot-form');
    }
    public function sentEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email'
        ]);
        $token = \Str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
        $message= $token ;
        Mail::send('admin.auth.reset-link',['token'=>$token], function ($message) use($request){
            $message ->to($request->email);
            $message->subject('Password Reset ');
        });

       Session::flash('success','We have successfully email your Password reset link!');
       return back();

    }
    public function resetPassform($token){
        return view('admin.auth.password-reset-form',[
            'token'=>$token,
        ]);
    }
    public function newPassword(Request $request ){
        $request->validate([
            'email'=> 'required|email|exists:admins,email',
            'password'=>'required|string|min:6|max:12',
            'confirm_password'=>'required',
        ],
        [
            'password.min'=>'please input minimum 6 character!',
            'password.max'=>'please input maximum 12 character!'
        ]);
        $update_password=DB::table('password_reset_tokens')
            ->where([
                'email'=>$request->email,
                'token'=>$request->token,
            ])->first();
        if (!$update_password){
            Session::flash('warning','Reset link has Expired!');
            return back();
        }
        $admin=Admin::where('email',$request->email)
            ->update(['password'=>Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where(['email'=>$request->email])->delete();
        Session::flash('success','Password reset Successfully!');
        return redirect()->route('login');

    }

}
