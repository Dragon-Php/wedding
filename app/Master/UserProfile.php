<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class UserProfile extends Model
{
    use Active, SoftDeletes;

    protected $fillable = ['user_id','country_id','state_id','city_id','address','description','is_active'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
