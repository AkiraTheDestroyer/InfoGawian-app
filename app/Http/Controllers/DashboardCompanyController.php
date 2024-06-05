<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class DashboardCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $activeCompany = Company::when($request->input('active'), function ($query) use ($request) {
            $query->where('company', 'like', '%' . $request->input('active') . '%');
        })->orderBy('id', 'desc')->paginate(10);

        $inactiveCompany = Company::when($request->input('inactive'), function ($query) use ($request) {
            $query->where('company', 'like', '%' . $request->input('inactive') . '%');
        })->orderBy('id', 'desc')->paginate(10);

        $title = 'Delete Company!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.company.index', [
            'title' => 'Company',
            'activeCompany' => $activeCompany,
            'inactiveCompany' => $inactiveCompany
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
        $company = Company::where('id', $id)
            ->first();
        return view('admin.company.actions.show', [
            'title' => 'Detail',
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company = Company::where('id', $id)
            ->first();
        return view("admin.company.actions.edit", [
            'title' => 'Edit',
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'status' => 'required'
        ];

        $validated = $request->validate($rules);

        Company::where('id' ,$id)
            ->update($validated);

        return redirect()->back()->with('success', 'Company Status Change Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Company::where('id', $id)
            ->delete();
        
        return redirect()->back()->with('success', 'Company Deleted Successfully');
    }
}
