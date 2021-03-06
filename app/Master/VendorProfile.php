<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class VendorProfile extends Model
{
    use Active, SoftDeletes;

    protected $fillable = ['vendor_id','country_id','state_id','city_id','address','description','is_active', 'banner'];

    public function vendor()
    {
    	return $this->belongsTo('App\User');
    }

    public function country()
    {
    	return $this->belongsTo('App\Master\Country');
    }
    public function state()
    {
    	return $this->belongsTo('App\Master\State');
    }
    public function city()
    {
    	return $this->belongsTo('App\Master\City');
    }
}
