<div class="w-full bg-black flex items-center justify-center min-h-full p-2">
    <div class="container max-w-6xl">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border px-4 py-2 text-center">Name</th>
                        <th class="border px-4 py-2 text-center">Position</th>
                        <th class="border px-4 py-2 text-center">Classification</th>
                        <th class="border py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (is_array($employees) || is_object($employees))
                        @foreach ($employees as $employee)
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2 text-center">
                                {{ $employee->first_name }}
                                {{ $employee->middle_name }}
                                {{ $employee->last_name }}
                            </td>
                            <td class="border px-4 py-2 text-center">{{ $employee->position->position_name }}</td>
                            <td class="border px-4 py-2 text-center">{{ $employee->classification }}</td>
                            <td class="border px-4 py-2 text-center">
                                <div class="flex justify-center gap-2">
                                    <flux:button variant="primary" wire:click="edit({{ $employee->id }})">@include('flux.icon.square-pen')</flux:button>
                                    <flux:button variant="danger" wire:click="delete({{ $employee->id }})">@include('flux.icon.eraser')</flux:button>
                                    <flux:button variant="ghost" wire:click="show({{ $employee->id }})">@include('flux.icon.eye')</flux:button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $employees->links() }}
        </div>
    </div>
</div>