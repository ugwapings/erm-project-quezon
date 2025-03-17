<?php

namespace App\Livewire\Office;

use App\Models\Office;
use Livewire\Component;

class OfficeCreate extends Component
{
    public $office_name;
    public function render()
    {
        return view('livewire.office.office-create');
    }

    public function mount() {
        $this->offices = Office::all();
    }

    public function store() {
        $this->validator = $this->validate([
            'office_name' => 'required'
        ]);

        Office::create([
            'office_name' => $this->office_name
        ]);

        return redirect()->to('/office')
                         ->with('success', 'Office Successfully Added');
    }
}
