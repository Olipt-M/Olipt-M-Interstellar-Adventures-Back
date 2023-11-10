<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Climate;
use App\Models\Journey;
use App\Models\JourneyType;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'climate_id',
        'picture',
        'system',
        'distance_from_earth',
        'capital',
        'date_colonization',
        'nb_inhabitants',
    ];

    public function climate() : HasOne {
        return $this->hasOne(Climate::class);
    }

    public function journey() : BelongsTo {
        return $this->belongsTo(Journey::class);
    }

    public function journeyType() : BelongsToMany {
        return $this->belongsToMany(JourneyType::class);
    }
}
