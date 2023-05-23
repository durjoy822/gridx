<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function sliderIndex(){
        return view('admin.slider.index',[
            'sliders'=>Slider::latest()->get(),
        ]);
    }
    public function sliderAdd(){
        return view('admin.slider.add');
    }
    public function sliderStore(Request $request){
         Slider::sliderStore($request);
         Session::flash('success','Slider Add Successful!');
         return redirect()->route('slider.index');
    }
    public function sliderEdit( $id){
         return view('admin.slider.edit',[
             'slider'=>Slider::find($id),
         ]);
    }
    public function sliderUpdate(Request $request, $id){
        Slider::sliderUpdate($request, $id);
        Session::flash('success','Slider Updated Successful!');
        return redirect()->route('slider.index');
    }
    public function sliderDelete( $id){
        Slider::sliderDelete($id);
        Session::flash('success','Slider Delete Successful!');
        return redirect()->route('slider.index');
    }
}
