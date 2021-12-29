<?php

namespace App\Http\Controllers;

use App\Models\document;
use App\Http\Requests\DocumentRequest;

class DocumentController extends Controller
{
    protected $doc;

    public function __construct()
    {
        $this->doc = new document();
    }

    public function index(){
        
        
        $doc = document::all();
        return view('document', compact('doc'));

    }

    public function visualizar($id){
        $documento =$this->doc->find($id);
        return view('visualizar', compact('documento'));

    }

    public function create(){

        return view('create');
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
            return redirect('documentos');
        }
    }


    public function editar($id){

        $documento = $this->doc->find($id);
        return view('create',compact('documento'));

    }

    public function update(DocumentRequest $request, $id){
        $cad = $this->doc->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'tamanho_documento'=>$request->tamanho_documento,
            'numero_assinatura'=>$request->numero_assinatura,
            'assinatura_responsavel'=>$request->assinatura_responsavel,
            'quantidade_pagina' => $request->quantidade_pagina
        ]);
        return redirect('documentos');
    }


    public function deletar($id){
        $deletado = $this->doc->destroy($id);
        return($deletado)?"sim":"nao";
    }
}
