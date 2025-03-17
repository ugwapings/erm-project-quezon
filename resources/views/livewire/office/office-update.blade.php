<div>
    <flux:modal name="update-office">
        <div class="flex justify-between items-center">
            <div>
                <flux:heading size="xl" level="1">
                    Update Office
                </flux:heading>
                <flux:subheading size="sm" class="mb-6">
                    Update Existing Office
                </flux:subheading>
            </div>
        </div>
        <flux:separator variant="subtle" />
        <div class="w-full md:w-1/2 px-2 space-y-6">
            <div class="mb-4">
                <flux:input type="text" label="Office Name"
                wire:model="office_name" value="{{ $office_name }}"/>
            </div>
            <div class="flex justify-end mt-4">
                <flux:button type="submit" variant="primary" wire:click="update">
                    Update
                </flux:button>
            </div>
        </div>
    </flux:modal>

</div>
