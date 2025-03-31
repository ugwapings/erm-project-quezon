<?php

namespace App\Livewire;

use Flux\Flux;
use Livewire\Component;
use App\Models\Employee;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Exports\EmployeesExport;
use App\Livewire\EmployeeUpdate;
use Maatwebsite\Excel\Facades\Excel;

class Employees extends Component
{
    use WithPagination;
    
    
    public $classification = '';
    public $position = '';
    public $office = '';
    public $search = '';

    public $paginationLimit = 7;

    protected $listeners = [
        'filter-updated' => 'updateFilters',
        'update-classification' => 'updateClassification',
        'update-position' => 'updatePosition',
        'update-office' => 'updateOffice',
    ];

    public function mount()
    {
        $this->classification = request()->query('classification', '');
        $this->position = request()->query('position', '');
        $this->office = request()->query('office', '');
        $this->search = request()->query('search', '');
    }

    public function render()
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
            })
            ->paginate($this->paginationLimit);

        return view('livewire.employees', [
            'employees' => $employees,
        ]);
    }
   
    public function updateFilters($search)
    {
        $this->search = $search;  
        $this->resetPage();
    }
    

    public function updateClassification($classification){

        $this->classification = $classification;
        $this->resetPage();
    }


    public function updatePosition($position)
    {
        $this->position = $position;
        $this->resetPage();
    }

    public function updateOffice($office)
    {
        $this->office = $office;
        $this->resetPage();
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
