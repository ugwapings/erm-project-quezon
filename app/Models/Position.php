<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    protected $table = 'positions';

    protected $fillable = [
        'position_name',
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
