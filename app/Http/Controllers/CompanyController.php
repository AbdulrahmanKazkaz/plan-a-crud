<?php

namespace App\Http\Controllers;

use App\Helpers\UploadManager;
use App\Http\Requests\Company\InsertRequest;
use App\Http\Requests\Company\UpdateRequest;
use App\Models\Company;
use Illuminate\Support\Arr;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard.companies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertRequest $request)
    {
        $data = $request->validated();

        if($request->has('logo')) {
            $data['logo']=  UploadManager::photo($request->logo);
        }

        Company::create($data);

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       return redirect()->route('companies.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('pages.dashboard.companies.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Company $company)
    {

        $data = $request->validated();

        if($request->has('logo')) {
            $data['logo']=  UploadManager::photo($request->logo);
        }

        $company->update(Arr::except($data,'id'));

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
