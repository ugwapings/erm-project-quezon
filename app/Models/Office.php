<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //

    protected $table = 'offices';

    protected $fillable = [
        'office_name',
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
