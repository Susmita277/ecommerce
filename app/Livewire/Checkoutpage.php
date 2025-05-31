<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\CartManagement;
use App\Models\Order;
use App\Models\Address;

class Checkoutpage extends Component
{
    public $city;
    public $street_address;
    public $phone;
    public $payment_method = 'cash on delivery';

    public function mount()
    {
        if (session()->pull('order_just_placed')) {
            return; // Skip cart check after order
        }

        $cart_items = CartManagement::getCartItemsFromCookie();

        if (empty($cart_items)) {
            return redirect('/products');
        }
    }

    public function placeorder()
    {
        $this->validate([
            'city' => 'required',
            'street_address' => 'required',
            'payment_method' => 'required',
            'phone' => 'required|max:10',
        ]);

        $cart_items = CartManagement::getCartItemsFromCookie();

        // Create order
        $order = Order::create([
            'user_id'        => auth()->id(),
            'grand_total'    => CartManagement::calculateGrandTotal($cart_items),
            'payment_method' => $this->payment_method,
            'payment_status' => 'pending',
            'status'         => 'new',
            'currency'       => 'rs',
            'shipping_amount'=> 0,
            'notes'          => 'Order placed by ' . auth()->user()->name,
        ]);

        // Save address
        $order->address()->create([
            'city'           => $this->city,
            'street_address' => $this->street_address,
            'phone'          => $this->phone,
        ]);

        // Save order items
        $order_items = collect($cart_items)->map(function ($item) {
            return [
                'product_id' => $item['product_id'],
                'quantity'   => $item['quantity'],
                'price'      => $item['unit_amount'],
            ];
        })->toArray();

        $order->orderitem()->createMany($order_items);

        // Clear cart and redirect
        CartManagement::clearCart();
        session()->put('order_just_placed', true);

        return redirect()->route('success');
    }

    public function render()
    {
        $cart_items   = CartManagement::getCartItemsFromCookie();
        $grand_total  = CartManagement::calculateGrandTotal($cart_items);

        return view('livewire.checkoutpage', [
            'cart_items'   => $cart_items,
            'grand_total'  => $grand_total,
        ]);
    }
}
