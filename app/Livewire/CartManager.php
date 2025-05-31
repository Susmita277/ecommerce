<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;
use App\Models\Product;

class CartManager extends Component
{
    public $cart = [];
      public $outOfStockIndex = null;

    public function mount()
    {
        $this->loadCart();
    }
    public function getCartCountProperty()
    {
        return count($this->cart);
    }
    public function loadCart()
    {
        $this->cart = CartManagement::get();
    }

    public function addToCart($productId)
    {
        CartManagement::addToCart($productId);
        $this->loadCart();
    }

    public function increaseQuantity($index)
    {
        $this->outOfStockIndex = null; 
        // Clear any previous “out of stock” error on mount of this call

        if (! isset($this->cart[$index])) {
            return;
        }

        $productId  = $this->cart[$index]['product_id'];
        $currentQty = $this->cart[$index]['quantity'];
        $product    = Product::find($productId);

        if ($product && $currentQty < $product->quantity) {
            // Still under stock → increment
            CartManagement::incrementQuantity($productId);
            $this->loadCart();
        } else {
            // We hit the stock limit for this $index
            $this->outOfStockIndex = $index;
            // We do NOT change the cart quantity, but we want Blade to show the badge here
            $this->loadCart();
        }
    }






    public function decreaseQuantity($index)
    {
        if (isset($this->cart[$index])) {
            CartManagement::decrementQuantity($this->cart[$index]['product_id']);
            $this->loadCart();
        }
    }

    public function removeFromCart($index)
    {
        if (isset($this->cart[$index])) {
            CartManagement::removeCartItem($this->cart[$index]['product_id']);
            $this->loadCart();
        }
    }

    public function clearCart()
    {
        CartManagement::clearCart();
        $this->loadCart();
    }

    public function calculatePrice($item)
    {
        return 'Rs. ' . number_format($item['quantity'] * $item['unit_amount'], 2);
    }
    public function calculateTotalPrice()
    {
        $total = array_sum(array_map(fn($i) => $i['quantity'] * $i['unit_amount'], $this->cart));
        return 'Rs. ' . number_format($total, 2);
    }

    public function render()
    {
        return view('livewire.cart-manager', [
            'cart' => $this->cart,
        ]);
    }
}
