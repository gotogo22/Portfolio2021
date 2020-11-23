<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd();
        $companies = Company::all();
        return view('company.index', compact('companies'));
        // return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->action === 'back') {
            return redirect()->route('companies.index');
        } else {
            $company = new Company;
            $company->name = $request->name;
            $company->phone = $request->phone;
            $company->adress= $request->adress;
            $company->employees= $request->employees;
            $company->language= $request->language;
            $company->content= $request->content;
            $company->save();
            return redirect()->route('companies.index');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Company::find($id);
        return view('company.show', compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::find($id);
        return view('company.edit', compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->action === 'back') {
            return redirect()->route('companies.index');
        } else {
            $company = Company::find($id);
            $company->name = $request->name;
            $company->phone = $request->phone;
            $company->adress= $request->adress;
            $company->employees= $request->employees;
            $company->language= $request->language;
            $company->content= $request->content;
            $company->save();
            return redirect()->route('companies.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Company::find($id);
        $admins->delete();
        return redirect()->route('companies.index');
    }
}
