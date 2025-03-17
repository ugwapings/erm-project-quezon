<div>
    <flux:modal name="update-position">
        <div class="flex justify-between items-center">
            <div>
                <flux:heading size="xl" level="1">Update Position</flux:heading>
                <flux:subheading size="sm" class="mb-6">Update Position</flux:subheading>
            </div>
        </div>
        <flux:separator variant="subtle" />
        <div class="w-full md:w-1/2 px-2 space-y-6">
            <div class="mb-4">
                <flux:input type="text" label="Position Name" 
                wire:model="position_name" value="{{ $position_name }}"/>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <flux:button type="submit" variant="primary" 
            wire:click="update">Submit</flux:button>
        </div>
    </flux:modal>
</div>
