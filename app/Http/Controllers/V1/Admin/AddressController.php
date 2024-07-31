<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Log;

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
        ]);

        $city = City::where('title', $request->city_id)->first();


        if ($city) {
            $request->merge(['city_id' => $city->id]);
        } else {
            // Trate o caso em que a cidade não foi encontrada
        }


        if ($request->ajax()) {
            // A requisição é AJAX
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            try {
                $address = Address::create($request->all());
                //code...
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['errors' => ["message" => $th->getMessage()]], 422);
            }

            return response()->json($address, 200);
        }

        //se não for requisição ajax ajustar o retorno aqui para o tipo laravel.
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        //
        $address = Address::find($id);

        if ($request->ajax()) {
            return response()->json($address, 200);
        }
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
        // Encontre o endereço que você deseja atualizar
        $address = Address::find($id);

        if (!$address) {
            return response()->json(['errors' => ['message' => 'Endereço não encontrado']], 404);
        }

        $validator = Validator::make($request->all(), [
            'zip' => 'required|string|min:8|max:9',
            'street_number' => 'required|string|max:10',
            'neighborhood' => 'required|string',
            'street' => 'required|string',
            'city_id' => 'required|string',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        $city = City::where('title', $request->city_id)->first();


        if ($city) {
            $request->merge(['city_id' => $city->id]);
        } else {
        }

        try {

            $address->update($request->all());
        } catch (\Throwable $th) {

            return response()->json(['errors' => ["message" => $th->getMessage()]], 422);
        }

        return response()->json($address, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        Address::destroy($id);
        
        if ($request->ajax()) {
            return response()->json(["message" => "sucess"], 200);
        }
    }
}
