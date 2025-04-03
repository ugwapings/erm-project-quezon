<div class="grid md:grid-cols-3 grid-cols-1 gap-2 mb-4">
    <select wire:model.change="classification" class="border border-gray-300 rounded-md p-2">
        <option value="">All Classifications</option>
        <option value="Job Order">Job Order</option>
        <option value="Regular">Regular</option>
        <option value="Casual">Casual</option>
        <option value="Honorarium">Honorarium</option>
        <option value="Co-Terminus">Co-Terminus</option>
    </select>
    <select wire:model.change="position" class="border border-gray-300 rounded-md p-2">
        <option value="">All Positions</option>
        @foreach($positions as $position)
            <option value="{{ $position->id }}">{{ $position->position_name }}</option>
        @endforeach
    </select>
    <select wire:model.change="office" class="border border-gray-300 rounded-md p-2">
        <option value="">All Offices</option>
        @foreach($offices as $office)
            <option value="{{ $office->id }}">{{ $office->office_name }}</option>
        @endforeach
    </select>
</div>