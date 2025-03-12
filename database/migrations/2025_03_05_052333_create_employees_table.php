<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id_fill');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix');
            $table->string('address');
            $table->string('contact_number');
            $table->string('image_path')->nullable();
            $table->string('emergency_contact_person');
            $table->string('emergency_contact_number');
            $table->date('date_of_birth');
            $table->date('employment_date');
            $table->date('end_of_employment_date')->nullable();
            $table->enum('classification', ['Job Order', 'Regular', 'Casual', 'Honorarium', 'Co-Terminus']);
            $table->enum('status', ['Employed', 'Retired', 'Separate']);
            $table->foreignId('office_id')->constrained()->onDelete('cascade');
            $table->foreignId('position_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
