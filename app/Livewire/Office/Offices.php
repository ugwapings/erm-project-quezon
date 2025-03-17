<?php

namespace App\Livewire\Office;

use App\Models\Office;
use Livewire\Component;

class Offices extends Component
{
    public $offices;
    public function render()
    {
        return view('livewire.office.offices');
    }

    public function mount() {
        $this->offices = Office::all();
    }

    public function edit($id){
        $this->dispatch('editOffice', $id);
    }

}
