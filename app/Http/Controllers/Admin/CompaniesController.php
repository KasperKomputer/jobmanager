<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\Contracts;
use App\Models\Location;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCompanyRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompaniesController extends Controller
{
    

    public function index()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companies = Company::all();
        $contracts = Contracts::all();

        return view('admin.companies.index', compact('companies','contracts'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $contract = Contracts::all();
        return view('admin.companies.create',compact('contract'));
    }

    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create($request->all());
    
        return redirect()->route('admin.companies.index')->with('success', 'Pomyślnie dodano nowego kontrahenta.');
    }

    public function edit(Company $company)
    {
        abort_if(Gate::denies('company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $contract = Contracts::all();
        return view('admin.companies.edit', compact('company','contract'));
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update($request->all());

        return redirect()->route('admin.companies.index')->with('success', 'Pomyślnie zmodyfikowano kontrahenta.');
    }

    public function show(Company $company)
    {
        abort_if(Gate::denies('company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.companies.show', compact('company'));
    }

    public function destroy(Company $company)
    {
        abort_if(Gate::denies('company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company->delete();

        return back()->with('success', 'Pomyślnie usunięto kontrahenta.');
    }

    public function massDestroy(MassDestroyCompanyRequest $request)
    {
        Company::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
