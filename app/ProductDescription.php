<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductDescription extends Model
{
    public function LabReservations(): BelongsToMany
    {
        return $this->belongsToMany(LabReservation::class);
    }

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
