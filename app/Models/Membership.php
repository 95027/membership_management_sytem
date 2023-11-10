<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'name',
        'email',
        'phone',
        'dob',
        'country',
        'state',
        'district',
        'city',
        'address',
        'pincode',
        'image',
        'remarks',
    ];
}
