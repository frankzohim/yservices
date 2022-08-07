<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'available',
        'distance',
        'town',
        'diploma',
        'year_of_experience',
        'cv',
        'file_diploma'
    ];
}