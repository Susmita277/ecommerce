<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;


class Header extends Component
{
    public $categories;
    public $cart;

    public function mount()
    {
        $this->categories = Category::all();
        $this->cart = \App\Helpers\CartManagement::get();

    }
    public function render()
    {
        return view('livewire.header');
    }
}
