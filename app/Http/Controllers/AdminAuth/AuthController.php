<?php

namespace App\Http\Controllers\AdminAuth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use App\Company;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
	protected $redirectTo = '/admin';
	protected $guard = 'admin';
	public function showLoginForm()
	{
		if (view()->exists('auth.authenticate')) {
			return view('auth.authenticate');
		}

		return view('admin.auth.login');
	}
	
	public function showRegistrationForm()
	{
		return view('admin.auth.register');
	}  

	/**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
	
	protected function authenticated($request, $user)
    {
        if($user->rol === 'company') {
			$user_id = Auth::user()->id;
			$company = Company::where('user_id',$user_id );
			if ($company->count() < 1) {
				return redirect()->intended('/company/register');
			}
			return redirect()->intended('/company/index');
        }elseif ($user->rol === 'candidate') {
			return redirect()->intended('/client/curriculum/personal_date');
		}elseif ($user->rol === 'admin') {
			return redirect()->intended('/admin/index');
		}

        dd($user);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
		if($data['rol'] == 'candidate'){
			$this->redirectPath =  '/client/curriculum/personal_date';
		}elseif($data['rol'] == 'company'){
			$this->redirectPath =  '/company/register';
		}
		
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'rol' => $data['rol'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
