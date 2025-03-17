<x-layouts.app>

    <div class="relative mb-6 w-full">
        <div class="flex justify-between items-center">
            <div>
                <flux:heading size="xl" level="1">List of Offices</flux:heading>
                <flux:subheading size="sm" class="mb-6">Manage List of Offices</flux:subheading>
            </div>
            <div>
                <flux:modal.trigger name="create-office">
                    <flux:button>Add Office</flux:button>
                </flux:modal.trigger>
                <livewire:office.office-create />
                <livewire:office.office-update />
            </div>
        </div>
        <flux:separator variant="subtle" />
        <div class="place-content-center">
            <livewire:office.offices />
        </div>
    </div>

</x-layouts.app>    