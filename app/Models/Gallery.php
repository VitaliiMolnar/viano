<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function carusel()
    {
        return $this->hasMany('App\Models\Carusel');
    }
}