<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin', 'approved_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function identities() {
       return $this->hasMany('App\SocialIdentity');
    }
    
    protected $dispatchesEvents = [
        'created' => Events\NewUserRequiringApproval::class

    ];

    public function getRouteKeyName() {

        return 'name';
    }

    public function accounts() {
        return $this->hasMany(File::class)->latest();
    }

}
