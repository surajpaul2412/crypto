<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'short_image1', 'short_image2', 'long_image'
    ];
}
