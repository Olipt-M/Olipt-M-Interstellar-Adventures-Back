<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Climate extends Model
{
    use HasFactory;

    public function planet(): BelongsTo {
        return $this->belongsTo(Planet::class);
    }
}
