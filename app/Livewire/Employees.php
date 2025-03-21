<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use App\Livewire\EmployeeUpdate;

class Employees extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.employees',[
            'employees' => Employee::paginate(7),
        ]);
    }

    public function mount() {
        $this->employees = Employee::paginate(7);
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

    public function showEmployees($selectedOffice, $selectedPosition, $search) {
        
    }
}
