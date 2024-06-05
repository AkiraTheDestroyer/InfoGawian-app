<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $company = Company::inRandomOrder()->paginate(20);
        $workers = User::inRandomOrder()->paginate(5);
        $posts = Post::when($request->input('job'), function ($query) use ($request) {
            $query->where('title', 'like', '%' . $request->input('job') . '%');
        })->orderBy('id', 'desc')->paginate(12);

        return view('home.index', [
            'title' => 'Home',
            'active' => 'home',
            'company' => $company,
            'workers' => $workers,
            'posts' => $posts
        ]);
    }
}
