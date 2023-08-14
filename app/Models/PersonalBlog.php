<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalBlog extends Model
{
    use HasFactory;

    public  static $blog, $imageUrl, $imageName,$image,$directory ;

    public static function getImageUrl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin-assets/blog/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function blogStore($request){
//        dd($request->all());
        $request->validate([
            'blog_title'        =>'required',
            'details'         =>'required',
        ],
            [
                'blog_title.required'       =>'Blog title field is Required',
                'details.required'        =>'Details field is Required',
            ]);
        self::$blog=new PersonalBlog();
        self::$blog->blog_title=$request->blog_title;
        self::$blog->side=$request->side;
        self::$blog->details=$request->details;
        self::$blog->creator='Md Nayem Hossain';
        self::$blog->image=self:: getImageUrl($request);
        self::$blog->save();

    }

}
