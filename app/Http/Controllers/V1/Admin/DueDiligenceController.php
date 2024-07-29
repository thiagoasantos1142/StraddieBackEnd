<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use App\Models\User;
use App\Models\V1\Admin\AvailableAsset;
use App\Models\V1\Admin\CreditRightsTitle;
use App\Models\V1\Admin\DueDiligence;
use App\Models\V1\Admin\File;
use App\Models\V1\Admin\FileType;
use App\Models\V1\Admin\Organization;
use App\Models\V1\Admin\OrganizationsCreditRightsTitle;
use Gate;
use Illuminate\Http\Request;

class DueDiligenceController extends Controller
{
    public function index()
    {

        // Obtém o usuário atual
        $loggedUser = auth()->user();         
      
        // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('view-dueDiligences', $loggedUser) || !Gate::allows('access-admin', $loggedUser)) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para visualizar Due Diligence.');
        }

      
        //mostrar todas os titulos
        $dueDiligences = DueDiligence::all();

        return view('v1.admin.dueDiligence.index', compact('dueDiligences'));
    }

    public function create($credit_rights_title_id)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();         
      
         // Verificar se o usuário tem a permissão para visualizar outros usuários
       if (!Gate::allows('create-dueDiligence', auth()) && $loggedUser->user_type_id != 1) {
           // Se não tiver permissão, lance uma exceção de autorização
           abort(403, 'Você não tem permissão para criar Due Diligence.');
       }


       $creditRightsTitle = CreditRightsTitle::find($credit_rights_title_id);

       if (!$creditRightsTitle->users_titles()->exists() && !$creditRightsTitle->organizations_titles()->exists()) {

            return redirect()->back()->withErrors('O Credit Rights Title deve ter pelo menos um beneficiário associado.')->withInput();
        }

        if (!$creditRightsTitle->crtLawyers()->exists()) {

            return redirect()->back()->withErrors('O Credit Rights Title deve ter pelo menos um advogado associado.')->withInput();
        }

        

        $users = User::whereIn('id', $creditRightsTitle->users_titles()->pluck('user_id'))->get();

        $usersPj = Organization::whereIn('id', OrganizationsCreditRightsTitle::where('credit_rights_titles_id',$credit_rights_title_id)->pluck('organizations_id'))->get();

        $documentsTypesKYCPF = FileType::where('type', 'KYC-PF')->get(); 
        
        $documentsTypesTitle = FileType::where('type', 'CRT')->get();

        $documentsTypesCND = FileType::where('type', 'CND')->get();

        $lawyers = Lawyer::whereIn('id', $creditRightsTitle->crtLawyers()->pluck('lawyer_id'))->get();  
       
        return view('v1.admin.dueDiligence.create', compact('creditRightsTitle', 'users', 'lawyers', 'documentsTypesTitle', 'documentsTypesKYCPF', 'documentsTypesCND', 'usersPj'));
    }

    public function store(Request $request)
    {
         // Obtém o usuário atual
         $loggedUser = auth()->user();         
      
         // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('create-dueDiligence', auth()) && $loggedUser->user_type_id != 1) {
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para criar Due Diligence.');
        }

        $validator = \Validator::make(
            $request->all(),
            [
                
                //'email' => "unique:users,email|email|max:255",
                //'cpf' => "unique:users,cpf|max:20",
                //'phone' => 'required|max:20'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $creditRightsTitle = CreditRightsTitle::where('id', $request->input('creditRightsTitleId'))->first();

        if($creditRightsTitle){
            $dueDiligence = new DueDiligence;
            $dueDiligence->credit_rights_title_id = $creditRightsTitle->id;
            $dueDiligence->status_id = 1;
            $dueDiligence->save();
    
            $docTypeUserKycIds = $request->input('doc_type_kyc_user_ids');
            $docTypeUserCndIds = $request->input('doc_type_cnd_user_ids');
    
            $userIds = $creditRightsTitle->users_titles->pluck('id')->toArray();
            $users = User::whereIn('id', $userIds)->get();
    
            foreach ($users as $user) {
                foreach ($docTypeUserKycIds as $docTypeUserKycId) {
    
                    $file = new File;
                    $file->due_diligence_id = $dueDiligence->id;
                    $file->type_id = $docTypeUserKycId;
                    $file->category_id = 2;
                    $file->user_id = $user->id;
                    $file->status_id = 1;
                    $file->save();
                }
                foreach ($docTypeUserCndIds as $docTypeUserCndId) {
                    $file = new File;
                    $file->due_diligence_id = $dueDiligence->id;
                    $file->type_id = $docTypeUserCndId;
                    $file->category_id = 2;
                    $file->user_id = $user->id;
                    $file->status_id = 1;
                    $file->save();
                }
            }
            $docTypeLawyerKycIds = $request->input('doc_type_kyc_law_ids');

            $lawyersIds = $creditRightsTitle->crtLawyers->pluck('lawyer_id')->toArray();
            $lawyers = Lawyer::whereIn('id', $lawyersIds)->get();

            foreach ($lawyers as $lawyer) {
                foreach ($docTypeLawyerKycIds as $docTypeLawyerKycId) {
                    $file = new File;
                    $file->due_diligence_id = $dueDiligence->id;
                        $file->type_id = $docTypeLawyerKycId;
                        $file->category_id = 2;
                        $file->status_id = 1;

                        $file->user_id = $lawyer->user_id;
                        $file->save();
                }
            }

            $docTypeTitleIds = $request->input('doc_type_title_ids');

            foreach ($docTypeTitleIds as $docTypeTitleId) {
                    $file = new File;
                    $file->due_diligence_id  = $dueDiligence->id;
                    $file->type_id = $docTypeTitleId;
                    $file->credit_rights_title_id = $creditRightsTitle->id;
                    $file->category_id = 2;

                    $file->status_id = 1;
                    $file->save();
            }

            return redirect()->route('dueDiligence.show', ['dueDiligence' => $dueDiligence->id]);
        }
    }

    public function show(Request $request, string $id)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();         
      
        // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('view-dueDiligences', $loggedUser) ) {
                           
            // Se não tiver permissão, lance uma exceção de autorização
            abort(403, 'Você não tem permissão para visualizar Due Dilogence.');
        }
        
        $validator = \Validator::make(
            $request->all(),
            [
                
                //'email' => "unique:users,email|email|max:255",
                //'cpf' => "unique:users,cpf|max:20",
                //'phone' => 'required|max:20'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dueDiligence = DueDiligence::find($id);

        if($dueDiligence){

            $creditRightsTitle = CreditRightsTitle::find($dueDiligence->crt->id);

            $users = User::whereIn('id', $creditRightsTitle->users_titles()->pluck('user_id'))->get();

            $documentsTypesKYCPF = FileType::where('type', 'KYC-PF')->get(); 
            
            $documentsTypesTitle = FileType::where('type', 'CRT')->get();

            $documentsTypesCND = FileType::where('type', 'CND')->get();

            $lawyers = Lawyer::with('user')->whereIn('id', $creditRightsTitle->crtLawyers()->pluck('lawyer_id'))->get();  

            $files = File::where('due_diligence_id', $dueDiligence->id)->get();
            

            return view('v1.admin.dueDiligence.show', compact('dueDiligence', 'creditRightsTitle', 'users', 'lawyers', 'documentsTypesTitle', 'documentsTypesKYCPF', 'documentsTypesCND', 'files'));
    

        }else{

            return redirect()->back()->withErrors('Due Diligence não encontrada');
        }
    }

    public function aprove(Request $request, $id)
    {
        // Obtém o usuário atual
        $loggedUser = auth()->user();         
      
        // Verificar se o usuário tem a permissão para visualizar outros usuários
        if (!Gate::allows('aprove-dueDiligence', auth()) && $loggedUser->user_type_id != 1) {
             // Se não tiver permissão, lance uma exceção de autorização
             abort(403, 'Você não tem permissão para aprovar Due Diligence.');
        }

        $validator = \Validator::make(
            $request->all(),
            [
                
                //'email' => "unique:users,email|email|max:255",
                //'cpf' => "unique:users,cpf|max:20",
                //'phone' => 'required|max:20'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dueDiligence = DueDiligence::find($id);

        if($dueDiligence){

            if($dueDiligence->status_id == 3){

                return redirect()->back()->withErrors('Está Due Diligence já está aprovada');
            }

            if($dueDiligence->status_id == 4 || $dueDiligence->status_id == 5){

                return redirect()->back()->withErrors('Está Due Diligence já está cancelada ou rejeitada, não é possivel mais aprova-la');
            }

            if($dueDiligence->status_id == 1 || $dueDiligence->status_id == 2 ){

                $dueDiligence->status_id = 3;
                $dueDiligence->save();

              //  dd($dueDiligence->id);

                $available_asset = New AvailableAsset;

                $available_asset->due_diligence_id = $dueDiligence->id;     
                
                if($request->highlighted_contractual_fee){

                    $available_asset->highlighted_contractual_fee = 1;                    
                    $available_asset->negotiated_fee_value = $request->fee_value;
                    $available_asset->contractual_fees_for_sale = 1;
                    $available_asset->percentage_contractual_fee = $request->percentage_contractual_fee;

                }

                if($request->main_credit_for_sale){

                    $available_asset->main_credit_for_sale = 1; 
                    $available_asset->negotiated_main_value = $request->main_value;
                }
                    
                
                $available_asset->save();

                return redirect()->route('dueDiligence.show', ['dueDiligence' => $dueDiligence->id]);
            }

        }else{

            return redirect()->back()->withErrors('Due Diligence não encontrada');

        }
    }
}
