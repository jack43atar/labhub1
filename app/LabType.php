<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabType extends Model
{
    public function labReservations()
    {
        return $this->hasMany(LabReservation::class);
    }

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public const STATUS =[
        'c'     => 1,
        'tbc'   => 2,
    ];

    public const CURRENCIES = [
        'usd'   => 1,
        'eur'   => 2,
        'rmb'   => 3,
    ];

    public const CURRENCIES_FOR_VIEW = [
        1 => 'usd',
        2 => 'eur',
        3 => 'rmb',
    ];
}
