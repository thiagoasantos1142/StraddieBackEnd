<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        $lawyers = Lawyer::with('user')->get();

        return view('V1.Admin.lawyer.index', compact('lawyers'));
    }

    public function create()
    {
        return view('lawyers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'OAB_number' => 'required|string|max:255',
            'UF' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        Lawyer::create($request->all());

        return redirect()->route('lawyers.index')
                         ->with('success', 'Lawyer created successfully.');
    }

    public function edit(Lawyer $lawyer)
    {
        return view('lawyers.edit', compact('lawyer'));
    }

    public function update(Request $request, Lawyer $lawyer)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'OAB_number' => 'required|string|max:255',
            'UF' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $lawyer->update($request->all());

        return redirect()->route('lawyers.index')
                         ->with('success', 'Lawyer updated successfully.');
    }

    public function destroy(Lawyer $lawyer)
    {
        $lawyer->delete();

        return redirect()->route('lawyers.index')
                         ->with('success', 'Lawyer deleted successfully.');
    }
}
