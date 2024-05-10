<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\AvailableAsset;
use App\Models\V1\Admin\CrtOriginDebtor;
use App\Models\V1\Admin\CrtType;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $assets = AvailableAsset::with('due_diligence.crt')->get();

        $filterAssetsCtrTypes = isset($request->ctrTypesId) ? explode(",", $request->ctrTypesId) : null;
        $crtOriginDebitors = isset($request->crtOriginDebitorsId) ? explode(",", $request->crtOriginDebitorsId) : null;


        if ($request->ajax()) {
            // due_diligence.crt
            return response()->json([
                "data" => AvailableAsset::when($filterAssetsCtrTypes, function ($query, $filterAssetsCtrTypes) {
                    return $query->whereHas('due_diligence.crt', function ($query) use ($filterAssetsCtrTypes) {
                        $query->whereIn('crt_type_id', $filterAssetsCtrTypes);
                    });
                })->when($crtOriginDebitors, function ($query, $crtOriginDebitors) {
                    return $query->whereHas('due_diligence.crt', function ($query) use ($crtOriginDebitors) {
                        $query->whereIn('origin_debtor_id', $crtOriginDebitors);
                    });
                })->get()
            ]);
        }

        $crtTypes = CrtType::get();
        $crtOriginDebitors = CrtOriginDebtor::get();
        return view('v1.admin.assets.index', compact('assets', 'crtTypes', 'crtOriginDebitors'));
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
