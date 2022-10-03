<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class join extends Model
{
    use HasFactory;

    protected $fillable=[
        'civility',
        'name',
        'username',
        'phone_number',
        'email',
        'postal_code',
        'town',
        'informations',
        'job',
        'available',
        'diploma',
        'cv',
        'user_id'
    ];
}
