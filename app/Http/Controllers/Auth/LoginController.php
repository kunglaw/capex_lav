<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/opex';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
	
	function view_session()
	{
		
		print_r(Auth::user());
	}
	
	function postLogin(Request $request)
	{
		$email = $request->input("email");
		$password = $request->input("password"); // mantaabb cuuyy, gak perlu di bcrypt 
		
		
		// role tidak usah di auth 
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
			
            return redirect()->intended('opex');
        }
		
	}
	
	function getLogin()
	{
		
		$data["dt_head"] = array("title"=>"Login");
		$data["dt_js_under"] = array();
		
		return view("Auth/login",$data);
	}
	
	function getLogout()
	{
		
		Auth::logout();
		return redirect()->intended('auth/login');
	}
}
