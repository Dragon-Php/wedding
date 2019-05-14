<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Category extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['parent_id', 'title', 'image', 'is_active'];
}
