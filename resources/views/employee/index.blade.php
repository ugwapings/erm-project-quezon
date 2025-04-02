<x-layouts.app>
    <div>
        <div>
            <div>
                <flux:heading size="xl" level="1">List of Employees</flux:heading>
                <flux:subheading size="sm" class="mb-6">Manage List of Employees</flux:subheading>
            </div>
            
            <div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:gap-2">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <livewire:employee-export />
                    </div>
                    <flux:modal.trigger name="create-employee">
                        <flux:button>Add Employee</flux:button>
                    </flux:modal.trigger>
                </div>
                
                <div class="md:col-span-3">
                    <livewire:employee-filter />
                </div>
            </div>
        </div>
        
        <flux:separator variant="subtle" class="my-6" />
        
        <!-- Employees List -->
        <div class="overflow-x-auto">
            <livewire:employees />
        </div>
    </div>

    <!-- Modal Components (Positioned outside main flow) -->
    <livewire:employee-create />
    <livewire:employee-update />
    <livewire:employee-delete />
    <livewire:employee-show />
</x-layouts.app>