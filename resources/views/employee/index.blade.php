<x-layouts.app>
    <div class="relative mb-6 w-full">
        <div class="flex justify-between items-center">
            <div>
                <flux:heading size="xl" level="1">List of Employees</flux:heading>
                <flux:subheading size="sm" class="mb-6">Manage List of Employees</flux:subheading>
            </div>
            <div class="flex flex-row gap-x-6">
                <livewire:employee-filter/>
                <livewire:employee-export/>
                <flux:modal.trigger name="create-employee">
                <flux:button>Add Employee</flux:button>
                </flux:modal.trigger>
                <livewire:employee-create />
                <livewire:employee-update />
                <livewire:employee-delete />
                <livewire:employee-show />
            </div>
        </div>
        <flux:separator variant="subtle" />
        <div class="place-content-center">
            <livewire:employees />
        </div>
    </div>
</x-layouts.app>