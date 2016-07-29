<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

use App\Http\Requests;

class CurriculumController extends Controller
{
    public function showFormPersonalDate(){
      $countries = Country::all()->lists('name','id');
      return view('curriculum.personal_date')->with('countries',$countries);
    }
}
