<?php

namespace App\Http\Controllers\CustomerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected function redirectTo()
    {
        dd(request()->all());
        if(validateRequest('checkout')){
            return '/checkout';
        } else {
            return '/';
        }
    }

    public function __construct()
    {
        $this->middleware('customer.guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('customer.auth.login');
    }
    
    protected function validator(Request $request)
    {
        return $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    }

    public function guard(Request $request, $guard)
    {
        $this->validator($request);
        return Auth::guard($guard)->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $request->get('remember'));
    }

    public function login(Request $request)
    {
        if ($this->guard($request, 'customer')) {
            return redirect()->intended('/');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/');
    }
}
