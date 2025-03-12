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
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Position</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
            <tr>
                <td class="border px-4 py-2">{{ $employee->employee_id_fill }}</td>
                <td class="border px-4 py-2">
                    {{ $employee->first_name }}
                    {{ $employee->middle_name }}
                    {{ $employee->last_name }}
                </td>
                <td class="border px-4 py-2">{{ $employee->position->position_name }}</td>
                <td class="border px-4 py-3 flex">
                    <flux:button variant="primary" wire:click="edit({{ $employee->id }})">Update</flux:button>
                    <flux:button variant="danger" wire:click="delete({{ $employee->id }}) ">Delete</flux:button>
                    <flux:button variant="danger" wire:click="show({{ $employee->id }}) ">Show</flux:button>
                </td>
            </tr>
            @empty
                <tr class="bg-white">
                    <td class="border px-4 py-2">
                        No Employees Found
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
</div>