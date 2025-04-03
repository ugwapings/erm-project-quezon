<?php

namespace App\Livewire;

use App\Models\Office;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Position;
use Livewire\WithPagination;

class EmployeeFilter extends Component
{
    use WithPagination;
    
    public $search = '';

    protected $queryString = [
        'search' => ['except' => '']
    ];

    
    public function mount()
    {
        $this->classification = request()->query('classification', '');
        $this->position = request()->query('position', '');
        $this->office = request()->query('office', '');
        $this->search = request()->query('search', '');
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'search') {
            $this->resetPage();
            $this->dispatch('filter-updated', $this->search);
        }
    }
        public function render()
    {
        return view('livewire.employee-filter', [
            'employees' => Employee::all(),
            'offices' => Office::all(),
            'positions' => Position::all(),
        ]);
    }
}