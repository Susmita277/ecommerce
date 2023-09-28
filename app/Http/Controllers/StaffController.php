<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    // public function staff{
    //   return view('frontend.staffform')
    // }

    public function index() {
     return view('frontend.staffform');
    }
    
    public function store(Request $request) {
        $validated = $this->validate($request,
          [
            'fullname' => 'required',
            'email' => 'required',
            'number'=> 'required',
            'address' => 'required',
          ]
          );
    
          Staff::create([
            'fullname' => $validated['fullname'],
            'email' => $validated['email'],
            'number'    => $validated['number'],
            'address' => $validated['address'],
         
    
          ]);
          return redirect()->back();
        }
}
