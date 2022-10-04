<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planification extends Model
{
    use HasFactory;

public $timestamps = false;
public $incrementing = false;
protected $keyType = 'string';
protected $fillable = ['id', 'title', 'start', 'end',];
}
