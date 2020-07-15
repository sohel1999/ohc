<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->orderBy('id', 'desc')->paginate(10);
        return view('backend.users.index', ['admins' => $admins]);
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(UserFormRequest $request)
    {


        if ($request->hasFile('profile_pic')) {
            $uniqueFileName = uniqid(now()->format('ymd')) . '.' . $request->file('profile_pic')->clientExtension();
            $request->file('profile_pic')->move(public_path() . '/backend/upload', $uniqueFileName);
        }
        $data = [
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'role' => 'admin',
            'status' => $request->input('status') ?? 'inactive',
            'profile_pic' => $uniqueFileName ?? null
        ];
        User::create($data);
        notify()->success('Admin User was created successfully', 'success');
        return redirect()->route('user.admin');
    }
    public function edit($id)
    {

        $user = User::findOrFail($id);


        return view('backend.users.edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($request->hasFile('profile_pic')) {
            $uniqueFileName = uniqid(now()->format('ymd')) . '.' . $request->file('profile_pic')->clientExtension();
            $request->file('profile_pic')->move(public_path() . '/backend/upload', $uniqueFileName);
            @unlink(public_path() . '/backend/upload/' . $user->profile_pic);
            $data = [
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => bcrypt($request->input('password')),
                'role' => 'admin',
                'status' => $request->input('status') ?? 'inactive',
                'profile_pic' => $uniqueFileName
            ];
            $user->update($data);
            notify()->success('Admin User was updated successfully', 'success');
            return redirect()->route('user.admin');
        }

        $data = [
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'role' => 'admin',
            'status' => $request->input('status') ?? 'inactive'
        ];
        $user->update($data);
        notify()->success('Admin User was updated successfully', 'success');
        return redirect()->route('user.admin');
    }
    public function delete($id)
    {
        $user = User::find($id);
        if ($user->id !== auth()->user()->id) {
            $user->delete();
            notify()->success('Admin User was deleted successfully', 'success');
            return redirect()->back();
        }
        notify()->error('Curent user can\'t delete', 'error');

        return redirect()->back();
    }
}
