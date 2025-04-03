<div>
    <flux:modal name="show-employee" class="wd:w-full">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Employee Details</flux:heading>
                <flux:subheading>Detailed information about the employee</flux:subheading>
            </div>
            
            <div class="grid grid-cols-1 gap-4 justify-center">
                @if ($image_path)
                    <img src="{{ asset('storage/' . $image_path) }}" 
                         alt="Profile"
                         class="rounded rounded-full"
                         style="width: 25em; height: 25em;">
                @else
                    <img src="{{ asset('storage/images/no-photo.png') }}" 
                        alt="Profile"
                        class="rounded rounded-full"
                        style="width: 25em; height: 25em;">
                @endif
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Employee ID</h3>
                    <p class="text-gray-600 dark:text-white">{{ $employee_id_fill }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Full Name</h3>
                    <p class="text-gray-600 dark:text-white">{{ $first_name }} {{ $middle_name }} {{ $last_name }}</p>
                    <p class="text-gray-600 dark:text-white">suffix: {{ $suffix }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Position</h3>
                    <p class="text-gray-600 dark:text-white">{{ $employee->position->position_name ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Office</h3>
                    <p class="text-gray-600 dark:text-white">{{ $employee->office->office_name ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Classification</h3>
                    <p class="text-gray-600 dark:text-white">{{ $employee->classification ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Status</h3>
                    <p class="text-gray-600 dark:text-white">{{ $employee->status ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Contact Information</h3>
                    <p class="text-gray-600 dark:text-white">Number: {{ $contact_number }}</p>
                    <p class="text-gray-600 dark:text-white">Address: {{ $address }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Emergency Contact</h3>
                    <p class="text-gray-600 dark:text-white">Name: {{ $emergency_contact_person }}</p>
                    <p class="text-gray-600 dark:text-white">Number: {{ $emergency_contact_number }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Employment Dates</h3>
                    <p class="text-gray-600 dark:text-white">Start: {{ $employment_date }}</p>
                    <p class="text-gray-600 dark:text-white">End: {{ $end_of_employment_date ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700 dark:text-white">Date of Birth</h3>
                    <p class="text-gray-600 dark:text-white">{{ $date_of_birth }}</p>
                </div>
            </div>

            <div class="mt-4 flex justify-end">
                <flux:button variant="primary" class="w-full" wire:click="close">Close</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
