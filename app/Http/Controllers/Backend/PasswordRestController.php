<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\PasswordEmailCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PasswordRestController extends Controller
{


    public function showPasswordRestForm()
    {
        return view('backend.auth.reset');
    }

    public function sendLink(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email', new PasswordEmailCheck],
        ]);
        $token = Str::random(40);
        $user = User::where('email', $request->input('email'))->first();
        $passwordrest = DB::table('password_rests')->insert([
            'email' => $request->input('email'),
            'token' => $token,
        ]);

        $user->sendPasswordResetNotification($token);
        notify()->success('We sent password rest token check your email ' . $request->input('email'));
        return redirect()->back();
    }

    public function passwordCahngeForm($token)
    {
        $token = DB::table('password_rests')->select('token')->where('token', $token)->first();

        if ($token === null) {
            notify()->error('Token invalid');
            return redirect()->route('admin.loginForm');
        }
        return view('backend.auth.change', ['token' => $token]);
    }

    public function passwordCahnge(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);
        $passwordRest = DB::table('password_rests')->select('token', 'email')->where('token', $request->reset_token)->first();
        $user = User::where('email', $passwordRest->email)->first();
       $user->update([
           'password'=>bcrypt($request->password)
       ]);
       Auth::login($user);
       notify()->success('Your password set');
      return redirect()->route('admin.loginForm');
    }
}
