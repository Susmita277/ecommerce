<?php
namespace App\Livewire;
use Livewire\Component;
use App\Models\Product; // import your model here
use App\Models\Home; // import your model here

class GlobalProductSearch extends Component
{
    public $search = '';
    public $results = [];

    public function updatedSearch($value)
    {
        $this->results = Product::where('name', 'like', '%' . $value . '%')
            ->limit(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.global-product-search');
    }
}
