<div>
<<<<<<< HEAD
    <flux:modal name="show-employee" class="w-full grid grid-cols-3 gap-4">
=======
    <flux:modal name="show-employee" 
                class="md:w-full"
                style="width: 500ch"
                >
>>>>>>> feature/angelou/show-employee
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Employee Details</flux:heading>
                <flux:subheading>Detailed information about the employee</flux:subheading>
            </div>
            
            <div class="grid grid-cols-1 gap-4 justify-center">
                @if ($image_path)
<<<<<<< HEAD
                    <img src="{{ 'storage/'.$image_path }}" 
                         alt="Profile"
                         class="rounded rounded-full"
                         style="width: 25em; height: 25em;">
                @else
                    <img src="storage\images\no-photo.png" 
                        alt="Profile"
                        class="rounded rounded-full"
                        style="width: 25em; height: 25em;">
=======
                    <img src="{{'storage/'.$image_path}}" 
                    alt="Profile"
                    class="rounded rounded-full"
                    style="height: 25em; width: 25em;"
                    >
                @else
                    <img src="storage\images\no-photo.png" 
                    alt="Profile"
                    class="rounded rounded-full"
                    style="height: 25em; width: 25em;"
                    >
>>>>>>> feature/angelou/show-employee
                @endif
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Employee ID</h3>
                    <p class="text-gray-600">{{ $employee_id_fill }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Full Name</h3>
                    <p class="text-gray-600">{{ $first_name }} {{ $middle_name }} {{ $last_name }}</p>
                    <p class="text-gray-600">suffix: {{ $suffix }}</p>
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
                    <p class="text-gray-600">Number: {{ $contact_number }}</p>
                    <p class="text-gray-600">Address: {{ $address }}</p>
                </div>

                <div class="space-y-2">
<<<<<<< HEAD
                    <h3 class="font-bold text-gray-700">Emergency Contact</h3>
=======
                    <h3 class="font-bold text-gray-700">Emergency Contact Person</h3>
>>>>>>> feature/angelou/show-employee
                    <p class="text-gray-600">Name: {{ $emergency_contact_person }}</p>
                    <p class="text-gray-600">Number: {{ $emergency_contact_number }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Employment Dates</h3>
                    <p class="text-gray-600">Start: {{ $employment_date }}</p>
                    <p class="text-gray-600">End: {{ $end_of_employment_date ?? 'N/A' }}</p>
                </div>

                <div class="space-y-2">
                    <h3 class="font-bold text-gray-700">Date of Birth</h3>
                    <p class="text-gray-600">{{ $date_of_birth }}</p>
                </div>
            </div>

            <div class="mt-4 flex justify-end">
<<<<<<< HEAD
                <flux:button variant="primary" class="w-full" wire:click="close">Close</flux:button>
=======
                <flux:button variant="primary" 
                             wire:click="close"
                             class="w-full"
                             >Close
                </flux:button>
>>>>>>> feature/angelou/show-employee
            </div>
        </div>
    </flux:modal>
</div>
