<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::when($request->input('username'), function ($query) use ($request) {
            $query->where('username', 'like', '%' . $request->input('username') . '%');
        })->orderBy('id', 'desc')->paginate(10);

        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.users.index', [
            'title' => 'Users',
            'users' => $users
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.actions.create', [
            'title' => 'Create User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|max:75',
            'username' => 'required|max:30',
            'password' => 'required',
        ]);

        User::create($validated);

        return redirect()->back()->with('success', 'Create User Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.actions.show', [
            'title' => 'Show',
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.users.actions.edit', [
            'title' => 'Edit',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'fullname' => 'required|max:75',
            'username' => 'required|max:30',
        ];

        $validated = $request->validate($rules);

        if($request->input('email')) {
            $validated['email'] = $request->input('email');
        }

        if($request->input('whatsapp')) {
            $validated['whatsapp'] = $request->input('whatsapp');
        }

        if($request->input('password')) {
            $validated['password'] = Hash::make($request->input('password'));
        }

        User::where('id', $id)->update($validated);

        return redirect()->back()->with('success', 'Update User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Delete User Successfully');
    }
}
