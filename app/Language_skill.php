<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language_skill extends Model
{
    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
