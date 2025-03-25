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
    
    public $filters = [
        'search' => '',
        'classification' => '',
        'position' => '',
        'office' => '',
    ];

    public $paginationLimit = 7;

    protected $listeners = [
        'update-search' => 'updateSearch',
        'update-classification' => 'updateClassification',
        'update-position' => 'updatePosition',
        'update-office' => 'updateOffice',
    ];

    public function render()
    {
        $employees = Employee::query()
            ->with('position', 'office')
            ->when(strlen($this->filters['search']), function ($query) {
                $query->where(function ($q) {
                    $q->where('first_name', 'like', '%' . $this->filters['search'] . '%')
                      ->orWhere('middle_name', 'like', '%' . $this->filters['search'] . '%')
                      ->orWhere('last_name', 'like', '%' . $this->filters['search'] . '%');
                });
            })
            ->when($this->filters['classification'], function ($query){
                $query->where('classification', $this->filters['classification']);
            })
            ->when($this->filters['position'], function ($query) {
                $query->where('position_id', $this->filters['position']);
            })
            ->when($this->filters['office'], function ($query) {
                $query->where('office_id', $this->filters['office']);
            })
            ->paginate($this->paginationLimit);

            
        return view('livewire.employees', [
            'employees' => $employees,
        ]);
    }

    public function updateSearch($filters)
    {
        $this->filters['search'] = $filters;
        $this->resetPage();
    }
    

    public function updateClassification($classification){

        $this->filters['classification'] = $classification;
        $this->resetPage();
    }


    public function updatePosition($position)
    {
        $this->filters['position'] = $position;
        $this->resetPage();
    }

    public function updateOffice($office)
    {
        $this->filters['office'] = $office;
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
