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
        'lab_type-Australia' => 'Australia',
        'lab_type-Canada' =>'Canada',
        'lab_type-China'=>'China',
        'lab_type-France'=>'France',
        'lab_type-Germany'=>'Germany',
        'lab_type-India'=>'India',
        'lab_type-Italy'=>'Italy',
        'lab_type-NewZealand'=>'New Zealand',
        'lab_type-Taiwan'=>'Taiwan',
        'lab_type-UnitedKindom'=>'United Kingdom',
        'lab_type-UnitedStates'=>'United States',
        'lab_type-Japan'=>'Japan',
        'lab_type-SouthKorea'=>'South Korea'
//        'lab_type-japan' => 'Japan',
//        'lab_type-australia' => 'Australia/New Zealand',
   ];

    public const KEY_COUNTRIES = [
        'lab_type-Australia',
        'lab_type-Canada',
        'lab_type-China',
        'lab_type-France',
        'lab_type-Germany',
        'lab_type-India',
        'lab_type-Italy',
        'lab_type-NewZealand',
        'lab_type-Taiwan',
        'lab_type-UnitedKindom',
        'lab_type-UnitedStates',
        'lab_type-Japan',
        'lab_type-SouthKorea'

//        'lab_type-japan' => 'Japan',
//        'lab_type-australia' => 'Australia/New Zealand',
    ];

    public const STATUS = [
        'succeeded' => 1,
    ];
}
