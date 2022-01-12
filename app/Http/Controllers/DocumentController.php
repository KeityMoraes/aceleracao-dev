<?php

namespace App\Http\Controllers;

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
        
        
        $doc = document::paginate(5);
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


    public function auth(Request $request){

        /*$this->validate($request,
            ['email'=>'required',
            'password'=>'required'],
            ['password.required' => "O campo senha é obrigatório"]);*/

            /*
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                return $this->index(); //corrigir o attempt
            }else{
               return redirect()->back()->with('danger','Senha ou E-mail invalido');
            } 
            */

            $credentials = $request->all(['email'=>$request->email, 'password'=>$request->password]);

        $token = auth()->attempt($credentials);
        
        if(!$token){
            return redirect()->back()->with('danger',"Senha ou E-mail invalido");
        }

        return $this->index();


    }
}
