<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    public static $logo, $image, $imageUrl,$imageName, $directory;

    public static function getImageURl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin-assets/logo/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }


    public static function logoStore($request){
        self::$logo= new Logo();
        self::$logo->name=$request->name;
        self::$logo->status=$request->status;
        self::$logo->image=self::getImageUrl($request);
        self::$logo->save();
    }

    public static function logoUpdate($request, $id){
        self::$logo=Logo::find($id);
        if ($request->file('image')){
            if(file_exists(self::$logo->image)){
                unlink(self::$logo->image);
            }
            self::$logo->image      =self::getImageUrl($request);
        }
        self::$logo->name=$request->name;
        self::$logo->status=$request->status;
        self::$logo->save();

    }
    public static function logoDelete($id){
        self::$logo= Logo::find($id);
            if (file_exists(self::$logo->image)){
                unlink(self::$logo->image);
            }
            self::$logo->delete();

    }
}
