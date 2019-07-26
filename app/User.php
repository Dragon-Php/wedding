<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Traits\Active;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, Active, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','contact', 'city','slug', 'is_active'
    ];

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

    public function vendor_type()
    {
        return $this->belongsToMany('App\Master\VendorType');
    }

    public function profile()
    {
        return $this->hasOne('App\Master\UserProfile');
    }
    public function vendor_profile()
    {
        return $this->hasOne('App\Master\VendorProfile' , 'vendor_id');
    }

    public function user_portfolio()
    {
        return $this->hasMany('App\Master\UserPortfolio');
    }
}
