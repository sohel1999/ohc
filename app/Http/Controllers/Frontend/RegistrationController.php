<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserVarification;
use Illuminate\Support\Facades\Notification;

class RegistrationController extends Controller
{
    public function registerProcess(Request $request)
    {

        $token = Str::random($length = 30);

        $data = [
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'age' => $request->input('age'),
            'password' => bcrypt($request->input('password')),
            'role' => 'patient',
            'status' => 'active',
            'token' => $token,
            'profile_pic' => $uniqueFileName ?? null,
        ];
        $user = User::create($data);
        Notification::send($user, new UserVarification($token));
        notify()->success('Patient Registration successfully complete.Please veryfird your eamil', 'success');
        return redirect()->route('home');
    }

    public function verify($token)
    {
        $user = User::where('token', $token)->first();
        if ($user === null) {
            notify()->error('Email varification token invalid');
            return redirect()->route('home');
        }
        try {
            $user->update([
                'email_verified_at' => now(),
                'token' => null
            ]);
            notify()->success('Email varified');
            return redirect()->route('home');
        } catch (\Throwable $th) {
            notify()->error('Someting went wrong please try again');
            return redirect()->route('home');
        }
    }
}
