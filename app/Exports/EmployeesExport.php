<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class EmployeesExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
    use Exportable;

    public function __construct($classification = '', $position = '', $office = '', $search = '')
    {
        $this->classification = $classification;
        $this->position = $position;
        $this->office = $office;
        $this->search = $search;
    }

    public function query()
    {
        $employees = Employee::query()
            ->with('position', 'office')
            ->when($this->search != '', function ($query) {
                $query->where(function ($query) {
                    $query->where('first_name', 'like', '%'.$this->search.'%')
                        ->orWhere('middle_name', 'like', '%'.$this->search.'%')
                        ->orWhere('last_name', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->classification != '', function ($query) {
                $query->where('classification', $this->classification);
            })
            ->when($this->position != '', function ($query) {
                $query->where('position_id', $this->position);
            })
            ->when($this->office != '', function ($query) {
                $query->where('office_id', $this->office);
            });

        
        return $employees;
    }

    public function headings(): array
    {
        return [
            'Employee ID',
            'First Name',
            'Middle Name', 
            'Last Name',
            'Suffix',
            'Address',
            'Contact Number',
            'Image Path',
            'Emergency Person',
            'Emergency Number',
            'Employment Date',
            'End of Employment Date',
            'Date of Birth',
            'Position',
            'Office',
            'Classification',
            'Status',
        ];
    }

    public function map($employee): array
    {
        return [
            $employee->employee_id_fill,
            $employee->first_name,
            $employee->middle_name,
            $employee->last_name,
            $employee->suffix,
            $employee->address,
            $employee->contact_number,
            $employee->image_path,
            $employee->emergency_contact_person,
            $employee->emergency_contact_number,
            $employee->employment_date,
            $employee->end_of_employment_date,
            $employee->date_of_birth,
            $employee->position->position_name,
            $employee->office->office_name,
            $employee->classification,
            $employee->status,
        ];
    }
}