<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class Positions extends Component
{
    public $positions;

    public function render()
    {
        return view('livewire.position.positions', [
            'positions' => Position::all(),
        ]);
    }

    public function mount() {
        $this->positions = Position::all();
    }

    public function edit($id) {
        $this->dispatch('editPosition', $id);
    }

    public function delete($id) {
        $this->dispatch('deletePosition', $id);
    }

}
