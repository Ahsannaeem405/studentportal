<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'number',
        'role',
        'password',

        'mon_start_time',
        'mon_end_time',

        'tue_start_time',
        'tue_end_time',

        'wed_start_time',
        'wed_end_time',

        'thu_start_time',
        'thu_end_time',

        'fri_start_time',
        'fri_end_time',

        'sat_start_time',
        'sat_end_time',

        'sun_start_time',
        'sun_end_time',

        'img',



    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
