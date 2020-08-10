<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::where('status', 1)->get();
        $doctors = User::with('category', 'hospital')->where('role', 'doctors')->where('status', '=', 'active')->get();
        return view('frontend.hospita.index',compact('hospitals','doctors'));
    }
}
