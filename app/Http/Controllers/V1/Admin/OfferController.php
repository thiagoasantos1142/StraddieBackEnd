<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\AvailableAsset; 
use App\Models\V1\Admin\Offer;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        return view('v1.admin.offers.index');
      
    }

    public function getMadeOffers(Request $request)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();
        
        // Verificar se o usuário tem a permissão para visualizar todas as ofertas
        if (Gate::allows('view-offers-made', auth()) || $loggedUser->user_type_id == 1) {
            
            if ($request->ajax()) {

                $offers = Offer::with('asset.due_diligence.crt.users_titles', 'status', 'organization', 'user', 'category')->get();
           
                return response()->json(['data' => $offers]);
            }
    
        }        
        
        if ($request->ajax()) {
            $offers = Offer::query()
                            ->with('asset.due_diligence.crt.users_titles', 'status', 'organization', 'user', 'category')
                            ->where(function ($query) use ($loggedUser) {
                                $query->whereNotNull('organization_id')
                                    ->where('organization_id', $loggedUser->organization_id);
                            })
                            ->orWhere(function ($query) use ($loggedUser) {
                                $query->whereNotNull('offers.created_by')
                                    ->where('offers.created_by', $loggedUser->id);
                            })
                            ->orWhere(function ($query) use ($loggedUser) {
                                $query->whereNotNull('offers.user_id')
                                    ->where('offers.user_id', $loggedUser->id);
                            })
                            ->orderBy('offers.created_at', 'desc')
                            ->get();
        
            
            $table = DataTables::of($offers);
            
            return $table->make(true);
        }
    
        // Caso não seja uma requisição Ajax, retornar uma resposta padrão
        return response()->json(['error' => 'Unauthorized'], 403);
    }
    

    public function getReceivedOffers(Request $request)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();
        
       // Verificar se o usuário tem a permissão para visualizar todas as ofertas
       if (Gate::allows('view-offers-made', auth()) || $loggedUser->user_type_id == 1) {
            
            if ($request->ajax()) {

                $offers = Offer::with('asset.due_diligence.crt.users_titles', 'status', 'organization', 'user', 'category')->get();
        
                return response()->json(['data' => $offers]);
            }

        }

        if ($request->ajax()) {

            $offers = Offer::query()
                ->with('asset.due_diligence.crt.users_titles', 'status', 'organization', 'user', 'category')
                ->whereHas('asset.due_diligence.crt.users_titles', function ($query) use ($loggedUser) {
                    // Beneficiários do título
                    $query->where('user_id', $loggedUser->id);
                })
                ->orWhereHas('asset.due_diligence.crt.crtLawyers', function ($query) use ($loggedUser) {
                    // Advogados associados ao título
                    $query->where('lawyer_id', $loggedUser->id);
                })
                ->orWhere('offers.created_by', $loggedUser->id)
                ->orderBy('offers.created_at', 'desc');
            
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

        if ($request->offerMainValue) {
            $offer = new Offer;

            $offer->available_asset_id = $asset->id;
            $offer->offer_date = Carbon::now();
            $offer->offer_deadline = Carbon::now()->addDays(10);
            $offer->status_id = 1;

            // Converte o valor para o formato decimal
            $offer->value = $this->convertToDecimal($request->input('offer_main_value'));

            $offer->user_id = $loggedUser->id;
            $offer->created_by = $loggedUser->id;
            $offer->organization_id = $loggedUser->organization_id;
            $offer->category_id = 1;

            $offer->save();
        }

        if($request->offerFeeValue){

            $offer = New Offer;

            $offer->available_asset_id = $asset->id;
            $offer->offer_date = Carbon::now();
            $offer->offer_deadline = Carbon::now()->addDays(10);
            $offer->status_id = 1;
            $offer->value = $this->convertToDecimal($request->input('feeValue'));
            $offer->user_id = $loggedUser->id;  
            $offer->created_by = $loggedUser->id;            
            $offer->organization_id = $loggedUser->organization_id;
            $offer->category_id = 2;

            $offer->save();

        }
            

        return redirect()->back()->withMessage('Oferta realizada com sucesso.');  

        }else{

            return redirect()->back()->withErrors('Ativo não encontrado');    
        }

    }

    // Função auxiliar para verificar se o usuário está associado ao título
    private function userIsAssociatedWithTitle($user, $offer)
    {
        $crt = $offer->asset->due_diligence->crt;

        // Verifica se o usuário é o criador do título, advogado associado ou beneficiário
        return $crt->user_id == $user->id ||
            $crt->crtLawyers()->where('lawyer_id', $user->id)->exists() ||
            $crt->users_titles()->where('user_id', $user->id)->exists();
    }

      // Função para converter o valor
      private function convertToDecimal($value)
      {
          // Remove pontos e substitui vírgula por ponto
          $value = str_replace('.', '', $value);
          $value = str_replace(',', '.', $value);
  
          return $value;
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
        // Obtém o usuário atual
        $loggedUser = auth()->user();
        
        // Busca a oferta pelo ID
        $offer = Offer::find($id);
        
        // Se a oferta não for encontrada, retorna com erro
        if (!$offer) {
            return redirect()->back()->withErrors('Oferta não encontrada');
        }
        
        // Verificar se o usuário tem permissão para visualizar todas as ofertas ou se é um admin
        if (Gate::allows('view-offers-made', auth()) || $loggedUser->user_type_id == 1) {
            // Usuário com permissão ou admin pode visualizar a oferta
            return view('v1.admin.offers.show', [
                'offer' => $offer,
                'isAssociated' => false, // Admins não precisam dessa verificação
                'isOwner' => false // Admins não precisam dessa verificação
            ]);
        }
       
        // Verificar se o usuário está associado à oferta
         $isAssociated =    $offer->asset->due_diligence->crt->users_titles->contains('user_id', $loggedUser->id) ||
                            $offer->asset->due_diligence->crt->crtLawyers->contains('lawyer_id', $loggedUser->id) ||
                            $offer->asset->due_diligence->crt->created_by = $loggedUser->id;
        
        // Verificar se o usuário é o dono da oferta
        $isOwner = $offer->created_by == $loggedUser->id || 
                $offer->organization_id == $loggedUser->organization_id;
        
        // Verificar se o usuário está associado ou é o dono
        if ($isAssociated || $isOwner) {
            return view('v1.admin.offers.show', [
                'offer' => $offer,
                'isAssociated' => $isAssociated,
                'isOwner' => $isOwner
            ]);
        }
        
        // Se não tiver permissão, lança uma exceção de autorização
        abort(403, 'Você não tem permissão para visualizar esta oferta.');
    }

    
    /**
     * Show the form for editing the specified resource.
     */

     public function accept($id)
     {
         // Obtém o usuário atual
         $loggedUser = auth()->user();
        
         // Verificar se o usuário tem a permissão para visualizar todas as ofertas
         if (Gate::allows('accept-offers', auth()) || $loggedUser->user_type_id == 1) {              

            $offer = Offer::where('id', $id)->first();

            if($offer){ 

                if($offer->status_id != 1){

                    return redirect()->back()->withErrors('Oferta não está mais disponível');
                }

                // Verificar se o usuário está associado à oferta
                $isAssociated = $offer->asset->due_diligence->crt->users_titles->contains('user_id', $loggedUser->id) ||
                                $offer->asset->due_diligence->crt->crtLawyers->contains('lawyer_id', $loggedUser->id) ||
                                $offer->asset->due_diligence->crt->created_by = $loggedUser->id;

                if( $isAssociated ) {                    

                    //Busca o Ativo ao qual é a oferta
                    $availableAsset = AvailableAsset::where('id', $offer->available_asset_id)->first();

                    if($availableAsset){//Ativop encontrado

                        //Altera o status do ativo para em negociação
                        $availableAsset->status_id = 2;
                        $availableAsset->save();

                        // Altera o status da oferta para 'aceito'
                        $offer->status_id = 3;
                        $offer->save();

                    }else{

                        return redirect()->back()->withErrors('Ativo não encontrado');
                    }

                    return redirect()->back()->with('success', 'Oferta aceita com sucesso.');
                
                }else{

                    return redirect()->back()->withErrors('Você não pode aceitar essa oferta');
                }

            }else{

                return redirect()->back()->withErrors('Oferta não encontrada');

            }
        
  
        }

         // Se não tiver permissão, lance uma exceção de autorização
         abort(403, 'Você não tem permissão para aceitar ofertas.');  
     }


     public function counter(Request $request, $id)
     {
         $request->validate([
             'counter_amount' => 'required|numeric|min:0',
             'counter_description' => 'nullable|string',
         ]);

          // Obtém o usuário atual
          $loggedUser = auth()->user();

          // Verificar se o usuário tem a permissão para visualizar todas as ofertas
          if (!Gate::allows('accept-offers', auth()) || $loggedUser->user_type_id != 1) {
              
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para aceitar ofertas.');  

       }
 
         $offer = Offer::findOrFail($id);
 
         // Verificar se o usuário está associado à oferta
         $isAssociated =    $offer->asset->due_diligence->crt->users_titles->contains('user_id', $loggedUser->id) ||
                            $offer->asset->due_diligence->crt->crtLawyers->contains('lawyer_id', $loggedUser->id) ||
                            $offer->asset->due_diligence->crt->created_by = $loggedUser->id;

        if( $isAssociated ){
            // Lógica para salvar a contraproposta
            $offer->counter_offer_amount = $request->input('counter_amount');
            $offer->counter_offer_description = $request->input('counter_description');
            $offer->status = 'countered'; // Atualiza o status para 'contra proposta'
            $offer->save();
    
            return redirect()->back()->with('success', 'Contra proposta enviada com sucesso.');

        }else{

            return redirect()->back()->with('error', 'Você não tem permissçao para enviar contra-proposta.');
        }
     }

     public function cancelMadeOffers($id){

          // Obtém o usuário atual
          $loggedUser = auth()->user();

          // Verificar se o usuário tem a permissão para cancelar oferta
        if (Gate::allows('cancel-offers', auth()) || $loggedUser->user_type_id == 1) {
              
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para aceitar ofertas.');  

        }

        $offer = Offer::findOrFail($id);

        $isOwner = $offer->created_by == $loggedUser->id || 
        $offer->organization_id == $loggedUser->organization_id;

        if ($isOwner) {
            
            $offer = Offer::findOrFail($id);
            $offer->status_id = 5;
            $offer->save();

            return redirect()->back()->with('success', 'Oferta cancelada com sucesso.');

        }else{

            return redirect()->back()->with('error', 'Você não tem permissçao para cancelar oferta.');
        }
     }
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
