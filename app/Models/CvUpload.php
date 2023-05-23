<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use function PHPUnit\Framework\fileExists;

class CvUpload extends Model
{
    use HasFactory;
    public static $pdf, $image, $imageUrl,$imageName, $directory;

    public static function getImageURl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('file');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='admin-assets/file/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }

    public static function cvStore($request){
//        dd($request->all());
        $request->validate([
            'file_name'=>'required',
        ]);
        self::$pdf=new CvUpload();
        self::$pdf->file_name=$request->file_name;
        self::$pdf->status=$request->status;
        if ($request->file){
            self::$pdf->file   =self:: getImageURl($request);
        }
        self::$pdf->save();
    }
    public static function cvUpdate(  $request,$id){
//        dd($request->all());
        self::$pdf=CvUpload::find($id);
        if ($request->file('file')){
            if (file_exists(self::$pdf->file)){
                unlink(self::$pdf->file);
            }
            self::$pdf->file   =self:: getImageURl($request);
        }
        self::$pdf->file_name=$request->file_name;
        self::$pdf->status=$request->status;
        self::$pdf->save();
    }
    public static function cvDelete($id){
//        dd($request->all());
        self::$pdf=CvUpload::find($id);
            if (file_exists(self::$pdf->file)){
                unlink(self::$pdf->file);
            }
        self::$pdf->delete();
    }
    public static function cvDownload($id){
        $cvUploads=DB::table('cv_uploads')->where('id',$id)->first();
        $file_path=public_path("file/{$cvUploads->file}");
        return response()->download($file_path);
    }
}
