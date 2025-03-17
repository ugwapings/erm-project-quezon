<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionCreate extends Component
{

    public $position_name;
    public function render()
    {
        return view('livewire.position.position-create');
    }

    public function mount() {
        //dere ibutang tanan nga model nga gamiton sa view
        $this->positions = Position::all();
    }

    public function store() {
        
        //dere ibutang tanan nga validation sa form
        $validated = $this->validate([
            'position_name' => 'required'
        ]);

        //dere ibutang tanan nga variable nga i insert sa database
        Position::create([
            'position_name' => $this->position_name,
        ]);

        //dere i redirect ang page
        return redirect()->to('/position')
                        ->with('success', 'Position Created Successfully');
    }

    
}
