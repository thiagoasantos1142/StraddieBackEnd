<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\AvailableAsset;
use App\Models\V1\Admin\Offer;
use Log;
use Yajra\DataTables\DataTables;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //  // Obtém o usuário atual
        //  $loggedUser = auth()->user();
         
      
        //   // Verificar se o usuário tem a permissão para visualizar outros usuários
        // if (!Gate::allows('access-admin', auth())) {
        //     // Se não tiver permissão, lance uma exceção de autorização
        //     abort(403, 'Você não tem permissão para visualizar todas as Ofertas.');
        // }


        // if($loggedUser->user_type_id == 1){
            
        //     $offers = Offer::with('asset.due_diligence.crt.users_titles', 'status', 'organization', 'user', 'category')->get();
            

        //     if ($request->ajax()) {
              
        //         return response()->json(['data' => $offers]);
        //     }
            
        //     $url = route('offers.index');
        //     return view('v1.admin.offers.index', compact('url', 'offers'));
        
        // }else{ 

        //     return redirect()->back()->withErrors('Você não tem permissão para acessar todas as ofertas');    
        // }

        
        return view('v1.admin.offers.index');
      
    }

    public function getMadeOffers(Request $request)
    {
         // Obtém o usuário atual
         $loggedUser = auth()->user();

          // Verificar se o usuário tem a permissão para visualizar
        if (Gate::allows('view-offers-made', auth()) || $loggedUser->user_type_id == 1) {

            if ($request->ajax()) {

                $offers = Offer::query();
                $offers::with('asset.due_diligence.crt.users_titles', 'status', 'organization', 'user', 'category');

                $table = Datatables::of($offers);
                return $table->make(true);
                
            }

            
            return view('v1.admin.offers.index', compact('url', 'offers'));
            
        }
        
        if ($request->ajax()) {

            $offers = Offer::query()
                ->with('asset.due_diligence.crt.users_titles', 'offer_status', 'offerHolder')
                ->whereHas('asset.due_diligence.crt.users_titles', function ($query) use ($loggedUser) {
                    // Beneficiários do título
                    $query->where('user_id', $loggedUser->id);
                })
                ->orWhereHas('asset.due_diligence.crt.crtLawyers', function ($query) use ($loggedUser) {
                    // Advogados associados ao título
                    $query->where('lawyer_id', $loggedUser->id);
                })
                ->orWhere('organization_id', $loggedUser->organization_id)
                ->orWhere('created_by', $loggedUser->id)
                ->orderBy('created_at', 'desc');
        
            $table = DataTables::of($offers);
            
            return $table->make(true);
        
      
        }
    }

    public function getReceivedOffers(Request $request)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();
        
          // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (Gate::allows('view-offers-made', auth()) || $loggedUser->user_type_id == 1) {

            $offers = Offer::query();

            $offers::with('asset.due_diligence.crt.users_titles', 'status', 'organization', 'user', 'category')
                             ->whereHas('asset.due_diligence.crt.users_titles', function ($query) use ($loggedUser) {
                                 $query->where('user_id', $loggedUser->id);
                             });

            $table = DataTables::of($offers);
            
            return $table->make(true);
            
        }

        if ($request->ajax()) {

            $offers = Offer::with('asset.due_diligence.crt.crtLawyers', 'status', 'organization', 'user', 'category')
                            ->whereHas('asset.due_diligence.crt.crtLawyers', function ($query) use ($loggedUser) {
                                $query->where('lawyer_id', $loggedUser->id);
                            })
                            ->get();

            $table = DataTables::of($offers);
            
            return $table->make(true);
        } 
    }

    public function makeOffer(Request $request, string $assetId)
    {
         // Obtém o usuário atual
         $loggedUser = auth()->user();
         
      
          // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('make-offer', auth())) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para realizar ofertas.');
        }

        $asset = AvailableAsset::where('id', $assetId)->first();

        $loggedUser = Auth::user();

       if($asset){

            if($request->offerMainValue){

                $offer = New Offer;

                $offer->available_asset_id = $asset->id;
                $offer->offer_date = Carbon::now();
                $offer->offer_deadline = Carbon::now()->addDays(10);
                $offer->status_id = 1;
                $offer->value = $request->offer_main_value;
                $offer->user_id = $loggedUser->id;            
                $offer->organization_id = $loggedUser->organization_id;
                $offer->offer_category_id = 1;

                $offer->save();

            }

            if($request->offerFeeValue){

                $offer = New Offer;

                $offer->available_asset_id = $asset->id;
                $offer->offer_date = Carbon::now();
                $offer->offer_deadline = Carbon::now()->addDays(10);
                $offer->status_id = 1;
                $offer->value = $request->feeValue;
                $offer->user_id = $loggedUser->id;            
                $offer->organization_id = $loggedUser->organization_id;
                $offer->offer_category_id = 2;

                $offer->save();

            }
            

            return redirect()->back()->withMessage('Oferta realizada com sucesso.');  

        }else{

            return redirect()->back()->withErrors('Ativo não encontrado');    
        }

    }
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
        //
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
