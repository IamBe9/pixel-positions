<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{

    use HasFactory;

    public function employer():belongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function jobs():hasMany
    {
        return $this->hasMany(Job::class);
    }
}
