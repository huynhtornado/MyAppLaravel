<?php

namespace DemoLaravel\Http\Controllers\Auth;

use DemoLaravel\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DemoLaravel\User;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index() {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('auth/passwords/email');
        }
    }

    public function resetPassword(Request $request) {
        $email = $request->validate([
            'email' => ['required', 'email'],
        ]);

        //$req = Request::all();

        $user = User::where($email, $request['email'])->first();


        if ($result) {
            echo 'oke';
        } else {
            echo 'fail';
        }
    }
}
