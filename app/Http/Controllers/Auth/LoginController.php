<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
   // protected $redirectTo = '/home';
   protected function redirectTo()
{
    
    if (Auth::user()->role == 'admin'){
        return '/admin';
    }
    if (Auth::user()->role == 'operator'){
        return '/operator';
    }
    if (Auth::user()->role == 'technician'){
        
        return '/technicianjobs';
    }

    if (Auth::user()->role == 'manager'){
        // return '/home';
        return '/manager';
    }
    if (Auth::user()->role == 'supervisor'){
        // return '/home';
        return '/supervisor';
    }
    else{
       return '/customer';
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
