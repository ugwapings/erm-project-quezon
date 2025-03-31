<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use App\Models\Employee;
use Livewire\Attributes\On;

class EmployeeDelete extends Component
{
    protected $listeners = ['deleteEmployee'];
    public $employee_id;
    public $employee;
    public function render()
    {
        return view('livewire.employee-delete');
    }

    #[On("deleteEmployee")]
    public function deleteEmployee($id) {
        $this->employee = Employee::find($id);
        $employee_id = $id;
        Flux::modal('delete-employee')->show();
    }

    public function confirmDeleteEmployee() {
        $employee = Employee::find($this->employee->id);
        $employee->delete();
        Flux::modal('delete-employee')->close();

        return redirect()->to('employee')
            ->with('success', 'Employee has been deleted successfully');
    }
}
