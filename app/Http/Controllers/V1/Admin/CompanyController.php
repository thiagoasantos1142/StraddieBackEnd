<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostrar todas as empresas
        return view('V1.Admin.Company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('V1.Admin.Company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'razao_social' => 'required|string|max:255',
                'nome_fantasia' => 'required|string|max:255',
                'cnpj' => 'required|string|min:14|max:18',
                'state_registration' => 'string',
                'municipal_registration' => 'string',
                'entidade_type_id' => 'required|int',
                'email' => 'required|email',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $organization = Organization::create($request->all());

        return redirect()->route('company.show', ['company' => $organization->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //pegar as informaçoes da organização
        $organization = Organization::find($id);
        
        return view('V1.Admin.Company.show',compact('organization'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
