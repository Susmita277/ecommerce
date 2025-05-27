<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Helpers\CartManagement;
use App\Models\Product;

class Home extends Component
{
    public $cart = [];

    public function mount()
    {
        $this->cart = CartManagement::get();
    }

    public function addToCart($productId)
    {
        $alreadyInCart = collect($this->cart)->pluck('product_id')->contains($productId);

        if ($alreadyInCart) {
            $this->dispatch('cart-toast', [
                'message' => 'Already in cart',
                'type' => 'warning',
            ]);
            return;
        }

        \App\Helpers\CartManagement::addToCart($productId);
        $this->cart = \App\Helpers\CartManagement::get();

        $this->dispatch('cart-toast', [
            'message' => 'Added to cart',
            'type' => 'success',
        ]);
    }


    public function render()
    {
        $newArrivals = Product::latest()->take(4)->get();
        $categories = Category::where('is_active', 1)->get();
        $topProducts = Product::oldest()->take(4)->get();

        return view('livewire.home', [
            'newArrivals' => $newArrivals,
            'categories' => $categories,
            'topProducts' => $topProducts,
            'cart' => $this->cart,
        ]);
    }
}
