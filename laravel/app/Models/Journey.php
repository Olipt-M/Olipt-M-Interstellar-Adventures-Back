<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Journey extends Model
{
    use HasFactory;

    public function journeyType() : HasOne {
        return $this->hasOne(JourneyType::class);
    }

    public function ship() : HasOne {
        return $this->hasOne(Ship::class);
    }

    public function planet() : HasOne {
        return $this->hasOne(Planet::class);
    }
}
