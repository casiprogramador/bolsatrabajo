<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

use App\Http\Requests;

class CurriculumController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showFormPersonalDate(){
      $countries = Country::all()->lists('name','id');
      return view('curriculum.personal_date')->with('countries',$countries);
    }

    public function savePersonalDate(Request $request){
      $this->validate($request, [
        'birth_date' => 'required',
        'type_dni' => 'required',
        'num_dni' => 'required',
        'phone' => 'required',
        'marital_status' => 'required',
        'nationality' => 'required',
        'driver_license' => 'required',
        'vehicle' => 'required',
      ]);

      dd($request);
    }
}
