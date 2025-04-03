<div>
    
    <flux:modal name="edit-employee" class="md:w-3/4">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update existing Employee</flux:heading>
                <flux:subheading>Fill up the form below to update an existing employee</flux:subheading>
            </div>
            
            <form wire:submit="update">

                <div class="grid grid-cols-3">
                    <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-2 space-x-6">
                        <flux:input type="text" label="Employee ID" placeholder="Enter Employee ID" wire:model="employee_id_fill" />
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="text" label="First Name" placeholder="Enter first name" wire:model="first_name" />
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="text" label="Last Name" placeholder="Enter last name" wire:model="last_name" />
                        
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="text" label="Middle Name" placeholder="Enter middle name" wire:model="middle_name" />
                        
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="text" label="Suffix" placeholder="Enter suffix (e.g., Jr., Sr., III)" wire:model="suffix" />
                        
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="text" label="Address" placeholder="Enter address" wire:model="address" />
                    
                        
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="tel" label="Contact Number" placeholder="Enter contact number" wire:model="contact_number" />
                        
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="file" label="Image" accept="image/*" wire:model="image_path" />
                    </div>
                    
                    <div class="space-y-2 space-x-6">
                        <flux:input type="text" label="Emergency Contact Person" placeholder="Enter emergency contact person" wire:model="emergency_contact_person" />
                        
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input type="tel" label="Emergency Contact Number" placeholder="Enter emergency contact number" wire:model="emergency_contact_number" />
                        
                    </div>
                    <div class="space-y-2 space-x-6">
                        <flux:input label="Date of birth" type="date" wire:model="date_of_birth" />
                    </div>

                    <div class="space-y-2 space-x-6">
                        <flux:input type="date" label="Employment Date" wire:model="employment_date" />
                    </div>
                    <div class="space-y-2 space-x-6">
                        <label for="position_id" class="block text-sm font-medium text-gray-700 dark:text-white dark:text-white">Position</label>
                            <select id="position_id" wire:model="position_id" class=" border mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option class="dark:bg-gray-800" value="">Select Position</option>
                                @foreach ($positions as $position)
                                    <option class="dark:bg-gray-800" value="{{ $position->id }}">{{ $position->position_name }}</option>
                                @endforeach
                            </select>
                            @error('position_id')
                               <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="space-y-2 space-x-6">
                        <label for="office_id" class="block text-sm font-medium text-gray-700 dark:text-white">Office</label>
                        <select id="office_id" wire:model="office_id" class=" border mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option class="dark:bg-gray-800" value="">Select Office</option>
                            @foreach ($offices as $office)
                                <option class="dark:bg-gray-800" value="{{ $office->id }}">{{ $office->office_name }}</option>
                            @endforeach
                        </select>
                        @error('office_id')
                           <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="space-y-2 space-x-6">
                        <label for="classification" class="block text-sm font-medium text-gray-700 dark:text-white">Classification</label>
                            <select id="classification" wire:model="classification" class=" border mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option class="dark:bg-gray-800" value="">Select Classification</option>
                                <option class="dark:bg-gray-800" value="Job Order">Job Order</option>
                                <option class="dark:bg-gray-800" value="Regular">Regular</option>
                                <option class="dark:bg-gray-800" value="Casual">Casual</option>
                                <option class="dark:bg-gray-800" value="Honorarium">Honorarium</option>
                                <option class="dark:bg-gray-800" value="Co-Terminus">Co-Terminus</option>
                            </select>
                            @error('classification')
                               <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="space-y-2 space-x-6">
                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-white">Status</label>
                            <select id="status" wire:model="status" class=" border mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option class="dark:bg-gray-800" value="">Select Status</option>
                                <option class="dark:bg-gray-800" value="Employed">Employed</option>
                                <option class="dark:bg-gray-800" value="Retired">Retired</option>
                                <option class="dark:bg-gray-800" value="Separate">Separate</option>
                            </select>
                            @error('status')
                               <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="mt-6 grid grid-col-1 gap-2">
                    <div class="space-y-6 space-x-6">
                        <flux:input type="date" label="End of Employment Date" wire:model="end_of_employment_date" />
                    </div>
                </div>
                </div>
                <div class="flex justify-end mt-4">
                    <flux:button type="submit" variant="primary">Update</flux:button>
                </div>
            </form>

        </div>
    </flux:modal>
</div>