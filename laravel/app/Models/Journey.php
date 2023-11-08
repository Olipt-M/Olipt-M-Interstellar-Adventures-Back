<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\JourneyType;
use App\Models\Ship;
use App\Models\Planet;
use App\Models\User;

class Journey extends Model
{
    use HasFactory;

    protected $fillable = [
        'ship_id',
        'planet_id',
        'journey_type_id',
        'departure_date',
        'return_date',
        'price'
    ];

    public function journeyType() : HasOne {
        return $this->hasOne(JourneyType::class);
    }

    public function ship() : HasOne {
        return $this->hasOne(Ship::class);
    }

    public function planet() : HasOne {
        return $this->hasOne(Planet::class);
    }

    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class);
    }
}
