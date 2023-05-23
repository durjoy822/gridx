<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMeida extends Model
{
    use HasFactory;
    public static $social;


    public static function socialStore($request){
        $request->validate([
            'name'=>'required',
            'icon'=>'required',
        ]);
        self::$social=new SocialMeida();
        self::$social->name=$request->name;
        self::$social->link=$request->link;
        self::$social->icon=$request->icon;
        self::$social->status=$request->status;
        self::$social->save();
    }
    public static function socialUpdate($request,$id){
        self::$social=SocialMeida::find($id);
        self::$social->name=$request->name;
        self::$social->link=$request->link;
        self::$social->icon=$request->icon;
        self::$social->status=$request->status;
        self::$social->save();
    }
    public static function socialDelete($id){
        self::$social=SocialMeida::find($id);
        self::$social->delete();
    }

}
