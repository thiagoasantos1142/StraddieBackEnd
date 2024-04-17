<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\CrtLawyer;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrtLawyerController extends Controller
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
            'user_id' => 'required|int',
            'credit_rights_title_id' => 'required|int',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $request->merge(["lawyer_id" => $request->user_id]);

        CrtLawyer::create($request->all());
        //aqui 
        if ($request->ajax()) {
            return response()->json(["message" => "success."]);
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

    public function customDeleteRoute(Request $request)
    {
        $layer_id = $request->user_id;
        $lawyer = Lawyer::find($layer_id);

        if (!isset($lawyer)) {
            return response()->json(['message' => 'Erro user não é um advogado']);
        }

        CrtLawyer::where('lawyer_id', $lawyer->id)->where('credit_rights_title_id', $request->credit_rights_title_id)->delete();
        return response()->json(["message" => "success"]);
    }
}
