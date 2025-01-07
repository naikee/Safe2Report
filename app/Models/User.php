<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
        'username',
        'phone',
        'about',
        'profile_picture',
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
            'status' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function loginLogs()
    {
        return $this->hasMany(UserLogin::class);
    }

    public function schools()
    {
        return $this->hasOne(School::class, 'user_id', 'id');
    }

    public function scopeActiveUsers($query)
    {
        return $query->where('status', 1)->where('roles', 'educator');
    }

    public function scopePendingUsers($query)
    {
        return $query->where('status', 0)->where('roles', 'educator');
    }
}
