<?php

namespace App\Livewire;

use App\Models\Office;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Position;
use Livewire\WithPagination;

class EmployeeCategories extends Component
{
    use WithPagination;
    
    public $classification = '';
    public $position = '';
    public $office = '';

    protected $queryString = [
        'classification' => ['except' => ''],
        'position' => ['except' => ''],
        'office' => ['except' => ''],
    ];
    public function render()
    {
        return view('livewire.employee-categories',
            [
                'classifications' => Employee::all(),
                'positions' => Position::all(),
                'offices' => Office::all(),
            ]
        );
    }

    public function mount()
    {
        $this->classification = request()->query('classification', '');
        $this->position = request()->query('position', '');
        $this->office = request()->query('office', '');
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
}
