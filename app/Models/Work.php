<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    public static $work , $image, $imageUrl,$imageName, $directory;

    public static function getImageURl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin-assets/work/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function workStore($request){
//        dd($request->all());
        $request->validate([
            'category'      =>'required',
            'project_name'  =>'required',
            'server_link'   =>'required',
            'github_link'   =>'required',

        ],
            [
                'category.required'     =>'Category field Required',
                'project_name.required' =>'Project Name field is Required',
                'server_link.required'  =>'Server link field is Required',
                'github_link.required'  =>'git hub link field is Required',
            ]);
        self::$work= new Work();
        self::$work->category=$request->category;
        self::$work->side=$request->side;
        self::$work->project_name=$request->project_name;
        self::$work->server_link=$request->server_link;
        self::$work->github_link=$request->github_link;
        self::$work->short_description=$request->short_description;
        self::$work->status=$request->status;
        self::$work->image=self::getImageUrl($request);
        self::$work->save();
    }

    public static function workUpdate($request,$id){
        self::$work= Work::find($id);
        if ($request->file('image')){
            if(file_exists(self::$work->image)){
                unlink(self::$work->image);
            }
            self::$work->image      =self::getImageUrl($request);
        }
        self::$work->category=$request->category;
        self::$work->side=$request->side;
        self::$work->project_name=$request->project_name;
        self::$work->server_link=$request->server_link;
        self::$work->github_link=$request->github_link;
        self::$work->short_description=$request->short_description;
        self::$work->status=$request->status;
        self::$work->save();
    }
    public static function workDelete($id){
        self::$work= Work::find($id);
        if (file_exists(self::$work->image)){
            unlink(self::$work->image);
        }
        self::$work->delete();

    }
}
