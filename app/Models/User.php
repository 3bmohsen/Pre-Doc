<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function docSpec(): BelongsTo
    {
        return $this->belongsTo(Spec::class, 'specialization_id');
    }
    public function doctorBookings()
    {
        return $this->hasMany(Booking::class, 'doc_id');
    }

    public function userBookings()
    {
        return $this->hasMany(Booking::class, 'user_id');
    }
    protected $table='users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'birth',
        'gov',
        'sex',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
