<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\Offer;
use Gate;
use Illuminate\Http\Request;
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
