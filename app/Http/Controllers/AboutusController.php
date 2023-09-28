<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Aboutheader;




class AboutusController extends Controller
{

  public function index(){
    $abouts = Information::all();
    return view('backend.AboutusIndex')->with(compact('abouts'));

  }
 public function create(){
    return view('backend.AboutusCreate');
 }

 public function store(Request $request)
  {

    // return request()->all();
    $validated = $this->validate($request, [
      'title' => 'required',
      'description' => 'required',
      'image'=>'mimes:png,jpg,webp,avif'
    ]);
    $newInformation = new Information;
if($request->file('image')!=null){
  $imagename=time()."image".".".$validated['image']->extension();
  $imagepath=$validated['image']->storeAs("public/images",$imagename);
  $newInformation->image=$imagepath;
}    
    $newInformation->title=$validated['title'];
    $newInformation->description=$validated['description'];
    $newInformation->save();
    return redirect()->route('aboutus.index');
  }




public function edit($id)
{
  $abouts= Information::findOrFail($id);
  return view("backend.Editpage", compact("aboutus.index"));
}

public function update(Request $request, $id)
{
  $abouts = Information::findOrFail($id); 
  
  $validated = $request->validate([
    'title' => 'required',
    'description' => 'required'
  ]);


  $abouts->update([
    'title' => $validated['title'],
    'description' => $validated['description'],
  ]);


  return redirect()->route('about.index');
}


public function delete($id)
{
  Information::findorfail($id)->delete();
  return redirect()->route('about.index');
}
}


