<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Ship extends Model
{
    use HasFactory;

    public function journeyType() : BelongsTo {
        return $this->belongsTo(JourneyType::class);
    }

    public function journey() : BelongsTo {
        return $this->belongsTo(Journey::class);
    }
}
