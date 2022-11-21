<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTag extends Model
{
    protected $table = 'about_tags';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'image', 'title'
    ];
}
