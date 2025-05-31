<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;
use Livewire\Attributes\Title;


#[Title('My Orders')]

class MyOrderHistory extends Component
{
    use WithPagination;

    public function render()
    {
        $my_orders = Order::where('user_id',auth()->id())->latest()->paginate(5);
        return view('livewire.my-order-history',[
            'orders' =>$my_orders,
        ]);
    }
}
