<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCompanyUserController extends Controller
{
    public function index()
    {
        $title = 'Delete Post!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
    
        $user = auth()->user();
    
        $company = Company::where('user_id', $user->id)->first();
    
        $posts = []; 
    
        if($company) {
            $posts = Post::where('company_id', $company->id)->paginate(20);
        }
    
        return view('dashboardCompanyUser.index', [
            'title' => 'Dashboard Company',
            'active' => null,
            'company' => $company,
            'user' => $user,
            'posts' => $posts
        ]);
    }
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|max:120',
        ]);

        $user = auth()->user();

        $validated['user_id'] = $user->id;
        $validated['image'] = 'company-images/default.png';

        if($user->whatsapp == null) {
            return redirect('/profile')->with('error', 'you must add whatsapp first');
        }

        if($user->email == null) {
            return redirect('/profile')->with('error', 'you must add email first');
        }

        Company::create($validated);

        return redirect()->back()->with('success', 'Company Created Successfully');
    }

    public function edit($id)
    {
        $company = Company::where('id', $id)->first();
        return view('dashboardCompanyUser.edit', [
            'title' => 'Edit',
            'active' => null,
            'company' => $company
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'company' => 'required|max:120',
        ];

        $validated = $request->validate($rules);

        if($request->input('desc')) {
            $validated['desc'] = $request->input('desc');
        }

        if($request->input('rules')) {
            $validated['rules'] = $request->input('rules');
        }

        if($request->hasFile('image')) {
            if ($request->oldImage) {
                if($request->oldImage != 'company-images/default.jpg') {
                    Storage::delete($request->oldImage);
                }
            }
            $validated['image'] = $request->file('image')->store('company-images');
        }

        Company::where('id', $id)   
            ->update($validated);

        return redirect()->back()->with('success', 'Company Edit Success');
    }
}
