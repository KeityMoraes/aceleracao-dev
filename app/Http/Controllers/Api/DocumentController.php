<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\document;
use App\Models\user;
use App\Http\Requests\DocumentRequest;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    protected $doc;

    public function __construct()
    {
        $this->doc = new document();
    }

    public function index(){
        
        
        $doc = document::paginate(100);
        return response()->json($doc);

    }

    public function visualizar($id){
        $documento =$this->doc->find($id);
        return response()->json($documento);

    }

    
    public function store(DocumentRequest $request){
        $cad = $this->doc->create([
            'titulo'=>$request->titulo,
            'tamanho_documento'=>$request->tamanho_documento,
            'numero_assinatura'=>$request->numero_assinatura,
            'assinatura_responsavel'=>$request->assinatura_responsavel,
            'quantidade_pagina' => $request->quantidade_pagina
        ]);
        if ($cad){
            return response()->json($cad);
        }
    }

    public function update(DocumentRequest $request, $id){
        $cad = $this->doc->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'tamanho_documento'=>$request->tamanho_documento,
            'numero_assinatura'=>$request->numero_assinatura,
            'assinatura_responsavel'=>$request->assinatura_responsavel,
            'quantidade_pagina' => $request->quantidade_pagina
        ]);

        return response()->json($cad);
    }

    public function deletar($id){
        $deletado = $this->doc->destroy($id);
        return response()->json(['msg' => 'Documento deletado']);
    }
    
}
