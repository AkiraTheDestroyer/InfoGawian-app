<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;

class PostJobController extends Controller
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
            'salary' => 'required',
            'salary_type' => 'required',
            'status' => 'required',
            'body' => 'required'
        ]);
        
        $user = auth()->user();
        
        $company = Company::where('user_id', $user->id)
        ->first();
        
        $validated['company_id'] = $company->id;
        

        Post::create($validated);

        return redirect('/menu/company')->with('success', 'Post Created Successfully');
    }

    public function edit($id)
    {
        // $user = auth()->user();
        // $company = Company::where('user_id', $user->id)
        //     ->first();
        $post = Post::where('company_id', $id)
            ->orWhere('id', $id)->first();

        return view('post.edit', [
            'title' => 'Edit Post',
            'active' => null,
            'post' => $post
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required'
        ];

        $validated = $request->validate($rules);

        Post::where('id', $id)
            ->update($validated);

        return redirect()->back()->with('success', 'Post Updated Succesfully');
    }

    public function destroy($id)
    {
        Post::where('id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Post Deleted Successfully');
    }
}
