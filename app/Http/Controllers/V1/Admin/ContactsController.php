<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
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
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string'
        ]);

        if ($request->ajax()) {
            // A requisição é AJAX
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            try {
                $contact = Contact::create($request->all());
                //code...
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['errors' => ["message" => $th->getMessage()]], 422);
            }

            return response()->json($contact, 200);
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        try {
            //code...
            Contact::find($id)->delete();
            if ($request->ajax()) {
                return response()->json(["message" => "success."]);
            }
        } catch (\Throwable $th) {
            //throw $th;
            if ($request->ajax()) {
                return response()->json(["error" => "Erro ao deletar telefone"]);
            }
        }
    }
}
