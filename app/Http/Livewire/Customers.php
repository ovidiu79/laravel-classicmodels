<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.customers', ['customers' => Customer::with('employee')->paginate(15)]);
    }
}
