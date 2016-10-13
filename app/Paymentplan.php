<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymentplan extends Model
{
    public function companies()
	{
		return $this->belongsToMany('App\Company','company_paymentplan','paymentplan_id','company_id');
	}
}
