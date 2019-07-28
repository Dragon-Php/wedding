<?php

namespace App\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Traits\Active;

class Blog extends Model
{
    use Active, SoftDeletes;

    protected $fillable  = ['title', 'auther', 'short_description', 'description', 'image', 'is_active'];
}
