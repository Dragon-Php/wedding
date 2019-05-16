<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class VendorType extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['slug', 'title', 'image', 'is_active'];

    public function setSlugAttribute($value)
    {
    	return $this->attributes['slug'] = \Str::lower(str_replace(' ', '_', $value));
    }
}
