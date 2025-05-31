<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;
use App\Models\Product;
use Livewire\Attributes\Title;

#[Title('Product Detail')]
class ProductDetailPage extends Component
{
    public $slug;
    public $products;
    public $cart = [];

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->products = Product::latest()->take(4)->get();
        $this->cart = CartManagement::get();
    }

    public function addToCart($productId)
    {
        $total_count = CartManagement::addToCart($productId);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(CartManager::class);
    }

    public function render()
    {
        return view('livewire.product-detail-page', [

            'product' => Product::where('slug', $this->slug)->firstOrFail(),
            'products' => $this->products,
        ]);
    }
}
