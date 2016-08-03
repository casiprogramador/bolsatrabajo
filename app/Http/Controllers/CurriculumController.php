<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Country;
use App\Personal_data;
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
        'type_dni' => 'required|not_in:0',
        'num_dni' => 'required',
        'phone' => 'required',
        'marital_status' => 'required|not_in:0',
        'nationality' => 'required',
        'driver_license' => 'required',
        'vehicle' => 'required',
      ]);

      $personal_data = new Personal_data;
      $personal_data->birth_date = $request->birth_date;
      $personal_data->type_dni = $request->type_dni;
      $personal_data->num_dni= $request->num_dni;
      $personal_data->phone = $request->phone;
      $personal_data->marital_status = $request->marital_status;
      $personal_data->nationality = $request->nationality;
      $personal_data->driver_license = implode(",", $request->driver_license);
      $personal_data->vehicle = $request->vehicle;
      $personal_data->user_id = Auth::user()->id;
      $personal_data->save();

      return redirect()->route('curriculum_formation_show');
    }

    public function showFormFormation(){
      return view('curriculum.formation');
    }

    public function saveFormation(Request $request){
      $this->validate($request, [
        'birth_date' => 'required',
        'type_dni' => 'required|not_in:0',
        'num_dni' => 'required',
        'phone' => 'required',
        'marital_status' => 'required|not_in:0',
        'nationality' => 'required',
        'driver_license' => 'required',
        'vehicle' => 'required',
      ]);

      $personal_data = new Personal_data;
      $personal_data->birth_date = $request->birth_date;
      $personal_data->type_dni = $request->type_dni;
      $personal_data->num_dni= $request->num_dni;
      $personal_data->phone = $request->phone;
      $personal_data->marital_status = $request->marital_status;
      $personal_data->nationality = $request->nationality;
      $personal_data->driver_license = $request->driver_license;
      $personal_data->vehicle = $request->vehicle;
      $personal_data->save();


    }
}
