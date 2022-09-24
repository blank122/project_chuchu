<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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


    protected function authenticated ()
    {
        if(Auth::user()->role_as == '1' && Auth::user()->status == '1'){
            return redirect('admin/dashboard')->with('message', 'Welcome back');
        }
        else if (Auth::user()->role_as == '0' && Auth::user()->status == '1')
        {
            return redirect('user/dashboard')->with('status', 'Logged in Successfully');
        }
        else{
            return redirect('/')->with('message', 'You are not verified Student');
        }
    }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
