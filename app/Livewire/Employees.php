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
        'search' => ''
    ];

    protected $listeners = [
        'filter-updated' => 'updateFilters', 
    ];

    public function updateFilters($filters)
    {
        $this->filters['search'] = $filters['search'];
        $this->resetPage();
    }

    public function render()
    {
        $employees = Employee::query()
            ->when($this->filters['search'], function ($query) {
                $query->where(function ($q) {
                    $q->where('first_name', 'like', '%' . $this->filters['search'] . '%')
                      ->orWhere('middle_name', 'like', '%' . $this->filters['search'] . '%')
                      ->orWhere('last_name', 'like', '%' . $this->filters['search'] . '%');
                });
            })
            ->paginate(7);

        return view('livewire.employees', [
            'employees' => $employees,
        ]);
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
