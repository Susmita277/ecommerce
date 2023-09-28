<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;



class ProductController extends Controller
{
  public function index(Request $request)
  {
    $search= $request['search'];
    $products = Product::with('category')->get();
    if ($search != null) {
        $products = Product::where('productname', 'LIKE', "%$search%")
        ->orWhere('category', 'LIKE', "%$search%")
        ->get();
           return view('backend.product')->with(compact('products','search'));
    }
    else {
    return view('backend.product')->with(compact('products'));
  }
  }

  public function create()
  {
    $productcategory = Category::select('id', 'cat_name')->get();
    // $products = Product::with('category:id,cat_name')->get();
    return view('backend.createproduct')->with(compact('productcategory'));
  }

  public function store(Request $request)
  {
    // return $request;
    $validated = $this->validate($request, [
      'productname' => 'required',
      'description' => 'required',
      'subcategory' => 'required',
      'category' => 'numeric',
      'price' => 'required',
      'currency' => 'required',

    ]);


    Product::create([
      'productname' => $validated['productname'],
      'description' => $validated['description'],
      'category_id'    => $validated['category'],
      'category' => 'null',
      'subcategory' => $validated['subcategory'],
      'price' => $validated['price'],
      'currency' => $validated['currency'],


    ]);
    return redirect()->route('product.index');
  }

  public function edit($id)
  {
    $product = Product::findOrFail($id);
    return view("backend.Editpage", compact("product"));
  }

  public function update(Request $request, $id)
  {
    $product = Product::findOrFail($id);

    $validated = $request->validate([
      'description' => 'required',
      'category' => 'required',
      'subcategory' => 'required',
      'price' => 'required',
      'currency' => 'required',
    ]);


    $product->update([
      'productname' => $request['productname'],
      'description' => $validated['description'],
      'category'    => $validated['category'],
      'subcategory' => $validated['subcategory'],
      'price' => $validated['price'],
      'currency' => $validated['currency'],
    ]);


    return redirect()->route('product.index');
  }


  public function delete($id)
  {
    Product::findorfail($id)->delete();
    return redirect()->route('product.index');
  }
}
