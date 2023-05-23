<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Working_exprience extends Model
{
    use HasFactory;
    public static $experience;


    public static function experienceStore($request){
        $request->validate([
            'working_place'        =>'required',
            'joining_year'         =>'required',
            'year_left'             =>'required',
            'working_dep'      =>'required',
        ],
            [
                'working_place.required'       =>'working_place field Required',
                'joining_year.required'        =>'joining_year field Required',
                'year_left.required'            =>'year left field Required',
                'working_dep.required'     =>'working_dep Field Required',
            ]);
//        dd($request->all());
            self::$experience=new Working_exprience();
            self::$experience->working_place=$request->working_place;
            self::$experience->joining_year=$request->joining_year;
            self::$experience->year_left=$request->year_left;
            self::$experience->working_dep=$request->working_dep;
            self::$experience->save();

    }
    public static function experienceUpdate($request, $id){
        self::$experience=Working_exprience::find($id);
        self::$experience->working_place=$request->working_place;
        self::$experience->joining_year=$request->joining_year;
        self::$experience->year_left=$request->year_left;
        self::$experience->working_dep=$request->working_dep;
        self::$experience->save();

    }
    public static function experienceDelete( $id){
        self::$experience=Working_exprience::find($id);
        self::$experience->delete();

    }
}
