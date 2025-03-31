<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeExport extends Component
{
    public $classification = '';
    public $position = '';
    public $office = '';
    public $search = '';
    public $employee;

    protected $listeners = [
        'filter-updated' => 'updateFilters',
        'update-classification' => 'updateClassification',
        'update-position' => 'updatePosition',
        'update-office' => 'updateOffice',
    ];

    public function updateFilters($search) {
        $this->search = $search;
    }

    public function updateClassification($classification) {
        $this->classification = $classification;
    }
    
    public function updatePosition($position) {
        $this->position = $position;
    }
    
    public function updateOffice($office) {
        $this->office = $office;
    }

    public function render()
    {
        return view('livewire.employee-export');
    }

    public function mount()
    {
        // Get query parameters from URL
        $this->classification = request()->query('classification', '');
        $this->position = request()->query('position', '');
        $this->office = request()->query('office', '');
        $this->search = request()->query('search', '');
    }

    public function exportEmployee()
    {
        $export = Excel::download(
            new EmployeesExport(
                $this->classification,
                $this->position,
                $this->office,
                $this->search
                
            ),
            'employees.xlsx'
        );

        return $export;
    }
}
