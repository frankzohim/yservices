<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\information;
use App\Models\User;

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

    /**
     * Get all of the users for the agency
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
