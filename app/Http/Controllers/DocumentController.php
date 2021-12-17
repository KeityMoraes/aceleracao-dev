<?php

namespace App\Http\Controllers;

use App\Models\document;
use Illuminate\Http\Request;

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

    public function visualizar(){
        echo "ooookkkkkkk";

    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){
        $this->doc->create([
            'titulo'=>$request->titulo,
            'tamanho_documento'=>$request->tamanho_documento,
            'numero_assinatura'=>$request->numero_assinatura,
            'assinatura_responsavel'=>$request->assinatura_responsavel,
            'quantidade_pagina' => $request->quantidade_pagina
        ]);
    }
}
