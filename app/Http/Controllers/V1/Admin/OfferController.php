<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\AvailableAsset;
use App\Models\V1\Admin\Offer;
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
         // Obtém o usuário atual
         $loggedUser = auth()->user();
         
      
          // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('view-offers', auth())) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para visualizar Ativos.');
        }


        if($loggedUser->user_type_id == 1){
            
            $offers = Offer::with('asset.due_diligence.crt.users_titles', 'offer_status', 'offerHolder')->get();
          

            if ($request->ajax()) {
              
                return response()->json(['data' => $offers]);
            }

            return view('v1.admin.offers.index', compact('offers'));

        }elseif($loggedUser->user_type_id == 5){

             
            $offers = Offer::with('asset.due_diligence.crt.users_titles', 'offer_status', 'offerHolder')
                            ->where('user_id', $loggedUser->id)
                            ->orWhere('organization_id', $loggedUser->organization_id)
                            ->get();
          

            if ($request->ajax()) {
              
                return response()->json(['data' => $offers]);
            }

            return view('v1.admin.offers.index', compact('offers'));


        }else{ 

            return redirect()->back()->withErrors('Você não tem permissão para acessar as ofertas');    
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

            if($request->offer_main_value != ''){

                $offer = New Offer;

                $offer->available_asset_id = $asset->id;
                $offer->offer_date = Carbon::now();
                $offer->offer_deadline = Carbon::now()->addDays(10);
                $offer->status_id = 1;
                $offer->value = $request->offer_main_value;
                $offer->user_id = $loggedUser->id;            
                $offer->organization_id = $loggedUser->organization_id;
                //$offer->offer_category_id = 1;

                $offer->save();

            }

            if($request->feeValue != ''){

                $offer = New Offer;

                $offer->available_asset_id = $asset->id;
                $offer->offer_date = Carbon::now();
                $offer->offer_deadline = Carbon::now()->addDays(10);
                $offer->status_id = 1;
                $offer->value = $request->feeValue;
                $offer->user_id = $loggedUser->id;            
                $offer->organization_id = $loggedUser->organization_id;
                //$offer->offer_category_id = 1;

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
