<?php

namespace App\Livewire;

use Flux\Flux;
use App\Models\Office;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Position;
use Livewire\Attributes\On;

class EmployeeShow extends Component
{
    protected $listeners = ['showEmployee'];
    public $employee;
    public $employee_id_fill;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix;
    public $address;
    public $contact_number;
    public $image_path;
    public $date_of_birth;
    public $emergency_contact_person;
    public $emergency_contact_number;
    public $employment_date;
    public $end_of_employment_date;
    public $position_id;
    public $office_id;
    public $positions;
    public $offices;
    


    public function render()
    {
        return view('livewire.employee-show');
    }

    public function mount() {
        // get the data associated with the employee
        $this->positions = Position::all();
        $this->offices = Office::all();
    }

    #[On("showEmployee")]

    public function showEmployee($id) {

        $this->employee = Employee::find($id);

        $this->employee_id_fill = $this->employee->employee_id_fill;
        $this->first_name = $this->employee->first_name;
        $this->middle_name = $this->employee->middle_name;
        $this->last_name = $this->employee->last_name;
        $this->suffix = $this->employee->suffix;
        $this->address = $this->employee->address;
        $this->contact_number = $this->employee->contact_number;
        $this->image_path = $this->employee->image_path;
        $this->date_of_birth = $this->employee->date_of_birth;
        $this->emergency_contact_person = $this->employee->emergency_contact_person;
        $this->emergency_contact_number = $this->employee->emergency_contact_number;
        $this->employment_date = $this->employee->employment_date;
        $this->end_of_employment_date = $this->employee->end_of_employment_date;
        $this->position_id = $this->employee->position_id;
        $this->office_id = $this->employee->office_id;
        $this->classification = $this->employee->classification;
        $this->status = $this->employee->status;

        Flux::modal('show-employee')->show();
    }

    public function close() {
        Flux::modal('show-employee')->close();
    }


}
