<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devis extends Model
{
    use HasFactory;

    protected $fillable=[
        'civility',
        'prenom',
        'nom',
        'email',
        'numero',
        'code_postal'
    ];
}
