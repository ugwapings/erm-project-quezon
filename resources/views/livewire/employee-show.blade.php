<div>
    <flux:modal name="show-employee" class="md:w-3/4">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Employee Details</flux:heading>
                <flux:subheading>Detailed information about the employee</flux:subheading>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Employee ID</h3>
                    <p class="text-gray-600">{{ $employee_id_fill }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Full Name</h3>
                    <p class="text-gray-600">{{ $first_name }} {{ $middle_name }} {{ $last_name }} {{ $suffix }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Position</h3>
                    <p class="text-gray-600">{{ $employee->position->position_name ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Office</h3>
                    <p class="text-gray-600">{{ $employee->office->office_name ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Classification</h3>
                    <p class="text-gray-600">{{ $employee->classification ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Status</h3>
                    <p class="text-gray-600">{{ $employee->status ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Contact Information</h3>
                    <p class="text-gray-600">{{ $contact_number }}</p>
                    <p class="text-gray-600">{{ $address }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Emergency Contact</h3>
                    <p class="text-gray-600">{{ $emergency_contact_person }}</p>
                    <p class="text-gray-600">{{ $emergency_contact_number }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Employment Dates</h3>
                    <p class="text-gray-600">Start: {{ $employment_date }}</p>
                    <p class="text-gray-600">End: {{ $end_of_employment_date ?? 'Current' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Date of Birth</h3>
                    <p class="text-gray-600">{{ $date_of_birth }}</p>
                </div>
            </div>

            <div class="mt-4 flex justify-end">
                <flux:button wire:click="close">Close</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
