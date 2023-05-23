<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminProfileInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;

class AdminauthController extends Controller
{
    public function adminStore(Request $request){
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required|min:8|max:64',
        ],
            [
                'name.required'=>'please input your name!',
                'email.required'=>'You forget to use your email!',
                'password.required'=>'password is required!',
                'password.min'=>'Minimum 8 digit is required!',
                'password.max'=>'More then 64 digit are not allowed!',
            ]
        );
        $admin=new Admin();
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=FacadesHash::make($request->password);
        $admin->save();

            $admin_details= new AdminProfileInfo();
            $admin_details->admin_id=$admin->id;
            $admin_details->save();

        Auth::guard('admin')->login($admin);
        Session::flash('success','Successfully New Admin Register Done!');
        return redirect()->route('dashboard');




    }
    public function loginCheck( Request $request){
//        dd($request->all());
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->has('remember_token'))){
            Session::flash('success','Login Successfully Done!');
            return redirect()->route('dashboard');
        }else{
            Session::flash('warning','Ops, Information Wrong! please Provide a Right information.');
            return redirect()->back();
        }

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
