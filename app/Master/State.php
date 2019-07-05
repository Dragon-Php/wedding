<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class State extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['name','country_id','flag','updated_by','created_by', 'is_active'];

    public function country()
    {
    	return $this->belongsTo('App\Master\Country');
    }

    public function cities()
    {
    	return $this->hasMany('App\Master\City');
    }
}
