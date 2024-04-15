<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\UsersCreditRightsTitle;
use Illuminate\Http\Request;

class UsersCreditRigtsTitleController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        //
        if ($request->ajax()) {



            return response()->json(["message" => "teste"]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        //
        if ($request->ajax()) {
            dd($request->all());
            $usersCreditRightsTitle = UsersCreditRightsTitle::where('user_id', $request->user_id)->where('credit_rights_title_id', $request->credit_rights_title_id)->first();
            dd($usersCreditRightsTitle);
            return response()->json(["message" => "success"]);
        }
    }

    public function customDeleteRoute(Request $request)
    {
        UsersCreditRightsTitle::where('user_id', $request->user_id)->where('credit_rights_title_id', $request->credit_rights_title_id)->delete();
        return response()->json(["message" => "success"]);
    }
}
