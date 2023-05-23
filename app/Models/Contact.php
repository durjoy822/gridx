<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public static $contact;

    public static function contactStore($request){
//        dd($request->all());
        self::$contact                  =new Contact();
        self::$contact->email_1       =$request->email_1;
        self::$contact->email_2       =$request->email_2;
        self::$contact->icon_1        =$request->icon_1;
        self::$contact->Num_1         =$request->Num_1;
        self::$contact->Num_2         =$request->Num_1;
        self::$contact->icon_2        =$request->icon_2;
        self::$contact->location_1    =$request->location_1;
        self::$contact->icon_3        =$request->icon_3;
        self::$contact->save();
    }


    public static function contactUpdate($request,$id){
        self::$contact                  =Contact::find($id);
        self::$contact->email_1       =$request->email_1;
        self::$contact->email_2       =$request->email_2;
        self::$contact->icon_1        =$request->icon_1;
        self::$contact->Num_1         =$request->Num_1;
        self::$contact->Num_2         =$request->Num_1;
        self::$contact->icon_2        =$request->icon_2;
        self::$contact->location_1    =$request->location_1;
        self::$contact->icon_3        =$request->icon_3;
        self::$contact->save();
    }
    public static function contactDelete($id){
        self::$contact=Contact::find($id);
        self::$contact->delete();
    }
}
