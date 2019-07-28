<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Review extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['user_id','vendor_id','rating','amount','image','description','is_active'];
}
