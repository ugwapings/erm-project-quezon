<x-layouts.app>
    <div>
        <div>
            <div>
                <flux:heading size="xl" level="1">List of Employees</flux:heading>
                <flux:subheading size="sm" class="mb-6">Manage List of Employees</flux:subheading>
            </div>
            
            <div class="flex flex-wrap items-center mb-4 gap-4">
                <div class="flex-1">
                    <livewire:employee-filter/>
                </div>
                <div class="flex items-center gap-4">
                    <flux:modal.trigger name="create-employee">
                        <flux:button>Add Employee</flux:button>
                    </flux:modal.trigger>
                    <livewire:employee-export />
                </div>
            </div> 
            
            <div>
                <livewire:employee-categories />
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