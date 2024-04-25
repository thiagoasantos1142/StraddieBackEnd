<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use App\Models\User;
use App\Models\V1\Admin\CreditRightsTitle;
use App\Models\V1\Admin\DueDiligence;
use App\Models\V1\Admin\File;
use App\Models\V1\Admin\FileType;
use Illuminate\Http\Request;

class DueDiligenceController extends Controller
{
    public function index()
    {
        //mostrar todas os titulos
        $dueDiligences = DueDiligence::all();

        return view('v1.admin.dueDiligence.index', compact('dueDiligences'));
    }

    public function create($credit_rights_title_id)
    {
        $creditRightsTitle = CreditRightsTitle::find($credit_rights_title_id);

        $users = User::whereIn('id', $creditRightsTitle->users_titles()->pluck('user_id'))->get();

        $documentsTypesKYCPF = FileType::where('type', 'KYC-PF')->get(); 
        
        $documentsTypesTitle = FileType::where('type', 'CRT')->get();

        $documentsTypesCND = FileType::where('type', 'CND')->get();

        $lawyers = Lawyer::whereIn('id', $creditRightsTitle->crtLawyers()->pluck('lawyer_id'))->get();  
       
        return view('v1.admin.dueDiligence.create', compact('creditRightsTitle', 'users', 'lawyers', 'documentsTypesTitle', 'documentsTypesKYCPF', 'documentsTypesCND'));
    }

    public function store(Request $request)
    {

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
        
        
        $dueDiligence = new DueDiligence;
        $dueDiligence->credit_rights_title_id = $creditRightsTitle->id;
        $dueDiligence->statuses_id = 1;
        $dueDiligence->save();

        $docTypeUserKycIds = $request->input('doc_type_kyc_user_ids');
        $docTypeUserCndIds = $request->input('doc_type_cnd_user_ids');
        
        $userIds = $creditRightsTitle->users_titles->pluck('id')->toArray();
        $users = User::whereIn('id', $userIds)->get();

       
        foreach($users as $user){
            foreach ($docTypeUserKycIds as $docTypeUserKycId) {
                $file = new File;
                $file->due_duligence_id = $dueDiligence->id;
                $file->type_id = $docTypeUserKycId;            
                $file->category_id = 2;
                $file->user_id = $user->id;
                $file->save();           
            }
            foreach ($docTypeUserCndIds as $docTypeUserCndId) {
                $file = new File;
                $file->due_duligence_id = $dueDiligence->id;
                $file->type_id = $docTypeUserCndIds;            
                $file->category_id = 2;
                $file->user_id = $user->id;
                $file->save();           
            }
        }
        
        $docTypeLawyerKycIds = $request->input('doc_type_kyc_lawyer_ids');
        $docTypeLawyerCndIds = $request->input('doc_type_cnd_lawyer_ids');
        $lawyers = Lawyer::whereIn('id', [$creditRightsTitle->crtLwyers])->get();


        foreach($lawyers as $lawyer){
            foreach ($docTypeUserKycIds as $docTypeUserKycId) {
                $file = new File;
                $file->due_duligence_id = $dueDiligence->id;
                $file->type_id = $docTypeUserKycId;            
                $file->category_id = 2;
                $file->lawyer_id = $lawyer->id;
                $file->save();           
            }
            foreach ($docTypeLawyerCndIds as $docTypeLawyerCndId) {
                $file = new File;
                $file->due_duligence_id = $dueDiligence->id;
                $file->type_id = $docTypeLawyerCndId;            
                $file->category_id = 2;
                $file->lawyer_id = $lawyer->id;
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
                $file->save();           
        }    
        
        $documentsTypesKYCPF = FileType::where('type', 'KYC-PF')->get(); 
        
        $documentsTypesTitle = FileType::where('type', 'CRT')->get();

        $documentsTypesCND = FileType::where('type', 'CND')->get();
        
        return view('v1.admin.dueDiligence.show', compact('dueDiligence', 'documentsTypesTitle', 'documentsTypesKYCPF', 'documentsTypesCND'));
    }

    public function show(Request $request, string $id)
    {

        $dueDiligence = DueDiligence::find($id);


        $creditRightsTitle = CreditRightsTitle::find($dueDiligence->crt->id);

        $users = User::whereIn('id', $creditRightsTitle->users_titles()->pluck('user_id'))->get();

        $documentsTypesKYCPF = FileType::where('type', 'KYC-PF')->get(); 
        
        $documentsTypesTitle = FileType::where('type', 'CRT')->get();

        $documentsTypesCND = FileType::where('type', 'CND')->get();

        $lawyers = Lawyer::whereIn('id', $creditRightsTitle->crtLawyers()->pluck('lawyer_id'))->get();  

        $files = File::where('due_diligence_id', $dueDiligence->id)->get();
        

        return view('v1.admin.dueDiligence.show', compact('dueDiligence', 'creditRightsTitle', 'users', 'lawyers', 'documentsTypesTitle', 'documentsTypesKYCPF', 'documentsTypesCND', 'files'));
    }


}
