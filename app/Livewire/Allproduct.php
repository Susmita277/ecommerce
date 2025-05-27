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
    public $selected_categories = [];


    #[Url]
    public $sortOrder = 'low'; // default

    public $cart = [];

    public function mount()
    {
        $this->cart = CartManagement::get();
    }
 


    public function addToCart($productId)
    {
        $total_count = CartManagement::addToCart($productId);
        $this->dispatch('update-cart-count',total_count:$total_count)->to(CartManager::class);
        // $alreadyInCart = collect($this->cart)->pluck('product_id')->contains($productId);

        // if ($alreadyInCart) {
        //     $this->dispatch('cart-toast', [
        //         'message' => 'Already in cart',
        //         'type' => 'warning',
        //     ]);
        //     return;
        // }

        // \App\Helpers\CartManagement::addToCart($productId);
        // $this->cart = \App\Helpers\CartManagement::get();

        // $this->dispatch('cart-toast', [
        //     'message' => 'Added to cart',
        //     'type' => 'success',
        // ]);

    }




    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selected_categories)) {
            $productQuery->whereIn('category_id', $this->selected_categories);
        }

        $categories = Category::all();
        return view('livewire.allproduct', [
            'products' => $productQuery->paginate(4),
            'categories' => $categories,
        ]);
    }
}
