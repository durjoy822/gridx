<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public static $skill;

    public static function skillStore($request){
//       dd($request->all());
        $request->validate([
                'name'=>'required',
                'skill_percentage'=>'required',
                'chart_color'=>'required',
                'icon'=>'required',
        ],
        [
            'name.required'=>'Skill Category field is Required!',
            'skill_percentage.required'=>'skill_percentage field is Required!',
            'chart_color.required'=>'chart_color field is Required!',
            'icon.required'=>'Icon is Required!',
        ]);
        self::$skill                    =new Skill();
        self::$skill->name              =$request->name;
        self::$skill->skill_percentage  =$request->skill_percentage;
        self::$skill->skill_percentage  =$request->skill_percentage;
        self::$skill->chart_color       =$request->chart_color;
        self::$skill->icon              =$request->icon;
        self::$skill->status            =$request->status;
        self::$skill->save();

    }
    public static function skillUpdate($request,$id){
        self::$skill=Skill::find($id);
        self::$skill->name=$request->name;
        self::$skill->skill_percentage=$request->skill_percentage;
        self::$skill->skill_percentage=$request->skill_percentage;
        self::$skill->chart_color=$request->chart_color;
        self::$skill->icon=$request->icon;
        self::$skill->status=$request->status;
        self::$skill->save();

    }
    public static function skillDelete($id){
        self::$skill=Skill::find($id);
        self::$skill->delete();

    }
}
