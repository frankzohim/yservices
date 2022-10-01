<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;
use App\Models\worktime;

class need extends Model
{
    use HasFactory;

    protected $fillable = [
        'services',
        'start_at',
        'for_who',
        'gender',
        'firstname',
        'lastname',
        'postal_code',
        'town',
        'email',
        'phone',
        'address'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function worktimes(): BelongsToMany
    {
        return $this->belongsToMany(worktime::class);
    }
}
