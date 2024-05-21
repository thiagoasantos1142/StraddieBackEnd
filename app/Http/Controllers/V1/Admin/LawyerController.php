<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LawyerController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $search = $request->input('search');

            if (!isset($search)) {
                return response()->json(Lawyer::all());
            }

            $users = Lawyer::where('name', 'like', "%$search%")
                ->orWhere('title', 'like', "%$search%")
                ->orWhere('OAB_number', 'like', "%$search%")
                ->orWhere('UF', 'like', "%$search%")
                ->latest()
                ->limit(10)
                ->get();

            return response()->json($users, 200);
        }


        $lawyers = Lawyer::with('user')->get();

        return view('v1.admin.lawyer.index', compact('lawyers'));
    }

    public function show(Request $request, string $id)
    {
        //pegar as informaçoes do adv
        $lawyer = Lawyer::with('users')->find($id);

        if ($request->ajax()) {
            return response()->json($lawyer, 200);
        }

        $dataForm = $this->formCreateUpdate($lawyer); //localizado em config

        return view('v1.admin.lawyer.show', compact('lawyer', 'dataForm'));
    }


    public function create()
    {
        $dataForm = $this->formCreateUpdate();
        return view('v1.admin.lawyer.create', compact('dataForm'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'OAB_number' => 'required|string|max:255',
                'UF' => 'required|string|max:255',
                //'user_id' => 'required|exists:users,id',
            ]
        );

        if ($request->ajax()) {

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            try {
                //code...
                $request->merge(["user_type_id" => 4]);
                $user = User::create($request->all());
    
                $request->merge(["user_id" => $user->id]);
                $lawyer = Lawyer::create($request->all());

                $lawyer = $lawyer::with('user')->find($lawyer->id);
    
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['errors' => $th->getMessage()], 422);
            }


            return response()->json($lawyer);
        }

        Lawyer::create($request->all());

        return redirect()->route('lawyer.index')
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

    public function addUserLawyer(Request $request)
    {
        $lawyer = Lawyer::find($request->lawyer_id);

        $lawyer->update($request->all());

        return response()->json(["message" => "success."], 200);
    }

    public function deleteLawyerToUser(Request $request)
    {
        $lawyer = Lawyer::find($request->lawyer_id);

        $request->merge(["user_id" => null]);

        $lawyer->update($request->all());

        return response()->json(["message" => "success."], 200);
    }


    public function formCreateUpdate($data = null)
    {
        return [
            "inputs" => [
                [
                    "label" => "Nome",
                    "name" => "name",
                    "col" => "6",
                    "value" => $data->name ?? null
                ],
                [
                    "label" => "Título",
                    "name" => "title",
                    "col" => "6",
                    "value" => $data->title ?? null
                ],
                [
                    "label" => "Número da OAB",
                    "name" => "OAB_number",
                    "col" => "6",
                    "value" => $data->OAB_number ?? null
                ],
                [
                    "label" => "UF",
                    "name" => "UF",
                    "col" => "6",
                    "value" => $data->UF ?? null
                ],
            ]
        ];
    }
}
