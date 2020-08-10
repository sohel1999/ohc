<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate();

        return view('backend.category.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('photo')) {
            $uniqueFileName = uniqid(now()->format('ymd')) . '.' . $request->file('photo')->clientExtension();
            $request->file('photo')->move(public_path() . '/backend/upload/category', $uniqueFileName);
        }

        $data = [
            'name' => $request->input('name'),
            'image' =>$uniqueFileName ?? '',
            'status' => $request->input('status') ?? 0,
        ];
        Category::create($data);
        notify()->success('Category created successfully');

        return redirect()->route('categories.index');
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
        dd($id);
        return view('backend.category.edit',[
            'category'=>Category::findOrFail($id)
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

        if ($request->hasFile('photo')) {
            $uniqueFileName = uniqid(now()->format('ymd')) . '.' . $request->file('photo')->clientExtension();
            $request->file('photo')->move(public_path() . '/backend/upload/category', $uniqueFileName);

            Category::create([
                'name' => $request->input('name'),
                'image' => $uniqueFileName,
                'status' => $request->input('status') ?? 0
            ]);
            notify()->success('Category created successfully');

            return redirect()->route('categories.index');
        }
        Category::create([
            'name' => $request->input('name'),
            'image' => $uniqueFileName,
            'status' => $request->input('status') ?? false,
        ]);
        notify()->success('Category created successfully');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        notify()->success('Category deleted successfully');
        return redirect()->route('categories.index');
    }
}
