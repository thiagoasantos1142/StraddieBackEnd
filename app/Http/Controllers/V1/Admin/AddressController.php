<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
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
        //criar um novo endereço.
        $validator = Validator::make($request->all(), [
            'zip' => 'required|string|min:8|max:9',
            'street_number' => 'required|string|max:10',
            'neighborhood' => 'required|string',
            'street' => 'required|string',
            'city_id' => 'required|string',
            'complent' => 'string|max:100'
        ]);

        if ($request->ajax()) {
            // A requisição é AJAX
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            try {
                Address::create($request->all());
                //code...
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['errors' => ["message" => $th->getMessage()]], 422);
            }

            return response()->json(['status' => 'success'], 200);
        }

        //se não for requisição ajax ajustar o retorno aqui para o tipo laravel.
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
