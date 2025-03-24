<div>
    <flux:input wire:model.live="search" aria-placeholder="Search..." />

    <select wire:model="classification">
        <option value="">All Classifications</option>
        <option value="Job Order">Job Order</option>
        <option value="Regular">Regular</option>
        <option value="Casual">Casual</option>
        <option value="Honorarium">Honorarium</option>
        <option value="Co-Terminus">Co-Terminus</option>
        
    </select>

    <select wire:model="position">
        <option value="">All Positions</option>
        @foreach($positions as $position)
            <option value="{{ $position->id }}">{{ $position->position_name }}</option>
        @endforeach
    </select>

    <select wire:model="office">
        <option value="">All Offices</option>
        @foreach($offices as $office)
            <option value="{{ $office->id }}">{{ $office->office_name }}</option>
        @endforeach
    </select>
</div>