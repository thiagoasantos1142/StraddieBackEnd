<?php

namespace App\Http\Controllers\V1\Sites;

use App\Http\Controllers\Controller;
use App\Models\V1\Lead;
use App\Rules\NameAndSurname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StradieSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('v1.Site.Stradie.index');
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

        $validator = Validator::make(
            $request->all(),
            [
                'nome' => ['required', 'string', 'max:255', new NameAndSurname],
                'email' => 'required|string|email|max:255',
                'telefone' => 'required|string|max:16|min:16',
                'purpose_registration' => 'required|string',
                'ativo_disponivel' => 'required|string|min:3|max:255',
                'mensagem' => 'required|string|min:20|max:255'
            ],
            [
                'required' => 'O :attribute é requerido.',
                'purpose_registration.string' => 'O :attribute é requerido.'
            ]
        );

        if ($request->ajax()) {
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            try {
                Lead::create($request->all());
                //code...
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['errors' => ["message" => $th->getMessage()]], 422);
            }

            return response()->json(['status' => 'success'], 200);
        }
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

    public function saveText(){
        Storage::disk('gcs')->put('example.txt', 'Contentsasdasdas');
        return 'Hello';
    }
}
