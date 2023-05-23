<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfileInfo extends Model
{
    use HasFactory;
//    public static $profile, $image, $imageUrl,$imageName, $directory;
//
//    public static function getImageURl($request){
//        self::$image=$request->file('admin_photo');
//        self::$imageName=self::$image->getClientOriginalName();
//        self::$directory='admin-assets/admin-photo/';
//        self::$image->move(self::$directory,self::$imageName);
//        return self::$directory.self::$imageName;
//    }
//
//    public static function profileUpdate($request){
////        dd($request->all());
//        if ($request->file('admin_photo')){
//            self::$profile->admin_photo      =self::getImageUrl($request);
//        }
//        self::$profile=new AdminProfileInfo();
//        self::$profile->admin_id=$request->admin_id;
//        self::$profile->first_name=$request->first_name;
//        self::$profile->last_name=$request->last_name;
//        self::$profile->admin_photo=$request->admin_photo;
//        self::$profile->gender	=$request->gender	;
//        self::$profile->birth_date	=$request->birth_date;
//        self::$profile->link	=$request->link	;
//        self::$profile->address_one	=$request->address_one	;
//        self::$profile->address_two	=$request->address_two	;
//        self::$profile->city	=$request->city	;
//        self::$profile->state	=$request->state;
//        self::$profile->country	=$request->country	;
//        self::$profile->save();
//
//
//}








}
