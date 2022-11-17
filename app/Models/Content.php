<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    protected $fillable = [
        'id',
        'page',
        'position',
        'image',
        'title',
        'sub_title',
        'description',
    ];
}
