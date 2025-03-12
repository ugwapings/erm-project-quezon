<div>
    <flux:modal name="delete-employee" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete employee?</flux:heading>

                <flux:subheading>
                    <p>You're about to delete this employee.</p>
                    <p>This action cannot be reversed.</p>
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <form wire:submit="confirmDeleteEmployee">
                    <flux:button type="submit" variant="danger">Delete project</flux:button>
                </form>
            </div>
        </div>
    </flux:modal>
</div>
