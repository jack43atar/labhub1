<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    public function labReservation(): BelongsTo
    {
        return $this->belongsTo(LabReservation::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public const STATUS = [
        0 => ''
    ];
}
