<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function dashbord(){
        return view('backend.pages.dashbord');
    }
}   
