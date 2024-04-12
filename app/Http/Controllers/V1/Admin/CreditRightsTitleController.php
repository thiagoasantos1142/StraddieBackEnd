<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationType;
use App\Models\User;
use App\Models\V1\Admin\Court;

use App\Models\V1\Admin\CrtNatureCredit;
use App\Models\V1\Admin\CrtNatureObligation;
use App\Models\V1\Admin\CrtOriginDebtor;
use App\Models\V1\Admin\CrtSpecies;
use App\Models\V1\Admin\CourtVara;
use App\Models\V1\Admin\CreditRightsTitle;
use App\Models\V1\Admin\Specie;
use App\Models\V1\Admin\UsersCreditRightsTitle;
use Illuminate\Http\Request;
use NumberFormatter;
use Validator;

class CreditRightsTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //mostrar todas os titulos
         $creditRightsTitles = CreditRightsTitle::all();
       
         return view('v1.admin.creditRightsTitle.index', compact('creditRightsTitles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
        
        $validator = Validator::make(
            $request->all(),
            [
                'process_number' => 'required|string|max:255',
                'about' => 'required|string|max:255',               
                'title' => 'string',
                'specie_id' => 'string',
                'court_id' => 'required|int',
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
       

        $creditRightsTitle = CreditRightsTitle::create($request->all());

        return view('v1.admin.creditRightsTitle.show', ['creditRightsTitle' => $creditRightsTitle->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         //form controller;
         $users = User::get();
         $title = CreditRightsTitle::with('users_titles')->find($id);
         $dataForm = $this->formCreateUpdate($title); //localizado em config
         return view('v1.admin.creditRightsTitle.show', compact('title', 'dataForm', 'users'));
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
        
        $validator = Validator::make(
            $request->all(),
            [
                'process_number' => 'required|string|max:255',
                            
                'title' => 'string',
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

        return view('v1.admin.creditRightsTitle.show', ['creditRightsTitle' => $creditRightsTitle->id]);

       
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


        UsersCreditRightsTitle::create($request->all());

        return response()->json(["message" => "success."], 200);
    }
    public function formCreateUpdate($data)
    {
        // Obtenha as varas associadas ao tribunal selecionado
         $courtVaras = $this->getCourtVaras($data->court_id);
        
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
                    "name" => " process_number",
                    "col" => "4",
                    "value" => $data->process_number
                ],
                [
                    "label" => "Valor principal do processo",
                    "name" => "principal_amount",
                    "col" => "4",
                    "class" => "text-danger font-weight-bold", // Adiciona classes CSS para destaque e cor
                
                    "value" => $this->formatCurrency($data->principal_amount)
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
                    "col" => "4",
                    "input" => "select",
                    "value" => $data->nature_obligation_id,
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => crtNatureObligation::get()
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
                    "options" => crtNatureCredit::get()
                ],
               
                [
                    "label" => "Órgão julgador",
                    "name" => "court_id",
                    "col" => "6",
                    "value" => $data->court_id,
                    "input" => "select",
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => Court::get()
                ],
                [
                    "label" => "Vara do tribunal",
                    "name" => "vara_id",
                    "col" => "5",
                    "value" => $data->vara_id,
                    "input" => "select",
                    "identifier_value" => 'id',
                    "identifier_title" => 'title',
                    "options" => $courtVaras  // Varas associadas ao tribunal selecionado
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
    private function formatCurrency($value)
    {
        // Formatar o valor para duas casas decimais e com o símbolo de R$
        $formattedValue = 'R$ ' . number_format($value, 2, ',', '.');
        
        return $formattedValue;
    }

    private function dateFormat($date){
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
