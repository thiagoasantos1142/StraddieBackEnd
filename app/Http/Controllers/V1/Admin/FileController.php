<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\CrtDocuments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

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

    public function uploadCrtDocument(Request $request)
    {
        // Verifica se um arquivo foi enviado
        if ($request->hasFile('file')) {
            // Obtém o arquivo enviado
            $file = $request->file('file');

           $path = 'crt/docs/'. str::uuid();

           // Define o nome do arquivo 
           $fileName = $file->getClientOriginalName();

           // Faz o upload do arquivo para o Amazon S3
           Storage::disk('s3')->put($path, file_get_contents($file));

            $document = new CrtDocuments;

            $document->file_name = $fileName;
            $document->file_path = $path;
            $document->credit_rights_title_id = $request->credit_rights_title_id;
            $document->save();
        

            return redirect()->back()->with(['message' => 'Arquivo enviado com sucesso!']);
        }

        return redirect()->back()->withErrors('falaha ao salvar arquivo')->withInput();
    }

    public function download($id)
    {
        $document = CrtDocuments::find($id);
        // Verifica se o documento existe
        if ($document) {
            // Obtém o caminho completo do arquivo
            $filePath = $document->file_path . $document->file_name;
            // Gera a URL temporária de download do arquivo 
        
            $temporaryUrl = Storage::disk('s3')->temporaryUrl($filePath, now()->addHour()); // Temporário por 1 hora
            
            // Redireciona para a URL temporária de download
            return redirect($temporaryUrl);
        }

        // Se o documento não for encontrado, retorna uma resposta de erro
        return response()->json(['error' => 'Arquivo não encontrado.'], 404);
    }

    public function destroy($id)
    {
        // Encontra o documento pelo ID
        $document = CrtDocuments::find($id);
        
        // Verifica se o documento existe
        if ($document) {
            // Obtém o caminho completo do arquivo
            $filePath = $document->file_path . $document->file_name;

            // Remove o arquivo do armazenamento S3
            if (Storage::disk('s3')->exists($filePath)) {
                Storage::disk('s3')->delete($filePath);
            }
            
            // Remove o documento do banco de dados
            $document->delete();

            // Redirecionar de volta para a URL anterior
            return back()->with('success', 'Arquivo excluído com sucesso!');
        }  
        
        // Se o documento não for encontrado, retorna uma resposta de erro
        return back()->with(['error' => 'Arquivo não encontrado.'], 404);
    }
}
