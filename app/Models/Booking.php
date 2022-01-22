<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'id_playstation';
    protected $fillable = [
        'id_playstation', 'name', 'booking_date', 'booking_duration', 'return_time', 'guarantee', 'status'
    ];

    
}

