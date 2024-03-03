
<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function labReservations(): HasMany
    {
        return $this->hasMany(LabReservation::class);
    }
    public function business(): HasOne
    {
        return $this->hasOne(Business::class);
    }
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'type',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public const TYPES = [
        'admin'     => 1,
        'business'  => 2,
        'user'      => 3,
    ];
}
