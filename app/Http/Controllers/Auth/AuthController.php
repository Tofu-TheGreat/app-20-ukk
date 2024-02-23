<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register_page()
    {
        return view('auth-page.register')->with('title', 'Register your account');
    }
    public function register_page_admin()
    {
        return view('auth-page.register-admin')->with('title', 'Register your account');
    }
    public function login_page()
    {
        return view('auth-page.login')->with('title', 'Log into your account');
    }

    public function register(UserRequest $request)
    {
        $req = $request->all();
        $req['password'] = Hash::make($request->password);
        $req['role'] = 'user';
        $user = User::create($req);

        return redirect()->intended('/login-page');
    }
    public function register_admin(UserRequest $request)
    {
        $req = $request->all();
        $req['password'] = Hash::make($request->password);
        $req['role'] = 'admin';
        $user = User::create($req);

        return redirect()->intended('/login-page');
    }

    public function login(Request $request)
    {
        $req = $request->all();

        $cred = User::where('email', $req['email'])->first();
        if ($cred) {
            if (Hash::check($req['password'], $cred->password)) {
                if ($cred->role == 'admin') {
                    Auth::login($cred);
                    $request->session()->regenerate();
                    return redirect()->intended('/dashboard-admin-page');
                } elseif ($cred->role == 'staff') {
                    Auth::login($cred);
                    $request->session()->regenerate();
                    return redirect()->intended('/dashboard-admin-page');
                }else{
                    Auth::login($cred);
                    $request->session()->regenerate();
                    return redirect()->intended('/buku');
                }
            } else {
                return back();
            }
        } else {
            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect()->intended('/');
    }
}
