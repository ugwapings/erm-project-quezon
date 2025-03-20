<div>
    
    <flux:modal name="edit-employee" class="md:w-3/4">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update existing Employee</flux:heading>
                <flux:subheading>Fill up the form below to update an existing employee</flux:subheading>
            </div>
            
            <form wire:submit="update">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 px-2 space-y-6">
                        <flux:input type="text" label="Employee ID" placeholder="Enter Employee ID" wire:model="employee_id_fill" />
                        <flux:input type="text" label="First Name" placeholder="Enter first name" wire:model="first_name" />
                        <flux:input type="text" label="Last Name" placeholder="Enter last name" wire:model="last_name" />
                        <flux:input type="text" label="Middle Name" placeholder="Enter middle name" wire:model="middle_name" />
                        <flux:input type="text" label="Suffix" placeholder="Enter suffix (e.g., Jr., Sr., III)" wire:model="suffix" />
                        <flux:input type="text" label="Address" placeholder="Enter address" wire:model="address" />
                    
                        <flux:input type="tel" label="Contact Number" placeholder="Enter contact number" wire:model="contact_number" />
                        <flux:input type="file" label="Image" accept="image/*" wire:model="image_path" />
                        <flux:input type="text" label="Emergency Contact Person" placeholder="Enter emergency contact person" wire:model="emergency_contact_person" />
                        <flux:input type="tel" label="Emergency Contact Number" placeholder="Enter emergency contact number" wire:model="emergency_contact_number" />
                        <flux:input label="Date of birth" type="date" wire:model="date_of_birth" />
                        
                    </div>
                    <div class="w-full md:w-1/2 px-2 space-y-6">
                        <div class="mb-4">
                            <label for="position_id" class="block text-sm font-medium text-gray-700">Position</label>
                            <select id="position_id" wire:model="position_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Select Position</option>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->position_name }}</option>
                                @endforeach
                            </select>
                            @error('position_id')   
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror   
                        </div>
                        <div class="mb-4">
                            <label for="office_id" class="block text-sm font-medium text-gray-700">Office</label>
                            <select id="office_id" wire:model="office_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Select Office</option>
                                @foreach ($offices as $office)
                                    <option value="{{ $office->id }}">{{ $office->office_name }}</option>
                                @endforeach
                            </select>
                            @error('office_id')   
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror   
                        </div>
                        <div class="mb-4">
                            <label for="classification" class="block text-sm font-medium text-gray-700">Classification</label>
                            <select id="classification" wire:model="classification" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Select Classification</option>
                                <option value="Job Order">Job Order</option>
                                <option value="Regular">Regular</option>
                                <option value="Casual">Casual</option>
                                <option value="Honorarium">Honorarium</option>
                                <option value="Co-Terminus">Co-Terminus</option>
                            </select>
                            @error('classification')   
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror   
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="status" wire:model="status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="">Select Status</option>
                                <option value="Employed">Employed</option>
                                <option value="Retired">Retired</option>
                                <option value="Separate">Separate</option>
                            </select>
                            @error('status')   
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror   
                        </div>
                        <flux:input type="date" label="Employment Date" wire:model="employment_date" />
                        <flux:input type="date" label="End of Employment Date" wire:model="end_of_employment_date" />
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <flux:button type="submit" variant="primary">Update</flux:button>
                </div>
            </form>

        </div>
    </flux:modal>
</div>