<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Paymentplan;
use App\Company;
use App\Companypaymentplan;

class PaymentplanController extends Controller
{
	public function __construct(){
		
		
        $this->middleware('auth');
    }
	
    public function index(){
		
		$paymentplans = Paymentplan::all();
		return view('paymentplan.index')->with('paymentplans',$paymentplans);
	}
	
	public function create(){
		return view('paymentplan.create');
	}
	
	public function store(Request $request){
	   $this->validate($request, [
        'name' => 'required',
        'number_publication' => 'required',
        'description' => 'required',
      ]);

      $paymentplan = new Paymentplan;
      $paymentplan->name = $request->name;
	  $paymentplan->number_publication = $request->number_publication;
	  $paymentplan->description = $request->description;
      $paymentplan->save();

      return redirect()->route('paymentplan_index');
	}
	
	public function company(){
		$companies = Company::all()->lists('name','id');
		$paymentplans = Paymentplan::all()->lists('name','id');
		return view('paymentplan.company')
		->with('companies',$companies)
		->with('paymentplans',$paymentplans);
	}
	
	public function companyStore(Request $request){
	  $this->validate($request, [
        'paymentplan' => 'required',
        'company' => 'required',
      ]);

      $companypaymentplan = new Companypaymentplan;
      $companypaymentplan->company_id = $request->company;
	  $companypaymentplan->paymentplan_id = $request->paymentplan;
	  $companypaymentplan->publication = '0';
	  $companypaymentplan->state = '1';
      $companypaymentplan->save();

      return redirect()->route('admin_index');
	}
}
