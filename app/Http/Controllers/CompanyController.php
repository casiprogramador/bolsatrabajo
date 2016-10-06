<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Country;
use App\Http\Requests;
use App\Company;

class CompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	
	public function index(){
		return view('company.index');
	}
	
	public function showFormRegister(){
		
	  $user_id = Auth::user()->id;
	  $company = Company::where('user_id',$user_id );
	  $countries = Country::all()->lists('name','id');
	  if ($company->count()) {
		  return view('company.edit_register')
				  ->with('company',$company->first())
				  ->with('countries',$countries);
	  }
		
      
      return view('company.register')->with('countries',$countries);
    }
	
	public function saveFormRegister(Request $request){
	  $this->validate($request, [
        'name' => 'required',
        'name_sat' => 'required',
        'rfc' => 'required',
		'city' => 'required',
		'country' => 'required|not_in:0',
        'direction' => 'required',
        'type' => 'required|not_in:0',
        'number_worker' => 'required',
        'typology' => 'required',
        'description' => 'required',
		'web' => 'required',
		'logo' => 'required',
		'contact_name' => 'required',
		'position' => 'required|not_in:0',
		'phone' => 'required',
		'cellphone' => 'required',
      ]);
	  
	  $id_user = Auth::user()->id;
        $file = $request->file('logo');
        $tmpFilePath = '/upload/';
        $tmpFileName = time() . '-'.$id_user. '-logo-' . $file->getClientOriginalName();
        $file->move(public_path() . $tmpFilePath, $tmpFileName);
        $path = $tmpFilePath . $tmpFileName;
	  
	  
	  $company = new Company;
      $company->name = $request->name;
      $company->name_sat = $request->name_sat;
	  $company->rfc = $request->rfc;
      $company->city= $request->city;
      $company->direction = $request->direction;
      $company->type = $request->type;
	  $company->number_worker = $request->number_worker;
      $company->typology = $request->typology;
      $company->description = $request->description;
      $company->web = $request->web;
      $company->logo = $path;
	  $company->contact_name = $request->contact_name;
	  $company->position = $request->position;
	  $company->phone = $request->phone;
	  $company->cellphone = $request->cellphone;
	  $company->country_id = $request->country;
	  $company->user_id = Auth::user()->id;
      $company->save();

      return redirect()->route('home');
    }
	
}
