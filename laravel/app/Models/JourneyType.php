<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Ship;
use App\Models\Journey;

class JourneyType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'base_price'
    ];

    public function ship() : HasMany {
        return $this->hasMany(Ship::class);
    }

    public function journey() : BelongsTo {
        return $this->belongsTo(Journey::class);
    }
}
