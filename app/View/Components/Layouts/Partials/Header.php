<?php

namespace App\View\Components\Layouts\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Helpers\CartManagement;
use App\Models\Category;
use Livewire\Attributes\On;

class Header extends Component
{


    public $cartCount = 0;
    protected $listeners = ['cartUpdated' => 'updateCart'];


    public function mount()
    {
        $this->cartCount = \App\Helpers\CartManagement::count();
    }

    public function updateCartCount($total_count)
    {
        $this->cartCount = $total_count;
    }


    public $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }

    public function render(): View|Closure|string
    {
        return view('components.layouts.partials.header');
    }
}
