<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;

class CartManager extends Component
{
    public $cart = [];

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
        if (isset($this->cart[$index])) {
            CartManagement::incrementQuantity($this->cart[$index]['product_id']);
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
