<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.category')->with(compact('categories'));
    }
//return
    public function store(Request $request){
        Category::create($request->all());
        return redirect()->back();
    }

}
