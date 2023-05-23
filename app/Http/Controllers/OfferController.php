<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OfferController extends Controller
{
        public function offerIndex(){
            return view('admin.offer.index',[
                'offers'=>Offer::latest()->get(),
            ]);
        }
        public function offerAdd(){
            return view('admin.offer.add');
        }
        public function offerStore(Request $request){
            Offer::offerStore($request);
            Session::flash('success','Service offering Added successful!');
            return redirect()->route('offer.index');
        }
    public function offerEdit($id){
        return view('admin.offer.edit',[
            'offer'=>Offer::find($id),
        ]);
    }
        public function offerUpdate(Request $request,$id){
            Offer::offerUpdate($request,$id);
            Session::flash('success','Service offering Updated successful!');
            return redirect()->route('offer.index');
        }
        public function offerDelete($id){
            Offer::offerDelete($id);
            Session::flash('success','Service offering Deleted successful!');
            return redirect()->route('offer.index');
        }
}
