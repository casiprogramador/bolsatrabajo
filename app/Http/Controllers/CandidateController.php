<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CandidateController extends Controller
{
    public function index(){
		return view('candidate.index');
	}
}
