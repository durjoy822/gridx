<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public  static $client, $imageUrl, $imageName,$image,$directory ;

    public static function getImageUrl($request){
        self::$image=$request->file('image');
        self::$imageName=self::$image->getClientOriginalName();
        self::$directory='admin-assets/client-review/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }


    public static function clientStore($request){
//        dd($request->all());
        $request->validate([
           'name'       =>'required',
           'working_dep'=>'required',
           'review'     =>'required',
        ]);
        self::$client=new Client();
        self::$client->name         =$request->name;
        self::$client->working_dep  =$request->working_dep;
        self::$client->review       =$request->review;
        if ($request->image){
            self::$client->image    =self::getImageUrl($request);
        }
        self::$client->save();

    }
    public static function clientUpdate($request, $id){
        self::$client               =Client::find($id);
        if ($request->file('image')){
            if(file_exists(self::$client->image)){
                unlink(self::$client->image);
            }
            self::$client->image      =self::getImageUrl($request);
        }
        self::$client->name         =$request->name;
        self::$client->working_dep  =$request->working_dep;
        self::$client->review       =$request->review;
        self::$client->save();
    }

    public static function clientDelete($id){
        self::$client=Client::find($id);
        if (file_exists(self::$client->image))
        {
            unlink(self::$client->image);
        }
        self::$client->delete();
    }


}
