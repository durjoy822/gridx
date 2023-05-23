<?php

namespace App\Http\Controllers;

use App\Models\CvUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CvUploadController extends Controller
{
    public function cvIndex(){
        return view('admin.cv-upload.index',[
            'cvUploads'=>CvUpload::latest()->get(),
        ]);
    }
    public function cvAdd(){
        return view('admin.cv-upload.add');
    }
    public function cvStore(Request $request){
         CvUpload::cvStore($request);
         Session::flash('success','Pdf File Store Successful!');
         return redirect()->route('cv.index');
    }
    public function cvEdit($id){
        return view('admin.cv-upload.edit',[
            'cvUpload'=>CvUpload::find($id),
        ]);
    }
    public function cvUpdate(Request $request, $id){
        CvUpload::cvUpdate($request, $id);
        Session::flash('success','Pdf File Updated Successful!');
        return redirect()->route('cv.index');
    }
    public function cvDelete($id){
        CvUpload::cvDelete($id);
        Session::flash('success','Pdf File Delete Successful!');
        return redirect()->route('cv.index');
    }
    public function cvDownload($id){
        CvUpload::cvDownload($id);
        Session::flash('success','File Download Successful!');
        return redirect()->route('cv.index');
    }
}
