<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
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
        if ($this->guard($request, 'admin')) {
            return redirect()->intended('/admin/dashboard');
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
