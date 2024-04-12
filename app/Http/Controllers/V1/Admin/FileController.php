<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        // Verifica se um arquivo foi enviado
        if ($request->hasFile('file')) {
            // Obtém o arquivo enviado
            $file = $request->file('file');

            // Define o nome do arquivo
            $fileName = $file->getClientOriginalName();

            // Faz o upload do arquivo para o Amazon S3
            Storage::disk('s3')->put($fileName, file_get_contents($file));

            return response()->json(['message' => 'Arquivo enviado com sucesso!']);
        }

        return response()->json(['error' => 'Nenhum arquivo enviado.'], 400);
    }

    public function download($fileName)
    {
        // Verifica se o arquivo existe no Amazon S3
        if (Storage::disk('s3')->exists($fileName)) {
            // Obtém a URL de download do arquivo
            $url = Storage::disk('s3')->url($fileName);

            // Faz o redirecionamento para a URL de download
            return redirect($url);
        }

        return response()->json(['error' => 'Arquivo não encontrado.'], 404);
    }
}
