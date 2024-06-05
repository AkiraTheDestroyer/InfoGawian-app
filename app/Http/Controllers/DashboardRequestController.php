<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class DashboardRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $company = Company::when($request->input('request'), function ($query) use ($request) {
            $query->where('status', 'inactive')->orWhere('company', 'like', '%' . $request->input('request') . '%');
        })->orderBy('id', 'desc')->paginate(10);

        return view('admin.request.index', [
            'title' => 'Request',
            'company' => $company
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'Delete Company!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        $company = Company::where('id', $id)->first();
        return view('admin.request.detail', [
            'title' => 'Detail',
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required'
        ]);

        Company::where('id', $id)
            ->update($validated);
        
        return redirect('/admin/dashboard/request')->with('success', 'Company Request Confirmation Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Company::where('id', $id)
            ->delete();

        return redirect('/admin/dashboard/request')->with('success', 'deleted inactive company successfully');
    }
}
