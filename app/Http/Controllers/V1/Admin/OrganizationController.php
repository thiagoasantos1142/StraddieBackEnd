<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationType;
use App\Models\User;
use App\Models\V1\Admin\Organization;
use Gate;
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
        // Obtém o usuário atual
        $loggedUser = auth()->user();         
          
          // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('view-organizations', auth()) && $loggedUser->user_type_id != 1) {
            // Se não tiver permissão, lance uma exceção de autorização
            //abort(403, 'Você não tem permissão para visualizar Empresas.');

            $organizations = Organization::with('users_organization')
                                    ->where('id', $loggedUser->organization_id) // Usar organization_id do usuário logado                                
                                    ->get();

            

            if ($request->ajax()) {
                return response()->json($organizations, 200);
            }
   
            return view('v1.admin.organization.index', compact('organizations'));
        }


        if($loggedUser->user_type_id == 1){
            //mostrar todas as empresas
            $organizations = Organization::with('users_organization')->get();

            if ($request->ajax()) {
                return response()->json($organizations, 200);
            }

            return view('v1.admin.organization.index', compact('organizations'));

        }
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // Obtém o usuário atual
         $loggedUser = auth()->user();         
      
         // Verificar se o usuário tem a permissão para visualizar outros usuários
       if (!Gate::allows('create-organizations', auth())) {
           // Se não tiver permissão, lance uma exceção de autorização
           abort(403, 'Você não tem permissão para visualizar Empresas.');
       }

        $organisation_types = OrganizationType::all();
        $dataForm = $this->formCreateUpdate();
        return view('v1.admin.organization.create', compact('organisation_types', 'dataForm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Obtém o usuário atual
         $loggedUser = auth()->user();         
      
         // Verificar se o usuário tem a permissão para visualizar outros usuários
       if (!Gate::allows('create-organizations', auth())) {
           // Se não tiver permissão, lance uma exceção de autorização
           abort(403, 'Você não tem permissão para visualizar Empresas.');
       }

        if ($request->ajax()) {
            $validator = Validator::make(
                $request->all(),
                [
                    'nome_fantasia' => 'required|string|max:255',
                    'cnpj' => 'required|string|min:14|max:18',
                    'email' => 'required|email'
                ]
            );

            $request->merge(["organization_type_id" => 1]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $organization = Organization::create($request->all());

            return response()->json($organization, 200);
        }


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
    public function show(Request $request, string $id)
    {
         // Obtém o usuário atual
         $loggedUser = auth()->user();         
      
         // Verificar se o usuário tem a permissão para visualizar outros usuários
       if (!Gate::allows('view-organizations', auth())) {
           // Se não tiver permissão, lance uma exceção de autorização
           abort(403, 'Você não tem permissão para visualizar Empresas.');
       }

       if($loggedUser->user_type_id == 1 || $loggedUser->organization_id == $id){

            if ($request->ajax()) {
                $organization = Organization::find($id);
                return response()->json($organization, 200);
            }

            //form controller;
            $users = User::get();
            
            $organization = Organization::with('addresses')->with('users_organization')->find($id);
            $dataForm = $this->formCreateUpdate($organization); //localizado em config

            return view('v1.admin.organization.show', compact('organization', 'dataForm', 'users'));
            
        }
       
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
         // Obtém o usuário atual
         $loggedUser = auth()->user();         
      
         // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('create-organizations', auth())) {
           // Se não tiver permissão, lance uma exceção de autorização
           abort(403, 'Você não tem permissão para visualizar Empresas.');
        }
        //
        $validator = Validator::make(
            $request->all(),
            [
                'razao_social' => 'required|string|max:255',
                'nome_fantasia' => 'required|string|max:255',
                'cnpj' => 'required|string|min:14|max:18',
                //'state_registration' => 'string',
                // 'municipal_registration' => 'string',
                'organization_type_id' => 'required|int',
                'email' => 'required|email',
            ]
        );
        if($loggedUser->user_type_id == 1 || $loggedUser->organization_id == $id){

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $organization = Organization::find($id);

            $organization->update($request->all());

            return redirect()->route('organization.show', ['organization' => $organization->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        Organization::destroy($id);

        if ($request->ajax()) {
            return response()->json(['message' => 'success.']);
        }
    }

    public function formCreateUpdate($data = null)
    {
        return [
            "card" => [
                "name" => 'Dados da empresa'
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
                    "value" => $data->razao_social ?? null
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
                    "value" => $data->nome_fantasia ?? null
                ],
                [
                    "label" => "Cnpj",
                    "name" => "cnpj",
                    "col" => "6",
                    "value" => $data->cnpj ?? null,
                    "class" => "cnpj-input"
                ],
                [
                    "label" => "Inscrição estadual",
                    "name" => "state_registration",
                    "col" => "3",
                    "value" => $data->state_registration ?? null
                ],
                [
                    "label" => "Inscrição municipal",
                    "name" => "municipal_registration",
                    "col" => "3",
                    "value" => $data->municipal_registration ?? null
                ],
                [
                    "label" => "E-mail",
                    "name" => "email",
                    "col" => "6",
                    "value" => $data->email ?? null
                ],
                [
                    "label" => "Tipo instituição",
                    "name" => "organization_type_id",
                    "col" => "6",
                    "input" => "select",
                    "value" => $data->organization_type_id ?? null,
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => OrganizationType::get()
                ]
            ]
        ];
    }
}
