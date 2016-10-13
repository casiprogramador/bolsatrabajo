<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function paymentplans()
	{
		return $this->belongsToMany('App\Paymentplan','company_paymentplan','company_id','paymentplan_id')->withPivot('publication', 'state');
	}
	
	public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
