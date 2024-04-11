<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationType;
use App\Models\User;
use App\Models\V1\Admin\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //mostrar todas as empresas
        $organizations = Organization::with('users_organization')->get();

        if ($request->ajax()) {
            return response()->json($organizations, 200);
        }

        return view('v1.admin.organization.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organisation_types = OrganizationType::all(); 
        return view('v1.admin.organization.create', compact('organisation_types'));
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
               // 'state_registration' => 'string',
               // 'municipal_registration' => 'string',
                'organization_type_id' => 'required|int',
                'email' => 'required|email',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $organization = Organization::create($request->all());

        return redirect()->route('organization.show', ['organization' => $organization->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //form controller;
        $pathName = 'Forms.organization'; //localizado em config
        $users = User::get();
        $organization = Organization::with('addresses')->find($id);
        return view('v1.admin.organization.show', compact('organization', 'pathName', 'users'));
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
