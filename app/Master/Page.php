<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Page extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['title', 'short_description', 'description', 'image', 'is_active'];
}
