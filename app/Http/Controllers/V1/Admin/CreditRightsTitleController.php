<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\CrtLawyer;
use App\Models\Lawyer;
use App\Models\OrganizationType;
use App\Models\User;
use App\Models\V1\Admin\Court;

use App\Models\V1\Admin\File;
use Gate;
use Illuminate\Support\Str;

use App\Models\V1\Admin\CrtNatureCredit;
use App\Models\V1\Admin\CrtNatureObligation;
use App\Models\V1\Admin\CrtOriginDebtor;
use App\Models\V1\Admin\CrtSpecies;
use App\Models\V1\Admin\CourtVara;
use App\Models\V1\Admin\CreditRightsTitle;
use App\Models\V1\Admin\CrtType;
use App\Models\V1\Admin\Organization;
use App\Models\V1\Admin\OrganizationsCreditRightsTitle;
use App\Models\V1\Admin\Specie;
use App\Models\V1\Admin\UsersCreditRightsTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use NumberFormatter;
use Illuminate\Support\Facades\Validator;

class CreditRightsTitleController extends Controller
{
    protected $courtController;

    public function __construct(CourtsController $courtController)
    {
        $this->courtController = $courtController;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();

        // Filtros opcionais
        $filterCtrTypesId = isset($request->ctrTypesId) ? explode(",", $request->ctrTypesId) : null;

        // Verificar se o usuário tem a permissão para visualizar títulos ou se é administrador
        if (Gate::allows('view-crt', auth()) || $loggedUser->user_type_id == 1) {
            // Se não tiver permissão, lance uma exceção de autorização
            //abort(403, 'Você não tem permissão para visualizar Títulos.');
        
            $creditRightsTitles = CreditRightsTitle::with(['users_titles', 'court', 'crtOriginDebtor', 'crtNatureCredit'])
                ->when($filterCtrTypesId, function ($query, $filterCtrTypesId) {
                    return $query->whereIn('crt_type_id', $filterCtrTypesId);
                })
                ->get();

            if ($request->ajax()) {
                return response()->json(["data" => $creditRightsTitles]);
            }

            $ctrTypes = CrtType::get();
            return view('v1.admin.creditRightsTitle.index', compact('creditRightsTitles', 'ctrTypes'));

        } else {
            // Se o usuário não é administrador, mostrar apenas os títulos aos quais está associado
            $creditRightsTitles = CreditRightsTitle::with(['users_titles', 'court', 'crtOriginDebtor', 'crtNatureCredit'])
                ->whereHas('users_titles', function ($query) use ($loggedUser) {
                    $query->where('user_id', $loggedUser->id);
                })
                ->orWhereHas('crtLawyers', function ($query) use ($loggedUser) {
                    $query->where('user_id', $loggedUser->id);
                })               
                ->orWhereHas('organizations_titles', function ($query) use ($loggedUser) {
                    $query->where('organizations.id', $loggedUser->organization_id);
                })
                ->when($filterCtrTypesId, function ($query, $filterCtrTypesId) {
                    return $query->whereIn('crt_type_id', $filterCtrTypesId);
                })
                ->orWhere('created_by', $loggedUser->id)
                ->get();

            if ($request->ajax()) {
                return response()->json(["data" => $creditRightsTitles]);
            }

            $ctrTypes = CrtType::get();
            return view('v1.admin.creditRightsTitle.index', compact('creditRightsTitles', 'ctrTypes'));
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
        if (!Gate::allows('create-crt', auth())) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para criar Titulos.');
        }


        $courts = Court::all();
        $varas = CourtVara::all();
        $species = CrtSpecies::all();
        $nature_credits = CrtNatureCredit::all();
        $nature_obligations = CrtNatureObligation::all();
        $origin_debtors = CrtOriginDebtor::all();

        return view('v1.admin.creditRightsTitle.create', compact('courts', 'varas', 'species', 'nature_credits', 'nature_obligations', 'origin_debtors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Obtém o usuário atual
         $loggedUser = auth()->user();         
      
          // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('create-crt', auth())) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para criar Titulos.');
        }

        // Validação dos dados do formulário
        $validator = Validator::make($request->all(), [
            'process_number' => 'required|string|max:255',
            // 'class' => 'required',
            //  'title' => 'string',
            'specie_id' => 'required',
            'court_id' => 'required|int',
            'nature_credit_id' => 'required',
            'nature_obligation_id'  => 'required',
            'origin_debtor_id'  => 'required',
            'principal_amount'  => 'required',
            'vara_id' => 'required',
            'file' => 'file',
            'crt_type_id' => 'required'
        ]);

        if (isset($request->vara_id) && $request->vara_id === "new_vara") {
            $courtVara = new CourtVara();
            $courtVara->title = $request->new_title_vara;
            $courtVara->uf = $request->uf_vara_tribunal;
            $courtVara->court_id = $request->court_id;
            $courtVara->save();
            $request->merge(['vara_id' => $courtVara->id]);
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Verifica se um arquivo foi enviado
        if ($request->hasFile('file')) {

            // Obtém o arquivo enviado
            $file = $request->file('file');

            $path = 'crt/docs/' . str::uuid();

            // Define o nome do arquivo 
            $fileName = $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();

            // Faz o upload do arquivo para o Amazon S3
            Storage::disk('s3')->put($path, file_get_contents($file));

            // Salva os dados do título apenas se o upload do arquivo for bem-sucedido
            $creditRightsTitle = CreditRightsTitle::create($request->all());

            if (isset($request->users_ids)) {

                foreach ($request->users_ids as $key => $id) {
                    UsersCreditRightsTitle::create([
                        'user_id' => $id,
                        'credit_rights_title_id' => $creditRightsTitle->id
                    ]);
                }
            }

            if (isset($request->lawyers_ids)) {
                foreach ($request->lawyers_ids as $key => $id) {
                    CrtLawyer::create([
                        'lawyer_id' => $id,
                        'credit_rights_title_id' => $creditRightsTitle->id
                    ]);
                }
            }

            if (isset($request->organizations_ids)) {
                foreach ($request->organizations_ids as $key => $id) {
                    OrganizationsCreditRightsTitle::create([
                        'organizations_id' => $id,
                        'credit_rights_titles_id' => $creditRightsTitle->id
                    ]);
                }
            }

            if ($creditRightsTitle && $request->user_id) {
                UsersCreditRightsTitle::create(["user_id" => $request->user_id, "credit_rights_title_id" => $creditRightsTitle->id]);
            }

            // Salva o link do arquivo na tabela files
            $document = new File();
            $document->credit_rights_title_id = $creditRightsTitle->id;

            $document->filename = $file->getClientOriginalName();
            $document->path = $path;
            $document->type_id = 21;
            $document->category_id = 1;
            $document->save();

            // Redireciona para a página de exibição do título
            //form controller;
            $users = User::get();
            $dataForm = $this->formCreateUpdate($creditRightsTitle); //localizado em config
            $id = $creditRightsTitle->id;
            $lawyers = Lawyer::whereHas('crt_lawyer', function ($query) use ($id) {
                $query->where('credit_rights_title_id', $id);
            })->get();

            return redirect()->route('creditRightsTitle.show', ['creditRightsTitle' => $creditRightsTitle->id]);
        } else {
            // Salva os dados do título apenas se o upload do arquivo for bem-sucedido
            $creditRightsTitle = CreditRightsTitle::create($request->all());

            if ($creditRightsTitle && $request->user_id) {
                UsersCreditRightsTitle::create(["user_id" => $request->user_id, "credit_rights_title_id" => $creditRightsTitle->id]);
            }

            // Redireciona para a página de exibição do título
            //form controller;
            $users = User::get();
            $dataForm = $this->formCreateUpdate($creditRightsTitle); //localizado em config
            $id = $creditRightsTitle->id;
            $lawyers = Lawyer::whereHas('crt_lawyer', function ($query) use ($id) {
                $query->where('credit_rights_title_id', $id);
            })->get();
            return redirect()->route('creditRightsTitle.show', ['creditRightsTitle' => $creditRightsTitle->id]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();

        // Obtém o título de crédito pelo ID
        $creditRightsTitle = CreditRightsTitle::with(['users_titles', 'organizations_titles', 'crtLawyers', 'creator'])->find($id);

        if (!$creditRightsTitle) {
            return redirect()->back()->withErrors('Título não encontrado.');
        }

        // Verificar se o usuário está nos beneficiários
        $isBeneficiary = $creditRightsTitle->users_titles->contains($loggedUser);

        // Verificar se o usuário está associado a alguma organização beneficiária
        $isOrganizationBeneficiary = $creditRightsTitle->organizations_titles->contains(function ($organization) use ($loggedUser) {
            return $organization->users->contains($loggedUser);
        });

        // Verificar se o usuário é advogado associado ao título
        $isLawyer = $creditRightsTitle->crtLawyers->contains('user_id', $loggedUser->id);

        // Verificar se o usuário é o criador do título
        $isCreator = $creditRightsTitle->created_by == $loggedUser->id;

        // Verificar se o usuário tem permissão para visualizar o título
        if (!Gate::allows('view-crt', $loggedUser) && !$isBeneficiary && !$isOrganizationBeneficiary && !$isLawyer && !$isCreator && $loggedUser->user_type_id != 1) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para visualizar este título.');
        }

        // Obter os dados adicionais necessários para a visualização
        $users = User::get();
        $dataForm = $this->formCreateUpdate($creditRightsTitle); //localizado em config
        $lawyers = Lawyer::whereHas('crt_lawyer', function ($query) use ($id) {
            $query->where('credit_rights_title_id', $id);
        })->get();

        $corporateClients = Organization::whereIn('id', OrganizationsCreditRightsTitle::where('credit_rights_titles_id', $id)->pluck('organizations_id'))
            ->select('id', 'nome_fantasia as name')
            ->get();

        // Mesclar clientes PF e PJ para exibição
        $userPfAndPj = collect();
        if (isset($corporateClients)) {
            $clientsPj = $corporateClients;
            $userPfAndPj = $clientsPj;
        }
        if (isset($creditRightsTitle->users_titles)) {
            $clientsPf = $creditRightsTitle->users_titles;
            $userPfAndPj = $clientsPf;
        }
        if (isset($corporateClients) && isset($creditRightsTitle->users_titles)) {
            $clientsPj = $corporateClients;
            $clientsPf = $creditRightsTitle->users_titles;
            $userPfAndPj = $clientsPf->merge($clientsPj);
        }

        return view('v1.admin.creditRightsTitle.show', compact('creditRightsTitle', 'dataForm', 'users', 'lawyers', 'userPfAndPj'));
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
        $creditRightsTitle = CreditRightsTitle::find($id);
        
        // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('edit-crt', auth())) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para editar este Titulo.');
        }

        $validator = Validator::make(
            $request->all(),
            [
                'process_number' => 'required|string|max:255',

                // 'title' => 'string',
                'specie_id' => 'string',
                'court_id' => 'required',
                'nature_credit_id' => 'required',
                'nature_obligation_id'  => 'required',
                'origin_debtor_id'  => 'required',
                'principal_amount'  => 'required',
                'vara_id' => 'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $creditRightsTitle = CreditRightsTitle::find($id);

        $creditRightsTitle->update($request->all());

        return redirect()->route('creditRightsTitle.show', ['creditRightsTitle' => $creditRightsTitle->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addUserTitle(Request $request)
    {
        //user_id = $request->user_id;
        //credit_rights_title_id = $request->credit_rights_title_id;


        UsersCreditRightsTitle::updateOrCreate(
            ['user_id' => $request->user_id, 'credit_rights_title_id' => $request->credit_rights_title_id],
            $request->all()
        );

        return response()->json(["message" => "success."], 200);
    }

    public function addLawyerInTitle(Request $request)
    {
        CrtLawyer::updateOrCreate(
            ['lawyer_id' => $request->lawyer_id, 'credit_rights_title_id' => $request->credit_rights_title_id],
            $request->all()
        );
    }

    public function addOrganizationInTitle(Request $request)
    {
        OrganizationsCreditRightsTitle::updateOrCreate(
            ['organizations_id' => $request->organizations_id, 'credit_rights_titles_id' => $request->credit_rights_title_id],
            $request->all()
        );
    }

    public function deleteUserTitle(Request $request)
    {
        UsersCreditRightsTitle::where('user_id', $request->user_id, 'credit_rights_title_id', $request->credit_rights_title_id)->delete();

        return response()->json(["message" => "success."], 200);
    }
    public function formCreateUpdate($data)
    {
        // Obtenha as varas associadas ao tribunal selecionado
        $courtVaras = $this->courtController->getCourtVaras($data->court_id);

        return [

            "inputs" => [
                [
                    "label" => "Título",
                    "name" => "title",
                    "col" => "6",
                    "value" => $data->title
                    // placeholder
                    // label
                    // value
                    //"input" => "select"
                    //"type" => "select"
                ],


                [
                    "label" => "Classe do titulo",
                    "name" => "crt_class_id",
                    "col" => "6",
                    "value" => $data->class
                ],
                [
                    "label" => "Numero do processo",
                    "name" => "process_number",
                    "col" => "4",
                    "value" => $data->process_number
                ],
                [
                    "label" => "Valor principal do processo",
                    "name" => "principal_amount",
                    "col" => "4",
                    "class" => "text-danger font-weight-bold", // Adiciona classes CSS para destaque e cor
                    "value" => $data->getRawOriginal('principal_amount'),
                    "label-class" => "",
                    "input-class" => "money2",

                ],
                [
                    "label" => "Origem do débito",
                    "name" => "origin_debtor_id",
                    "col" => "4",
                    "input" => "select",
                    "value" => $data->origin_debtor_id,
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => CrtOriginDebtor::get()
                ],
                [
                    "label" => "Natureza da obrigação",
                    "name" => "nature_obligation_id",
                    "col" => "3",
                    "input" => "select",
                    "value" => $data->nature_obligation_id,
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => CrtNatureObligation::get()
                ],
                [
                    "label" => "Espécie do título",
                    "name" => "specie_id",
                    "col" => "3",
                    "value" => $data->specie_id,
                    "input" => "select",
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => CrtSpecies::get()
                ],
                [
                    "label" => "Natureza do crédito",
                    "name" => "nature_credit_id",
                    "col" => "6",
                    "input" => "select",
                    "value" => $data->nature_credit_id,
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => CrtNatureCredit::get()
                ],

                [
                    "label" => "Órgão julgador",
                    "name" => "court_id",
                    "col" => "6",
                    "value" => $data->court_id,
                    "input" => "select",
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => Court::get(),
                    "label-class" => "",
                    "input-class" => "js-example-basic-single",
                ],
                [
                    "label" => "Vara do tribunal",
                    "name" => "vara_id",
                    "col" => "5",
                    "value" => $data->vara_id,
                    "input" => "select",
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => CourtVara::get(),
                    "input-class" => "js-example-basic-single",
                    //"options" => $courtVaras  // Varas associadas ao tribunal selecionado
                ],
                [
                    "label" => "Data do ajuizamento do processo ",
                    "name" => "distribution_date",
                    "col" => "5",
                    "value" => $this->dateFormat($data->distribution_date)
                ]
            ]
        ];
    }

    // Função para formatar o valor para moeda brasileira


    private function dateFormat($date)
    {
        if ($date instanceof \DateTime) {
            return $date->format('d/m/Y');
        } elseif (is_string($date)) {
            return date('d/m/Y', strtotime($date));
        } else {
            return null;
        }
    }

    public function getCourtVaras($courtId)
    {
        // Recupera as varas associadas ao tribunal selecionado
        $courtVaras = CourtVara::where('court_id', $courtId)->get();

        // Prepara os dados para serem retornados no formato necessário para a resposta AJAX
        $varas = [];
        foreach ($courtVaras as $vara) {
            $varas[$vara->id] = $vara->title;
        }

        // Retorna os dados no formato JSON
        return response()->json($varas);
    }
}
