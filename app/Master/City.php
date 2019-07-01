<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class City extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['name','state_id','country_id','flag','updated_by','created_by','is_active'];

    public function country()
    {
    	return $this->belongsTo('App\Master\Country');
    }

    public function state()
    {
    	return $this->belongsTo('App\Master\State');
    }
}
