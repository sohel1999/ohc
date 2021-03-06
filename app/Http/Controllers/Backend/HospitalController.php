<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Throwable;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.hospital.index', [
            'hospitals' => Hospital::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            Hospital::create([
                'name' => $request->name,
                'detail' => $request->details,
                'google_map_location' => $request->google_map_location,
                'status' => $request->input('status') ?? 0
            ]);
            notify()->success('Hosipatil create successfully');
            return redirect()->route('hospitals.index');
        } catch (Throwable $th) {
            return redirect()->back();
        }
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
        return view('backend.hospital.edit',[
            'hospital'=>Hospital::findOrFail($id)
        ]);
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
        $hospital=Hospital::findOrFail($id);
        try {
            $hospital->update([
                'name' => $request->name,
                'detail' => $request->details,
                'google_map_location' => $request->google_map_location,
                'status' => $request->input('status') ?? 0,
            ]);
            notify()->success('Hosipatil update successfully');
            return redirect()->route('hospitals.index');
        } catch (Throwable $th) {
            \notify()->error('Someting went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Hospital::findOrFail($id)->delete();
            \notify()->success('Hospital successfully delete');
        }catch(Throwable $th){
            \notify()->error('Something went wrong');
            return redirect()->back();
        }
    }
}
