<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public static $slider;


    public static function sliderStore($request){
//        dd($request->all());
        $request->validate([
            'slider_details'=>'required'
        ]);
        self::$slider=new Slider();
        self::$slider->slider_details=$request->slider_details;
        self::$slider->save();
    }
    public static function sliderUpdate($request,$id){
        self::$slider=Slider::find($id);
        self::$slider->slider_details=$request->slider_details;
        self::$slider->save();
    }
    public static function sliderDelete($id){
        self::$slider=Slider::find($id);
        self::$slider->delete();
    }
}
