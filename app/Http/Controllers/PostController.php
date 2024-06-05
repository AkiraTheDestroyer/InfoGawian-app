<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create', [
            'title' => 'Create Post',
            'active' => null
        ]);
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        
        $user = auth()->user();
        
        $company = Company::where('user_id', $user->id)
        ->first();
        
        $validated['company_id'] = $company->id;
        

        Post::create($validated);

        return redirect('/menu/company')->with('success', 'Post Created Successfully');
    }
}
