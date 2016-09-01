<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function language_skill()
    {
        return $this->hasMany('App\Language_skill');
    }
}
