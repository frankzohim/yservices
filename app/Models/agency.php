<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\information;

class agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adress',
        'phone_number'
    ];

    public function informations(): HasMany
    {
        return $this->hasMany(information::class);
    }
}