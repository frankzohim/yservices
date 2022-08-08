<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\agency;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function agency(): BelongsTo
    {
        return $this->belongsTo(agency::class);
    }
}