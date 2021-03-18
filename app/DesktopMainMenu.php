<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesktopMainMenu extends Model
{
    public function desktopSubMenu()
    {
        return $this->hasMany('App\DesktopSubMenu');
    }

    public function desktopMenuSections()
    {
    	return $this->belongsTo('App\DesktopMenuSection');
    }
}
