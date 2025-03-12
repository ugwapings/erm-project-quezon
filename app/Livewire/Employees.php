<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use App\Models\Employee;
use App\Livewire\EmployeeUpdate;

class Employees extends Component
{

    public $employees;

    public function render()
    {
        return view('livewire.employees',[
            'employees' => Employee::with(['position', 'office'])->get(),
        ]);
    }

    public function mount() {
        $this->employees = Employee::with(['position', 'office'])->get();
    }

    public function edit($id) {
        $this->dispatch('editEmployee', $id);
    }

    public function delete($id) {

        $this->dispatch('deleteEmployee', $id);
        
    }

    public function show($id) {
        $this->dispatch('showEmployee', $id);
    }

}
