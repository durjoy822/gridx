<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function workIndex(){
        return view('admin.work.index');
    }
}
