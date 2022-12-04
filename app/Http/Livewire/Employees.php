<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Employees extends Component
{
    public $employees;

    public function __construct()
    {
        $this->employees = Employee::with('office')->get();
    }

    public function render()
    {
        return view('livewire.employees');
    }
}
