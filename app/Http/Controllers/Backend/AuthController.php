<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];

        if (auth()->attempt($credentials)) {
            $roles = [
                'admin' => 'admin.dashboard',
                'doctors' => 'admin.dashboard',
                'patient' => 'home',
            ];

            if (auth()->user()->email_verified_at === null) {
                notify()->error('Your mail not varified,Please verified your mail');
                auth()->logout();
                return redirect()->route('home');
            }
            if (array_key_exists(auth()->user()->role, $roles)) {
                return redirect()->route($roles[auth()->user()->role]);
            }
        }
        notify()->error('Creadentials Invalid', 'Creadentials');
        return redirect()->back()->withInput();
    }

    public function logout()
    {
        if (auth()->user()->role === 'patient') {
            auth()->logout();
            notify()->success('Successfully Logout', 'success');

            return redirect()->route('home');

        }
        auth()->logout();
        notify()->success('Successfully Logout', 'success');
        return redirect()->route('admin.loginForm');
    }
}
