<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LabReservation extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function labType(): BelongsTo
    {
        return $this->belongsTo(LabType::class);
    }
    public function bookingInformation(): HasOne
    {
        return $this->hasOne(BookingInformation::class);
    }
    public function servicePreferences(): BelongsToMany
    {
        return $this->belongsToMany(ServicePreference::class, 'lab_reservation_service_preference');
    }
    public function productDescriptions(): BelongsToMany
    {
        return $this->belongsToMany(ProductDescription::class, 'lab_reservation_product');
    }
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
//
//    protected $dates = [
//        'start_date',
//        'end_date',
//    ];
   protected $guarded = [
        //
   ];

    public const COUNTRIES = [
        'lab_type-usa' => 'USA',
        'lab_type-canada' => 'Canada',
        'lab_type-germany' => 'Germany',
        'lab_type-china' => 'China',
//        'lab_type-japan' => 'Japan',
//        'lab_type-australia' => 'Australia/New Zealand',
   ];

    public const KEY_COUNTRIES = [
        'lab_type-usa',
        'lab_type-canada',
        'lab_type-germany',
        'lab_type-china',
//        'lab_type-japan' => 'Japan',
//        'lab_type-australia' => 'Australia/New Zealand',
    ];

    public const STATUS = [
        'succeeded' => 1,
    ];
}
