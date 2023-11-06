<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Planet extends Model
{
    use HasFactory;

    public function climate() : HasOne {
        return $this->hasOne(Climate::class);
    }

    public function journey() : BelongsTo {
        return $this->belongsTo(Journey::class);
    }
}
