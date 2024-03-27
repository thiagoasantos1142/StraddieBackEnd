<?php

namespace App\Http\Controllers\V1\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StradieSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('V1.Site.Stradie.index');
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
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:8',
            'email' => 'required|string|email|max:255|unique:users',
            'active_one' => 'required|string|min:8',
            'active_two' => 'required|string|min:8',
            'message' => 'required|string|min:8'
        ]);

        if ($request->ajax()) {
            // A requisição é AJAX


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
}
