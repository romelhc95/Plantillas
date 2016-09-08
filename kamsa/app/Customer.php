<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'dni', 'first_name', 'last_name', 'department_id', 'province_id', 'district_id', 'address', 'phone', 'user_id'
    ];
    
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
