<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\V1\Admin\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class FileController extends Controller
{
    public function uploadFile(Request $request)
    {
        // Verifica se um arquivo foi enviado
        if ($request->hasFile('file')) {
            // Obtém o arquivo enviado
            $file = $request->file('file');

            $document = File::find($request->fileId);
            


            if($document){

                if($document->category_id == 1) {
                    $path = 'crt/docs/'. str::uuid();
                }elseif($document->category_id == 2){
                    $path = 'dueDiligence/docs/'. str::uuid();
                }

                // Faz o upload do arquivo para o Amazon S3
                Storage::disk('s3')->put($path, file_get_contents($file));

                

                $document->filename = $file->getClientOriginalName();
                $document->path = $path;                      
                $document->title = $request->title;
                $document->description = $request->description;
                    
                $document->status_id = 2;
                $document->save();

                return redirect()->back()->with(['message' => 'Arquivo enviado com sucesso!']);

            }else{
                return redirect()->back()->withErrors('File não encontrado')->withInput();

            }
        }

        return redirect()->back()->withErrors('Falha ao carregar arquivo')->withInput();


    }

    public function aprove($id)
    {
        $user = \Auth::user(); 

        if($user->user_type_id == 1){

            $file = File::find($id);

            if($file){

                $file->status_id =  3;

                $file->save();
                
                return redirect()->back()->with(['message' => 'Arquivo aprovado com sucesso!']);

            }

            return redirect()->back()->withErrors('Arquivo não encontrado')->withInput();

        }

        return redirect()->back()->withErrors('Você não possui altorização para aprovar arquivo')->withInput();        

    }
    public function reject($id)
    {
        $user = \Auth::user(); 

        if($user->user_type_id == 1){

            $file = File::find($id);

            if($file){

                $file->status_id =  4;

                $file->save();               
                
                return redirect()->back()->with(['message' => 'Arquivo rejeitado com sucesso!']);

            }

            return redirect()->back()->withErrors('Arquivo não encontrado')->withInput();

        }

        return redirect()->back()->withErrors('Você não possui altorização para rejeitar arquivo')->withInput();        

    }
    public function upload(Request $request)
    {
        // Verifica se um arquivo foi enviado
        if ($request->hasFile('file')) {
            // Obtém o arquivo enviado
            $file = $request->file('file');

            if($request->category_id == 1) {
                $path = 'crt/docs/'. str::uuid();
            }elseif($request->category_id == 2){
                $path = 'dueDiligence/docs/'. str::uuid();
            }

          // Faz o upload do arquivo para o Amazon S3
           Storage::disk('s3')->put($path, file_get_contents($file));

            $document = new File;

            $document->filename = $file->getClientOriginalName();
            $document->path = $path;
            $document->type_id = $request->type_id;            
            $document->category_id = $request->category_id;              
            $document->title = $request->title;
            $document->description = $request->description;

            if( $request->category_id == 1) {

                $document->credit_rights_title_id = $request->credit_rights_title_id;

            }else{
                
                $document->due_diligence_id = $request->due_diligence_id;
            }
            $document->save();
        

            return redirect()->back()->with(['message' => 'Arquivo enviado com sucesso!']);
        }

        return redirect()->back()->withErrors('falaha ao salvar arquivo')->withInput();
    }

    public function download($id)
    {
        $file = File::find($id);
        // Verifica se o documento existe
        if ($file) {
            // Obtém o caminho completo do arquivo
           
            // Gera a URL temporária de download do arquivo         
            $temporaryUrl = Storage::disk('s3')->temporaryUrl($file->path, now()->addHour()); // Temporário por 1 hora
            
            // Redireciona para a URL temporária de download
            return redirect($temporaryUrl);
        }

        // Se o documento não for encontrado, retorna uma resposta de erro
        return response()->json(['error' => 'Arquivo não encontrado.'], 404);
    }

    public function destroy($id)
    {
        // Encontra o documento pelo ID
        $document = File::find($id);
        
        // Verifica se o documento existe
        if ($document) {            

            // Remove o arquivo do armazenamento S3
            if (Storage::disk('s3')->exists($document->path)) {
                Storage::disk('s3')->delete($document->path);
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
