<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminProfileInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class AdminProfileInfoController extends Controller
{
    public function profileIndex(){
        return view('admin.profile',[
            'admin_info'=>AdminProfileInfo::where('admin_id',Auth::guard('admin')->user()->id)-> first(),
        ]);
    }


    public  function getImageURl($request){
        $image=$request->file('admin_photo');
        $imageName=$image->getClientOriginalName();
        $directory='admin-assets/admin-photo/';
        $image->move($directory,$imageName);
        return $directory.$imageName;
    }

    public function profileUpdate(Request $request){
//        dd($request->all());
        if(Auth::guard('admin')->check()){
            $profile = AdminProfileInfo::where('admin_id', auth()->guard('admin')->id())->first();
            if ($request->admin_photo) {
                if ($request->file('admin_photo')){
                    if (file_exists($profile->admin_photo)){
                        unlink($profile->admin_photo);
                    }
                    $profile->admin_photo=$this->getImageUrl($request);
                }
            }

                $profile->first_name=$request->first_name;
                $profile->last_name=$request->last_name;
                $profile->gender=$request->gender;
                $profile->birth_date=$request->birth_date;
                $profile->link=$request->link;
                $profile->address_one=$request->address_one;
                $profile->address_two=$request->address_two;
                $profile->city=$request->city;
                $profile->state=$request->state;
                $profile->country=$request->country;
                $profile->short_description=$request->short_description;
                $profile->long_description=$request->long_description;
                $profile->save();

            if ($profile->id){
                Session::flash('success','Profile info Updated Successful!');
                return redirect()->back();
            }

        }

         AdminProfileInfo::profileUpdate($request);
         Session::flash('success','Profile info Updated Successful!');
         return redirect()->route('dashboard');
    }





}
