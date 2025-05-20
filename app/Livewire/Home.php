<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;

class Home extends Component
{
   
     public function render()
    {
        $newArrivals = Product::latest()->take(4)->get();
        $categories = Category::all();
        $topProducts = Product::oldest()->take(4)->get();

        return view('livewire.home', compact('newArrivals','categories','topProducts'));
    }
    
 
}


