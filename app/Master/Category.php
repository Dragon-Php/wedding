<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Category extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['parent_id', 'title', 'image', 'is_active', 'icon', 'slug'];

    public function vendor_type()
    {
    	return $this->belongsToMany('App\Master\VendorType', 'category_vendor_type');
    }

    public function setSlugAttribute($value)
    {
    	return $this->attributes['slug'] = strtolower(trim(str_replace(' ', '_', $value)));
    }
}
