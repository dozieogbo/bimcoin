<?php

namespace App;

use App\Notifications\PasswordResetNotification;
use App\Notifications\SignupNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Ramsey\Uuid\Uuid;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password',
        'last_name', 'middle_name',
        'age', 'profession', 'phone',
        'religion', 'country', 'how_you_knew',
        'address'
    ];

    protected $casts = ['is_verified' => 'boolean'];

    protected $appends = ['name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $incrementing = false;

    public function getNameAttribute()
    {
        return $this->last_name.' '.$this->first_name.' '.$this->middle_name;
    }

    public function emailToken(){
        return $this->hasOne('App\EmailToken', 'id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetNotification($token, $this->first_name));
    }

    //Add UUID as Id when creating user
    public static function boot()
    {
        self::creating(function ($user) {
            $user->id = Uuid::uuid4()->toString();
            return $user;
        });
    }

    public function sendEmailVerification($token)
    {
        $this->notify(new SignupNotification($this, $token));
    }
}
