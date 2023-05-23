<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    public static $offer;

    public static function offerStore($request){
//        dd($request->all());
        $request->validate([
            'service_details'   =>'required',
            'icon'              =>'required',
        ]);
        self::$offer                  =new Offer();
        self::$offer->category        =$request->category;
        self::$offer->service_details =$request->service_details;
        self::$offer->icon            =$request->icon;
        self::$offer->status          =$request->status;
        self::$offer->save();
    }
    public static function offerUpdate($request,$id){
//        dd($request->all());
        self::$offer                  =Offer::find($id);
        self::$offer->category        =$request->category;
        self::$offer->service_details =$request->service_details;
        self::$offer->icon            =$request->icon;
        self::$offer->status          =$request->status;
        self::$offer->save();
    }
    public static function offerDelete($id){
//        dd($request->all());
        self::$offer                 =Offer::find($id);
        self::$offer->delete();
    }
}
