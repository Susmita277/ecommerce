<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(){
    
        return view('backend.banner');
    }
}
