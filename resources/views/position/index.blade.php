<x-layouts.app>

    <div class="relative mb-6 w-full">
        <div class="flex justify-between items-center">
            <div>
                <flux:heading size="xl" level="1">List of Positions</flux:heading>
                <flux:subheading size="sm" class="mb-6">Manage List of Positions</flux:subheading>
            </div>
            <div>
                <flux:modal.trigger name="create-position">
                    <flux:button>Add Position</flux:button>
                </flux:modal.trigger>
                <livewire:position.position-create />
                <livewire:position.position-update />
            </div>
        </div>
        <flux:separator variant="subtle" />
        <div class="place-content-center">
            <livewire:position.positions />
        </div>
    </div>

</x-layouts.app>    