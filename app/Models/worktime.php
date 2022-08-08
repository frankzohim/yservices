<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\need;

class worktime extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'schedule',
        'moment'
    ];


    public function needs(): BelongsToMany
    {
        return $this->belongsToMany(need::class);
    }
}