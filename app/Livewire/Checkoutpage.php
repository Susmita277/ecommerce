<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;

class Checkoutpage extends Component
{
    public $cart_items = [];
    public $grand_total;
    public function mount(){
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);

    }
    public function render()
    {
        return view('livewire.checkoutpage');
    }
}
