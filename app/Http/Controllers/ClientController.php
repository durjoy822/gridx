<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function index(){
        return view('home.home');
    }

    public function clientIndex(){
        return view('admin.client.index',[
            'clients'=>Client::latest()->get(),
        ]);
    }
    public function clientAdd(){
        return view('admin.client.add');
    }
    public function clientStore(Request $request){
        Client::clientStore($request);
        Session::flash('success','Client review add successfully!');
        return redirect()->route('client.index');
    }
    public function clientEdit($id){
        return view('admin.client.edit',[
            'client'=>Client::find($id),
        ]);
    }
    public function clientUpdate(Request $request, $id){
        Client::clientUpdate($request,$id);
        Session::flash('success','Client review Updated successfully!');
        return redirect()->route('client.index');
    }
    public function clientDelete( $id){
        Client::clientDelete($id);
        Session::flash('success','Client review Delete successfully!');
        return redirect()->route('client.index');
    }
}
