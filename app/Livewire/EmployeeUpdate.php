<?php

namespace App\Livewire;

use Flux\Flux;
use App\Models\Office;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Position;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class EmployeeUpdate extends Component
{
    use WithFileUploads;
    
    protected $listeners = ['editEmployee'];
    public $employee;
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
    public $positions;
    public $offices;
    public $classification;
    public $status;

    public function mount() {
        // get the data associated with the employee
        $this->positions = Position::all();
        $this->offices = Office::all();
    }

    public function render()
    {
        return view('livewire.employee-update');
    }

    #[On("editEmployee")]
    public function editEmployee($id) {
        //display the data of the employee to be edited
        //based on the selected employee id
        
        $this->employee = Employee::find($id);
        $employee_id = $id;

        $this->employee_id_fill = $this->employee->employee_id_fill;
        $this->first_name = $this->employee->first_name;
        $this->middle_name = $this->employee->middle_name;
        $this->last_name = $this->employee->last_name;
        $this->suffix = $this->employee->suffix;
        $this->address = $this->employee->address;
        $this->contact_number = $this->employee->contact_number;
        $this->image_path = $this->employee->image_path;
        $this->emergency_contact_person = $this->employee->emergency_contact_person;
        $this->emergency_contact_number = $this->employee->emergency_contact_number;
        $this->employment_date = $this->employee->employment_date;
        $this->end_of_employment_date = $this->employee->end_of_employment_date;
        $this->date_of_birth = $this->employee->date_of_birth;
        $this->position_id = $this->employee->position_id;
        $this->office_id = $this->employee->office_id;
        $this->classification = $this->employee->classification;
        $this->status = $this->employee->status;

        Flux::modal('edit-employee')->show();
    }

    public function update() {
        //update the employee data
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

        $this->employee = Employee::find($this->employee->id);
        
        
        if ($this->image_path == null || $this->image_path == '') {
            $validated['image_path'] = $this->employee->image_path;
        } elseif ($this->image_path instanceof \Illuminate\Http\UploadedFile) {
            $validated['image_path'] = $this->image_path->store("images", "public");
        } else {
            $validated['image_path'] = $this->employee->image_path;
        }



        if ($this->end_of_employment_date === '') {
            $validated['end_of_employment_date'] = null;
        }

        $this->employee->update($validated);

        Flux::modal('edit-employee')->close();

        return redirect()->to('employee')
                         ->with('success', 'Employee updated successfully'); 
    }
}
