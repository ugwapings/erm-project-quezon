<div>
    <div class="flex gap-4 space-x-4">
        <flux:input wire:model.live="search" placeholder="Search..." />
    </div>
    <select wire:model.change="classification">
        <option value="">All Classifications</option>
        <option value="Job Order">Job Order</option>
        <option value="Regular">Regular</option>
        <option value="Casual">Casual</option>
        <option value="Honorarium">Honorarium</option>
        <option value="Co-Terminus">Co-Terminus</option>
    </select>

    <select wire:model.change="position">
        <option value="">All Positions</option>
        @foreach($positions as $position)
            <option value="{{ $position->id }}">{{ $position->position_name }}</option>
        @endforeach
    </select>

    <select wire:model.change="office">
        <option value="">All Offices</option>
        @foreach($offices as $office)
            <option value="{{ $office->id }}">{{ $office->office_name }}</option>
        @endforeach
    </select>
</div>