<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    public  static $education;


    public static function educationStore($request){
        $request->validate([
            'institute_name'        =>'required',
            'joining_year'          =>'required',
            'completed_year'        =>'required',
            'subject'               =>'required',
        ],
            [
                'working_place.required'       =>'working_place field Required',
                'joining_year.required'        =>'joining_year field Required',
                'completed_year.required'      =>'completed_year  field Required',
                'subject.required'             =>'subject Field Required',
            ]);
        self::$education= new Education();
        self::$education->institute_name =$request->institute_name;
        self::$education->joining_year =$request->joining_year;
        self::$education->completed_year =$request->completed_year;
        self::$education->subject =$request->subject;
        self::$education->save();
    }

    public static function educationUpdate($request,$id){
        self::$education=Education::find($id);
        self::$education->institute_name =$request->institute_name;
        self::$education->joining_year =$request->joining_year;
        self::$education->completed_year =$request->completed_year;
        self::$education->subject =$request->subject;
        self::$education->save();
    }
    public static function educationDelete($id){
        self::$education=Education::find($id);
        self::$education->delete();
    }

}
