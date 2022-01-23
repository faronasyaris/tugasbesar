<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playstation extends Model
{
    protected $primaryKey = 'id_playstation';
    protected $fillable = [
        'name', 'foto', 'status', 'serial_number'
    ];
}
