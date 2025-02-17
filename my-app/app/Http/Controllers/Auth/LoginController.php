<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guestLogin()
    {
        $email = 'wasedakyouiku6@gmail.com';
        $password = 'kouta258';
    
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('home');
        }
}

protected function authenticated(Request $request, $user)
     {
         if($user->deleted_flag) {
             Auth::logout();
             return redirect()->route('login')->with('warning', '退会済みのアカウントです。');
         }
     }

}