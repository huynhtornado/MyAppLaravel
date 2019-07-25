<?php

namespace DemoLaravel\Http\Controllers\Auth;

use DemoLaravel\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use DemoLaravel\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
use Auth; //use thư viện auth

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('auth/login');
        }
    }

    public function postLogin(LoginRequest $request) {
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $rememberRequest = $request->remember;
        $remember_me = trans('global.remember_me');
        if ($rememberRequest == $remember_me) {
            $remember = true;
        } else {
            $remember = false;
        }
        //$credentials = $request->only('email', 'password');
        if (Auth::attempt($login, $remember)) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('message', 'Email or Password incorrect');
            //return redirect()->back()->withInput(Input::all(), 'Email or Password incorrect');
        }
    }

}
