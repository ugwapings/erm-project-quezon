<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $table = 'employees';

    protected $fillable = [
        'employee_id_fill',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'address',
        'contact_number',
        'image_path',
        'emergency_contact_person',
        'emergency_contact_number',
        'employment_date',
        'end_of_employment_date',
        'date_of_birth',
        'classification',
        'status',
        'position_id',
        'office_id'
    ];


    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function office() {
        return $this->belongsTo(Office::class);
    }

}
