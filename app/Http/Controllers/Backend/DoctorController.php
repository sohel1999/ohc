<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Category;
use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::where('role','=','doctors')->paginate();
        return view('backend.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.doctor.create',[
            'categories'=>Category::all(),
            'hospiatals' =>Hospital::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            'role' => 'doctors',
            'category_id'=>$request->input('category_id'),
            'hospital_id'=>$request->input('hospital_id'),
            'bio'=>$request->input('bio'),
            'status' => $request->input('status') ?? 'inactive',
            'profile_pic' => $uniqueFileName ?? null
        ];
        User::create($data);
        notify()->success('Doctor created successfully', 'success');
        return redirect()->route('doctors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
