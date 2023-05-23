<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{
    public function subscriberIndex(){
        return view('admin.subscriber.index',[
            'subscribers'=>Subscriber::latest()->get(),
        ]);
    }
    public function subscriberStore(Request $request){
        Subscriber::subscriberStore($request);
        Session::flash('success','Email Address Add Successful as Subscriber!');
        return redirect()->back();

    }
}
