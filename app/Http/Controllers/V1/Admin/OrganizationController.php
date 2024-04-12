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
        $users = User::get();
        $organization = Organization::with('addresses')->with('users_organization')->find($id);
        $dataForm = $this->formCreateUpdate($organization); //localizado em config
        return view('V1.Admin.organization.show', compact('organization', 'dataForm', 'users'));
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
        $validator = Validator::make(
            $request->all(),
            [
                'razao_social' => 'required|string|max:255',
                'nome_fantasia' => 'required|string|max:255',
                'cnpj' => 'required|string|min:14|max:18',
                //'state_registration' => 'string',
               // 'municipal_registration' => 'string',
                'entidade_type_id' => 'required|int',
                'email' => 'required|email',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $organization = Organization::find($id);

        $organization->update($request->all());

        return redirect()->route('organization.show', ['organization' => $organization->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function formCreateUpdate($data)
    {
        return [
            "form" => [
                // "method" => "POST",
                // "name" => [
                //     "create" => "company.store",
                //     "update" => "company.update"
                // ],
                // "path" => []
            ],
            "inputs" => [
                [
                    "label" => "Razão social",
                    "name" => "razao_social",
                    "col" => "6",
                    "value" => $data->razao_social
                    // placeholder
                    // label
                    // value
                    //"input" => "select"
                    //"type" => "select"
                ],
                [
                    "label" => "Nome fantasia",
                    "name" => "nome_fantasia",
                    "col" => "6",
                    "value" => $data->nome_fantasia
                ],
                [
                    "label" => "Cnpj",
                    "name" => "cnpj",
                    "col" => "6",
                    "value" => $data->cnpj,
                    "class" => "cnpj-input"
                ],
                [
                    "label" => "Inscrição estadual",
                    "name" => "state_registration",
                    "col" => "3",
                    "value" => $data->state_registration
                ],
                [
                    "label" => "Inscrição municipal",
                    "name" => "municipal_registration",
                    "col" => "3",
                    "value" => $data->municipal_registration
                ],
                [
                    "label" => "E-mail",
                    "name" => "email",
                    "col" => "6",
                    "value" => $data->email
                ],
                [
                    "label" => "Tipo instituição",
                    "name" => "entidade_type_id",
                    "col" => "6",
                    "input" => "select",
                    "value" => $data->organization_type_id,
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => OrganizationType::get()
                ]
            ]
        ];
    }
}
