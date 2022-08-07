<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worktime extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'schedule',
        'moment'
    ];
}