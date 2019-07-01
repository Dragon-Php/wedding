<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Country extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['name','iso3','iso2','countrycode','phonecode','capital','currency','flag','created_by','updated_by', 'is_active'];

    public function states()
    {
    	return $this->hasMany('App\Master\State');
    }
}
