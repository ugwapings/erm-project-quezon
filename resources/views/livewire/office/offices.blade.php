<div>
    @if (session('success'))
        <div class="bg-green-100 border-green-400
                    text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }} </span>
        </div>
    @endif


    <table class="table-auto w-full flex-1">
        <thead>
            <tr>
                <th class="border px-1 py-2 text-center">ID</th>
                <th class="border px-5 py-2">Office Name</th>
                <th class="border px-2 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($offices as $office)
            <tr>
                <td class="border px-1 py-2 text-center">
                    {{ $office->id }}
                </td>
                <td class="border px-5 py-2 text-center">
                    {{ $office->office_name }}
                </td>
                <td class="border px-2 py-2 text-center">
                    <flux:button variant="primary" wire:click="edit({{ $office->id }})">Update</flux:button>
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
