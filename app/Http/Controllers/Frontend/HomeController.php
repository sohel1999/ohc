<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $hospitals = Hospital::where('status',1)->get();
        $doctor = User::where('role','doctors')->where('status','=','active')->inRandomOrder()->first();
        $doctors = User::with('category','hospital')->where('role','doctors')->where('status','=','active')->get();
        $categories = Category::where('status', 1)->get();
        return view('frontend.home.index',[
            'categories'=>$categories,
            'doctor'=>$doctor,
            'doctors'=>$doctors,
            'hospitals'=>$hospitals
        ]);
    }
}
