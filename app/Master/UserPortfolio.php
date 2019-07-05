<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class UserPortfolio extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['user_id','vendor_type_id','album_id','image','is_active'];
}
