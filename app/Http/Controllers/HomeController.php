<?php

namespace DemoLaravel\Http\Controllers;

use Auth;
class HomeController extends Controller
{
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
        return view('home');
    }

    /**
     * action logout
     * @return RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
