<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\CrtType;
use App\Models\Lawyer;
use App\Models\User;
use App\Models\V1\Admin\AvailableAsset;
use App\Models\V1\Admin\Court;
use App\Models\V1\Admin\CourtVara;
use App\Models\V1\Admin\CreditRightsTitle;
use App\Models\V1\Admin\CrtNatureCredit;
use App\Models\V1\Admin\CrtNatureObligation;
use App\Models\V1\Admin\CrtOriginDebtor;
use App\Models\V1\Admin\CrtSpecies;
use App\Models\V1\Admin\Offer;
use App\Models\V1\Admin\OfferCategory;
use App\Models\V1\Admin\Offers;
use Carbon\Carbon;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssetsController extends Controller
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

        // Verificar se o usuário tem a permissão para visualizar títulos ou se é administrador
        if (Gate::allows('view-crt', auth()) || Gate::allows('admin-access', auth())) {

            $assets = AvailableAsset::with('due_diligence.crt.users_titles', 'status', 'due_diligence.crt.crtLawyers', 
                                            'due_diligence.crt.crtOriginDebtor', 'due_diligence.crt.crtNatureCredit')
                                    ->get();
             
        }

        $assets = AvailableAsset::with('due_diligence.crt.users_titles', 'status', 'due_diligence.crt.crtLawyers', 
                                       'due_diligence.crt.crtOriginDebtor','due_diligence.crt.crtNatureCredit')
                                ->whereHas('due_diligence.crt.users_titles', function ($query) use ($loggedUser) {
                                    // Beneficiários do título
                                    $query->where('user_id', $loggedUser->id);
                                })
                                ->whereHas('due_diligence.crt.crtLawyers', function ($query) use ($loggedUser) {
                                    // Advogados associados ao título
                                    $query->where('lawyer_id', $loggedUser->id);
                                })
                                ->whereHas('due_diligence.crt', function ($query) use ($loggedUser) {
                                    // Advogados associados ao título
                                    $query->where('created_by', $loggedUser->id);
                                })
                                ->orderBy('created_at', 'desc')
                                ->get();

        if($assets) {

            if ($request->ajax()) {
                return response()->json(['data' => $assets]);
            }

        } else {

            return redirect()->back()->withErrors('Você não tem permissão para acessar os Ativos');

        }

        $crtTypes = CrtType::get();

        $crtOriginDebitors = CrtOriginDebtor::get();

        return view('v1.admin.assets.index', compact('assets', 'crtTypes', 'crtOriginDebitors'));
    }

    // public function index(Request $request)
    // {
    //      // Obtém o usuário atual
    //      $loggedUser = auth()->user();
         
      
    //       // Verificar se o usuário tem a permissão para visualizar outros usuários
    //     if (!Gate::allows('view-assets', auth())) {
    //         // Se não tiver permissão, lance uma exceção de autorização
    //         abort(403, 'Você não tem permissão para visualizar Ativos.');
    //     }

    //     if($loggedUser->user_type_id == 1){ //Se usuário do tipo admin

    //         $filterAssetsCtrTypes = isset($request->ctrTypesId) ? explode(",", $request->ctrTypesId) : null;
    //         $crtOriginDebitors = isset($request->crtOriginDebitorsId) ? explode(",", $request->crtOriginDebitorsId) : null;

    //         $assets = AvailableAsset::with('due_diligence.crt.users_titles', 'due_diligence.crt.crtOriginDebtor', 'due_diligence.crt.crtNatureCredit')
    //                                 ->when($filterAssetsCtrTypes, function ($query, $filterAssetsCtrTypes) {
    //                                     return $query->whereHas('due_diligence.crt', function ($query) use ($filterAssetsCtrTypes) {
    //                                         $query->whereIn('crt_type_id', $filterAssetsCtrTypes);
    //                                     });
    //                                 })->when($crtOriginDebitors, function ($query, $crtOriginDebitors) {
    //                                     return $query->whereHas('due_diligence.crt', function ($query) use ($crtOriginDebitors) {
    //                                         $query->whereIn('origin_debtor_id', $crtOriginDebitors);
    //                                     });
    //                                 })->get();            
    
            
    //         if ($request->ajax()) {

    //             return response()->json(['data' => $assets]);
    //         }
           
    //         $crtTypes = CrtType::get();
    //         $crtOriginDebitors = CrtOriginDebtor::get();
    //         return view('v1.admin.assets.index', compact('assets', 'crtTypes', 'crtOriginDebitors'));

    //     }

    //     if($loggedUser->user_type_id == 5){ // Se usuário do tipo comprador - Pode ver todos os ativos. 

    //         $filterAssetsCtrTypes = isset($request->ctrTypesId) ? explode(",", $request->ctrTypesId) : null;
    //         $crtOriginDebitors = isset($request->crtOriginDebitorsId) ? explode(",", $request->crtOriginDebitorsId) : null;

    //         $assets = AvailableAsset::with('due_diligence.crt.users_titles', 'due_diligence.crt.crtOriginDebtor', 'due_diligence.crt.crtNatureCredit')
    //                                 ->when($filterAssetsCtrTypes, function ($query, $filterAssetsCtrTypes) {
    //                                     return $query->whereHas('due_diligence.crt', function ($query) use ($filterAssetsCtrTypes) {
    //                                         $query->whereIn('crt_type_id', $filterAssetsCtrTypes);
    //                                     });
    //                                 })->when($crtOriginDebitors, function ($query, $crtOriginDebitors) {
    //                                     return $query->whereHas('due_diligence.crt', function ($query) use ($crtOriginDebitors) {
    //                                         $query->whereIn('origin_debtor_id', $crtOriginDebitors);
    //                                     });
    //                                 })->get();            
    
            
    //         if ($request->ajax()) {

    //             return response()->json(['data' => $assets]);
    //         }
           
    //         $crtTypes = CrtType::get();
    //         $crtOriginDebitors = CrtOriginDebtor::get();
    //         return view('v1.admin.assets.index', compact('assets', 'crtTypes', 'crtOriginDebitors'));
        
    //     }

    //     if($loggedUser->user_type_id == 3 || $loggedUser->user_type_id == 4){
        
            

    //         $filterAssetsCtrTypes = isset($request->ctrTypesId) ? explode(",", $request->ctrTypesId) : null;
    //         $crtOriginDebitors = isset($request->crtOriginDebitorsId) ? explode(",", $request->crtOriginDebitorsId) : null;

    //         $assets = AvailableAsset::with('due_diligence.crt.users_titles', 'due_diligence.crt.crtLawyers', 'due_diligence.crt.crtOriginDebtor','due_diligence.crt.crtNatureCredit')
    //                             ->whereHas('due_diligence.crt', function ($query) use ($loggedUser) {
    //                                 $query->whereHas('users_titles', function ($query) use ($loggedUser) {
    //                                     $query->where('user_id', $loggedUser->id);
    //                                 })
    //                                 ->orWhereHas('crtLawyers', function ($query) use ($loggedUser) {
    //                                     $query->where('lawyer_id', $loggedUser->id);
    //                                 });
    //                             })
    //                             ->when($filterAssetsCtrTypes, function ($query, $filterAssetsCtrTypes) {
    //                                 return $query->whereHas('due_diligence.crt', function ($query) use ($filterAssetsCtrTypes) {
    //                                     $query->whereIn('crt_type_id', $filterAssetsCtrTypes);
    //                                 });
    //                             })
    //                             ->when($crtOriginDebitors, function ($query, $crtOriginDebitors) {
    //                                 return $query->whereHas('due_diligence.crt', function ($query) use ($crtOriginDebitors) {
    //                                     $query->whereIn('origin_debtor_id', $crtOriginDebitors);
    //                                 });
    //                             })
    //                             ->get();

            
    //         if ($request->ajax()) {

    //             return response()->json(['data' => $assets]);
    //         }

    //         $crtTypes = CrtType::get();
    //         $crtOriginDebitors = CrtOriginDebtor::get();

    //         return view('v1.admin.assets.index', compact('assets', 'crtTypes', 'crtOriginDebitors'));
        
    //     }

    //    return redirect()->back()->withErrors('Você não tem permissão para acessar as ofertas');
    
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();
    
        // Obtém o asset pelo ID, com as relações necessárias
        $availableAsset = AvailableAsset::with(['due_diligence.crt.users_titles', 'due_diligence.crt.crtLawyers'])->findOrFail($id);

        if ($availableAsset) {

            // Verificar se o usuário está associado à oferta
            $isAssociated =     $availableAsset->due_diligence->crt->users_titles->contains('user_id', $loggedUser->id) ||
                                $availableAsset->due_diligence->crt->crtLawyers->contains('lawyer_id', $loggedUser->id) ||
                                $availableAsset->due_diligence->crt->created_by = $loggedUser->id;
            
                                
            
            $users = User::get();

            // Verificar se o usuário tem permissão para visualizar o asset
            if (Gate::allows('access-admin', $loggedUser)) {

                $isAdmin = true;
                $dataForm = $this->formCreateUpdate($availableAsset); // Método para preparar os dados do formulário
    
                return view('v1.admin.assets.show', compact('isAdmin', 'availableAsset', 'dataForm'));

            }  
            if(Gate::allows('view-assets', $loggedUser)){

                $dataForm = $this->formCreateUpdate($availableAsset); // Método para preparar os dados do formulário
        
                return view('v1.admin.assets.show', compact('availableAsset', 'dataForm'));
            }
            
            if($isAssociated) {

                $dataForm = $this->formCreateUpdate($availableAsset); // Método para preparar os dados do formulário
        
                return view('v1.admin.assets.show', compact('isAssociated', 'availableAsset', 'dataForm'));

            }

            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para visualizar esse ativo.');

        } else {

            return redirect()->back()->withErrors('Ativo não encontrado');
            
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
        //
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

