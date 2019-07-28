<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Setting extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['value', 'is_active'];
}
