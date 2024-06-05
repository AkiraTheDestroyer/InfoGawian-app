<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddInfoController extends Controller
{
    public function addWhatsapp(Request $request)
    {
        $rules = [
            'whatsapp' => 'required|numeric'
        ];

        $validated = $request->validate($rules);

        User::where('id', auth()->user()->id)
            ->update($validated);

        return redirect()->back()->with('success', 'adding whatsapp success');
    }

    public function addEmail(Request $request)
    {
        $rules = [
            'email' => 'required|email:dns'
        ];

        $validated = $request->validate($rules);

        User::where('id', auth()->user()->id)
            ->update($validated);

        return redirect()->back()->with('success', 'adding email success');
    }
}
