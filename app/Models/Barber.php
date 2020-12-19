<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    protected $fillable = 
    [
        'barber_name', 
        'owner_name', 
        'profile_pic', 
        'email', 
        'password', 
        'whatsapp', 
        'address', 
        'lat', 
        'long',
        'opening_hours'
    ];
}
