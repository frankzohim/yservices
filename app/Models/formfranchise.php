<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formfranchise extends Model
{
    use HasFactory;

    protected $fillable = [
        'research',
        'civility',
        'name',
        'surname',
        'phone',
        'email',
        'adresse',
        'postal_code',
        'city',
        'occupation',
        'knowledge',
        'town',
        'capital',
        'description',
        'news',

    ];
}
