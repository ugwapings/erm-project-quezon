<div>
    <flux:modal name="create-position">
        <div class="flex justify-between items-center">
            <div>
                <flux:heading size="xl" level="1">
                    Add Position
                </flux:heading>
                <flux:subheading size="sm" class="mb-6">
                    Add New Position
                </flux:subheading>
            </div>
        </div>
        <flux:separator variant="subtle" />
        <div class="w-full md:w-1/2 px-2 space-y-6">
            <div class="mb-4">
                <flux:input type="text" label="Position Name" wire:model="position_name" />
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <flux:button type="submit" variant="primary" wire:click="store">Submit</flux:button>
        </div>
    </flux:modal>

</div>
