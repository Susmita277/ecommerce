<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\Form;
use App\Models\Product;
use App\Models\Information;
use App\Models\Aboutheader;






use Hash;

class ProjectController extends Controller
{
    public function index() 
    {
      $products=Product::select('productname', 'price')->get();
      // $products = Product::all();
      // dd($products);
      // return $products;
      return view ('frontend.index')->with(compact('products'));
    }
  
   public function aboutus(){
    // $about = Information::select('title','description')->get();
      $abouts = Information::all();
      $abouts = Aboutheader::all();
    return view ('frontend.aboutus')->with(compact('abouts'));
  }
   
   
      

 
// practice
    public function form(){
      return view('frontend.FormforPractice');
    }
    public function form_submission(Request $request){
     $validated = $request->validate([
       'fullname'=> 'required',
       'email' => 'required',
     ]);

     Form::create([
      'fullname' => $validated['fullname'],
      'email'    => $validated['email'],
      'number'   => $request['number']
     ]);


//      echo "<pre> ";
//      print_r($validated->toArray());
//      print_r($request); 

// echo "</pre>";

    }

}
