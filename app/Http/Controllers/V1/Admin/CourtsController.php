<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\CourtVara;
use Illuminate\Http\Request;

class CourtsController extends Controller
{

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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
