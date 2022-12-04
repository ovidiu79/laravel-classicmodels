<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.orders', ['orders' => Order::with('customer')->paginate('15')]);
    }
}
