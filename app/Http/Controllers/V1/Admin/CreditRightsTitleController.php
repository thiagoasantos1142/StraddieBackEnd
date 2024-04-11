<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\Court;

use App\Models\V1\Admin\CrtNatureCredit;
use App\Models\V1\Admin\CrtNatureObligation;
use App\Models\V1\Admin\CrtOriginDebtor;
use App\Models\V1\Admin\CrtSpecies;
use App\Models\V1\Admin\CourtVara;
use App\Models\V1\Admin\CreditRightsTitle;
use Illuminate\Http\Request;

class CreditRightsTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //mostrar todas os titulos
         $creditRightsTitles = CreditRightsTitle::get();
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
