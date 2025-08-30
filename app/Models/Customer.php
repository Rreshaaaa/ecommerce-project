<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone_number',
        'is_active',
    ];

    protected $hidden = [
        'password',
    ];
}
