<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)
                ->first();

        return view('profile.index', [
            'title' => 'Profile',
            'active' => null,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'fullname' => 'required|max:75',
            'username' => 'required|max:35',
        ];

        $validated = $request->validate($rules);

        if($request->input('whatsapp')) {
            $validated['whatsapp'] = $request->input('whatsapp');
        }

        if($request->input('email')) {
            $validated['email'] = $request->input('email');
        }

        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                if($request->oldImage != 'user-images/default.jpg') {
                    Storage::delete($request->oldImage);
                }
            }
            $validated['image'] = $request->file('image')->store('user-images');
        }


        User::where('id', $id)
            ->update($validated);

        return redirect()->back()->with('success', 'Edit Profile Success');
    }
}
