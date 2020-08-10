<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use App\Notifications\PasswordRestLinkSend;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendPasswordResetNotification($token)
    {
      return  Notification::send($this, new PasswordRestLinkSend($token));
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
