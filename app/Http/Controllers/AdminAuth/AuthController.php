<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class AuthController extends Controller
{
	
	public function showLoginForm()
	{
		return view('admin.login');
	}
	
	public function loginForm(Request $request)
    {
	  $this->validate($request, [
        'email' => 'required',
        'password' => 'required',
      ]);
		if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin_index');
        }
		
		return view('admin.login');
	}

}
