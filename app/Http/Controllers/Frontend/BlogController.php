<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HealthTip;

class BlogController extends Controller
{
    public function index()
    {
        $posts = HealthTip::with('author')->paginate();
        $recentPosts = HealthTip::orderBy('created_at','desc')->take(10)->get();

        return view('frontend.blog.index', compact('posts', 'recentPosts'));
    }
}
