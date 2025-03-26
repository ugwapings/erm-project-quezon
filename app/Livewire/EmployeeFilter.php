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

    public $classification = '';
    public $position = '';
    public $office = '';
    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'classification' => ['except' => ''],
        'position' => ['except' => ''],
        'office' => ['except' => ''],
    ];

    public function mount()
    {
        $this->classification = '';
        $this->position = '';
        $this->office = '';
        $this->search = '';
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'search') {
            $this->resetPage();
            $this->dispatch('filter-updated', ['search' => $this->search]);
        }
    }
    
    public function updatedClassification()
    {
        $this->dispatch('update-classification', $this->classification);
        $this->resetPage();
    }

    public function updatedPosition()
    {
        $this->dispatch('update-position', $this->position);
        $this->resetPage();
    }

    public function updatedOffice()
    {
        $this->dispatch('update-office', $this->office);
        $this->resetPage();
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