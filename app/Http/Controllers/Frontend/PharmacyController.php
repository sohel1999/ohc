<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Farmacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PharmacyController extends Controller
{
    public function index(){
       $hospitals = Farmacy::where('status', 1)->get();
    $doctors = User::with('category', 'hospital')->where('role', 'doctors')->where('status', '=', 'active')->get();
    return view('frontend.farmacy.index', compact('hospitals', 'doctors'));

    }
}
