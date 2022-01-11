<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playstation extends Model
{
    protected $fillable = [
        'id_playstation', 'name', 'booking_date', 'booking_duration', 'return_time', 'guarantee', 'status'
    ];

    protected $primaryKey='id_playstation';
}


