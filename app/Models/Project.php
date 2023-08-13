<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public static $project, $image, $imageUrl,$imageName, $directory;

    public static function getImageURl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin-assets/project/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }


    public static function projectStore($request){
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

        self::$project                      =new Project();
        self::$project->category            =$request->category;
        self::$project->side                =$request->side;
        self::$project->project_name        =$request->project_name;
        self::$project->server_link         =$request->server_link;
        self::$project->github_link         =$request->github_link;
        self::$project->github_link         =$request->github_link;
        self::$project->short_description   =$request->short_description;
        self::$project->short_description   =$request->short_description;
        self::$project->icon                =$request->icon;
        self::$project->status              =$request->status;
        if ($request->image){
            self::$project->image               =self:: getImageURl($request);
        }
        self::$project->save();
    }

    public static function projectUpdate($request,$id){
        self::$project                      =Project::find($id);
        if ($request->file('image')){
            if(file_exists(self::$project->image)){
                unlink(self::$project->image);
            }
            self::$project->image      =self::getImageUrl($request);
        }
        self::$project->category            =$request->category;
        self::$project->side                =$request->side;
        self::$project->project_name        =$request->project_name;
        self::$project->server_link         =$request->server_link;
        self::$project->github_link         =$request->github_link;
        self::$project->github_link         =$request->github_link;
        self::$project->short_description   =$request->short_description;
        self::$project->short_description   =$request->short_description;
        self::$project->icon                =$request->icon;
        self::$project->status              =$request->status;
        self::$project->save();
    }

    public static function projectDelete($id){
            self::$project=Project::find($id);
            if (file_exists(self::$project->image))
            {
                unlink(self::$project->image);
            }
            self::$project->delete();
        }


}
