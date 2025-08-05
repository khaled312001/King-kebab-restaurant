<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'person',
        'reservation_date',
        'reservation_time',
        'message',
        'status'
    ];

    protected $casts = [
        'reservation_date' => 'date',
        'reservation_time' => 'datetime',
    ];
} 