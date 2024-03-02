<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ServicePreference extends Model
{
    public function LabReservations(): BelongsToMany
    {
        return $this->belongsToMany(LabReservation::class);
    }

    protected $guarded = [
        //
    ];
}
