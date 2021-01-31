<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeNotification extends Model
{
    protected $fillable = [
        'batch', 'seat', 'date'
    ];
}
