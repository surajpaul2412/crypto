<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'slug','sort_by','url'
    ];

    public function submenu()
    {
        return $this->hasMany('App\Submenu')->orderBy('sort_by','asc');
    }
}
