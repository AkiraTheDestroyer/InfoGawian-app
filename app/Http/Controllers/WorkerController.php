<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(Request $request)
    {
        $workers = User::when($request->input('workers'), function ($query) use ($request) {
            $query->where('fullname', 'like', '%' . $request->input('workers') . '%');
        })->orderBy('id', 'desc')->paginate(10);

        // $workers = User::inRandomOrder()->paginate(20);
        return view('workers.index', [
            'title' => 'Worker',  
            'active' => 'worker',
            'workers' => $workers
        ]);
    }

    public function show($id)
    {
        $worker = User::where('id', $id)->first();
        return view('workers.show', [
            'title' => 'Show',
            'active' => 'worker',
            'worker' => $worker
        ]);
    }
}
