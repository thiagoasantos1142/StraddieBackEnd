<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
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
         return view('V1.Admin.creditRightsTitle.index', compact('creditRightsTitles'));
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
