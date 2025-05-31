<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use Livewire\Component;
use App\Models\Product;
use Livewire\Attributes\Url;
use App\Models\Category;
use Livewire\Withpagination;
use Livewire\Navbar;

class Allproduct extends Component
{
    use WithPagination;
    #[Url]
    public $search = '';
    public $selected_categories = [];


    #[Url]
    public $sortOrder = 'low'; // default

    public $cart = [];

    public function mount()
    {
        $this->cart = CartManagement::get();
    }
   public function setSortOrder($order)
{
    $this->sortOrder = $order;
    $this->resetPage(); // optional: reset to page 1 when sorting
}

public function addToCart($productId)
{
    $total_count = CartManagement::addToCart($productId);

    // 🔥 Dispatch event to CartManager component
    $this->dispatch('update-cart-count', total_count: $total_count);
}



      public function render()
{
    $productQuery = Product::query()->where('is_active', 1);

    if (!empty($this->selected_categories)) {
        $productQuery->whereIn('category_id', $this->selected_categories);
    }

    // Sorting logic
    if ($this->sortOrder === 'low') {
        $productQuery->orderBy('price', 'asc');
    } elseif ($this->sortOrder === 'high') {
        $productQuery->orderBy('price', 'desc');
    }

    $categories = Category::all();

    return view('livewire.allproduct', [
        'products' => $productQuery->paginate(4),
        'categories' => $categories,
    ]);
}

}
