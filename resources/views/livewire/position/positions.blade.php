<div>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <table class="table-auto w-full flex-1">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Position Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($positions as $position)
            <tr>
                <td class="border px-4 py-2">{{ $position->id }}</td>
                <td class="border px-4 py-2">{{ $position->position_name }}</td>
                <td class="border px-4 py-3 flex">
                    <flux:button variant="primary" wire:click="edit({{ $position->id }})">Update</flux:button>
                </td>
            </tr>
            @empty
                <tr class="bg-white">
                    <td class="border px-4 py-2">
                        No Positions Found
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
