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
        'type'
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