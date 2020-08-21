<?php

namespace App\Http\Controllers\Backend;

use Throwable;
use App\Models\Farmacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FarmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.farmacy.index',[
             'hospitals'=>Farmacy::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.farmacy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Farmacy::create([
            'name' => $request->name,
            'detail' => $request->details,
            'google_map_location' => $request->google_map_location,
            'status' => $request->input('status') ?? 0,
        ]);
        notify()->success('Farmacy create successfully');
        return redirect()->route('farmacy.index');

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

    public function edit($id)
    {
        return view('backend.farmacy.edit',[
            'hospital'=>Farmacy::findOrFail($id)
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
        $hospital=Farmacy::findOrFail($id);
        try {
            $hospital->update([
                'name' => $request->name,
                'detail' => $request->details,
                'google_map_location' => $request->google_map_location,
                'status' => $request->input('status') ?? 0,
            ]);
            notify()->success('Pharfacy update successfully');
           return redirect()->route('farmacy.index');

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
            Farmacy::findOrFail($id)->delete();
            \notify()->success('Hospital successfully delete');
            return redirect()->route('farmacy.index');
        }catch(Throwable $th){
            \notify()->error('Something went wrong');
            return redirect()->back();
        }
    }
}
