<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public function experience()
    {
        return $this->hasMany('App\Experience');
    }
}
