<div class="grid md:grid-cols-3 grid-cols-1 gap-2 mb-4">
    <select wire:model.change="classification" class="border border-gray-300 rounded-md p-2">
        <option class="dark:bg-gray-800" value="">All Classifications</option>
        <option class="dark:bg-gray-800" value="Job Order">Job Order</option>
        <option class="dark:bg-gray-800" value="Regular">Regular</option>
        <option class="dark:bg-gray-800" value="Casual">Casual</option>
        <option class="dark:bg-gray-800" value="Honorarium">Honorarium</option>
        <option class="dark:bg-gray-800" value="Co-Terminus">Co-Terminus</option>
    </select>
    <select wire:model.change="position" class="border border-gray-300 rounded-md p-2">
        <option class="dark:bg-gray-800" value="">All Positions</option>
        @foreach($positions as $position)
            <option class="dark:bg-gray-800" value="{{ $position->id }}">{{ $position->position_name }}</option>
        @endforeach
    </select>
    <select wire:model.change="office" class="border border-gray-300 rounded-md p-2">
        <option class="dark:bg-gray-800" value="">All Offices</option>
        @foreach($offices as $office)
            <option class="dark:bg-gray-800" value="{{ $office->id }}">{{ $office->office_name }}</option>
        @endforeach
    </select>
</div>