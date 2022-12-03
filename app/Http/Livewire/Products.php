<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Collection;

class Products extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.products', ['products' => Product::paginate(15)]);
    }
}
