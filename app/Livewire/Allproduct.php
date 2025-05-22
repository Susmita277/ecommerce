<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Url;
use App\Models\Category;
use Livewire\Withpagination;

class Allproduct extends Component
{
    use WithPagination;
    #[Url]
    public $selected_categories =[];

    #[Url]
      public $sortOrder = 'low'; // default

    public function setSortOrder($order)
    {
        $this->sortOrder = $order;
    }
    public function render()
    {
        $productQuery= Product::query()->where('is_active',1);

        if(!empty($this->selected_categories)){
            $productQuery->whereIn('category_id',$this->selected_categories);
        }

        $categories = Category::all();
        return view ('livewire.allproduct',[
            'products' =>$productQuery->paginate(4),
            'categories'=>$categories,
        ]);
    }
}
