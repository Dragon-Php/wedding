<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;


class VendorAvailablePlace extends Model
{
    use Active, SoftDeletes;

    protected $fillable = ['vendor_id','country_id','state_id','is_active', 'title'];

    public function country()
    {
    	return $this->belongsTo('App\Master\Country');
    }
    public function state()
    {
    	return $this->belongsTo('App\Master\State');
    }
}
