<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Gallery extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['user_id','title', 'is_active'];
}
