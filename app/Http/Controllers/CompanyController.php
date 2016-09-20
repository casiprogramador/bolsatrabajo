<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Http\Requests;

class CompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	
	public function showFormRegister(){
      $countries = Country::all()->lists('name','id');
      return view('company.register')->with('countries',$countries);
    }
	
	public function saveFormRegister(Request $request){
		dd($request);	
    }
	
}
