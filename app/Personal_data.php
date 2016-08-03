<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_data extends Model
{
    protected $table = 'personal_data';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
