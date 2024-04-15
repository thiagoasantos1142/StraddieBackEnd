<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use App\Models\User;
use App\Models\V1\Admin\CreditRightsTitle;
use App\Models\V1\Admin\DueDiligence;
use Illuminate\Http\Request;

class DueDiligenceController extends Controller
{
    public function index()
    {
        //mostrar todas os titulos
        $dueDiligence = DueDiligence::all();

        return view('v1.admin.dueDiligenca.index', compact('dueDiligence'));
    }

    public function create($credit_rights_title_id)
    {
        $creditRightsTitle = CreditRightsTitle::find($credit_rights_title_id);
        $users = User::whereIn('id', $creditRightsTitle->users_titles()->pluck('id'))->get();

        $lawyers = Lawyer::whereIn('id', $creditRightsTitle->crtLawyers()->pluck('id'))->get();  

        return view('v1.admin.dueDiligence.create', compact('creditRightsTitle', 'users', 'lawyers'));
    }


}
