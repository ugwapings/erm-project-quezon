<?php

namespace App\Livewire;

use App\Models\Office;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Position;

class EmployeeCreate extends Component
{
    
    //dere ibutang tanan nga variable nga gamiton sa view
    public $employee_id_fill;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $suffix;
    public $address;
    public $contact_number;
    public $image_path;
    public $emergency_contact_person;
    public $emergency_contact_number;
    public $employment_date;
    public $end_of_employment_date;
    public $date_of_birth;
    public $position_id;
    public $office_id;
    public $employees;
    public $positions;
    public $offices;
    public $classification;
    public $status;


    public function render()
    {
        return view('livewire.employee-create');
    }

    public function mount() {

        //dere ibutang tanan nga model nga gamiton sa view
        $this->employees = Employee::all();
        $this->positions = Position::all();
        $this->offices = Office::all();
    }

    public function store() {
        
        //dere ibutang tanan nga validation sa form
        $validated = $this->validate([
            'employee_id_fill' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'suffix' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'image_path' => 'nullable',
            'emergency_contact_person' => 'required',
            'emergency_contact_number' => 'required',
            'employment_date' => 'required|date',
            'end_of_employment_date' => 'nullable|date',
            'position_id' => 'required',
            'office_id' => 'required',
            'classification' => 'required',
            'status' => 'required',
            'date_of_birth' => 'required|date'
        ]);

        
        // Create employee without position and office first
        $employee = new Employee();
        $employee->fill($validated);
        
        // Associate the position and office
        $position = Position::findOrFail($validated['position_id']);
        $office = Office::findOrFail($validated['office_id']);
        
        $employee->position()->associate($position);
        $employee->office()->associate($office);
        
        $employee->save();

        $this->reset();
        // $this->dispatch('employee-created');
        
        return redirect()->to('/employee')
                        ->with('success', 'Employee created successfully');
    }

    public function updatedStatus($value) {
        if ($value === 'Employed') {
            $this->end_of_employment_date = null;
        }
    }

    public function getHideEndOfEmploymentDateProperty() {
        return $this->status === 'Employed';
    }
    
}
