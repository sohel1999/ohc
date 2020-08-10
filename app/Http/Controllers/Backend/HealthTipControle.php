<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HealthTip;
use Illuminate\Http\Request;

class HealthTipControle extends Controller
{
    public function index()
    {
        $tips = HealthTip::with('author')->paginate();

        // dd($tips);

        return view('backend.Tips.index', compact('tips'));
    }
    public function create()
    {
        return view('backend.Tips.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $uniqueFileName = uniqid(now()->format('ymd')) . '.' . $request->file('image')->clientExtension();
            $request->file('image')->move(public_path() . '/backend/upload/blog', $uniqueFileName);
        }
        $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'is_published' => false,
            'image'=> $uniqueFileName ?? null
        ];
        HealthTip::create($data);

        notify()->success(' Post  created successfully', 'success');
        return redirect()->route('healthTip.index');
    }

    public function show($id)
    {
        $tip = HealthTip::find($id);
        return view('backend.Tips.show', compact('tip'));
    }

    public function edit($id)
    {
        $tip = HealthTip::findOrFail($id);
        return view('backend.Tips.edit', compact('tip'));
    }

    public function update(Request $request, $id)
    {

        $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'is_published' => false,
        ];
        HealthTip::findOrFail($id)->update($data);
        notify()->success('Post Update successfully', 'success');
        return redirect()->route('healthTip.index');
    }

    public function delete($id)
    {
        $tip = HealthTip::findOrFail($id);
        $tip->delete();
        notify()->success('Post Update successfully', 'success');
        return redirect()->route('healthTip.index');
    }
}
