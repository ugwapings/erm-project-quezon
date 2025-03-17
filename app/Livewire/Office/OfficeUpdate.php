<?php

namespace App\Livewire\Office;

use Flux\Flux;
use App\Models\Office;
use Livewire\Component;
use Livewire\Attributes\On;

class OfficeUpdate extends Component
{
    protected $listener = ['editOffice'];
    public $office_name, $office_id;

    public function render()
    {
        return view('livewire.office.office-update');
    }


    #[On('editOffice')]
    public function editOffice($id) {
        $this->office = Office::find($id);
        $this->office_id = $id;
        $this->office_name = $this->office->office_name;

        Flux::modal('update-office')->show();
    }

    public function update() {
        $validator = $this->validate([
            'office_name' => 'required'
        ]);

        $office = Office::find($this->office_id);

        $office->office_name = $this->office_name;

        $office->save();

        Flux::modal('update-office')->close();

        return redirect()->to('office')
                         ->with('success', 'Office Successfully Updated');
    }


}
