<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class franchise extends Model
{
    use HasFactory;

    protected $fillable = [
        'personnal_contribution',
        'project_info'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}