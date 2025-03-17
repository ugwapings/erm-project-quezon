<?php

namespace App\Livewire\Position;

use Flux\Flux;
use Livewire\Component;
use App\Models\Position;
use Livewire\Attributes\On;

class PositionUpdate extends Component
{
    protected $listeners = ['editPosition'];
    public $position;
    public $position_id;
    public $position_name;

    public function render()
    {
        return view('livewire.position.position-update');
    }

    public function mount() {
        //dere ibutang tanan nga model nga gamiton sa view
        $this->positions = Position::all();
    }

    #[On('editPosition')]

    public function editPosition($id) {
        $this->position = Position::find($id);
        $this->position_id = $id; // Store the ID
        $this->position_name = $this->position->position_name; 

        Flux::modal("update-position")->show();
    }

    public function update() {

        $validator = $this->validate([
            'position_name' => 'required'
        ]);

        $position = Position::find($this->position_id);

        $position->position_name = $this->position_name;

        $position->save();

        Flux::modal('update-position')->close();

        return redirect()->to('/position')
                         ->with('success', 'Position Successfully Updated');

    }
}
