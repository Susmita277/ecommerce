<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;

class Checkoutpage extends Component
{
    public $city;
    public $address;
    public $payment_method = 'cash';
    public function placeorder(){
      $this->validate([
        'city'=> 'required',
        'address'=> 'required',
        'payment_method'=> 'required',
      ]);
    }

    public $cart_items = [];
    public $grand_total;
    
    public function mount(){
        $this->payment_method = 'cash';
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);

    }
    public function render()
    {
        return view('livewire.checkoutpage');
    }
}
