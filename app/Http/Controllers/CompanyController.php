<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $company = Company::when($request->input('company'), function ($query) use ($request) {
            $query->where('company', 'like', '%' . $request->input('company') . '%');
        })->orderBy('id', 'desc')->paginate(10);

        // $company = Company::inRandomOrder()->paginate(20);
        return view('company.index', [
            'title' => 'Company',
            'active' => 'company',
            'company' => $company
        ]);
    }

    public function show($id)
    {
        $company = Company::where('id', $id)
            ->first();
        return view('company.show', [
            'title' => 'Show',
            'active' => 'company',
            'company' => $company
        ]);
    }
}
