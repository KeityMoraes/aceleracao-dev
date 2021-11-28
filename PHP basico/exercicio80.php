<?php

use Usuario as GlobalUsuario;

class Biblioteca{
    private $listaUsuarios=[];
    private $listaItens=[];

    public function __construct()
    {
        
    }

    public function setListaUsuario(Usuario $usuario){
        $this->listaUsuarios = $usuario;

    }

    public function setItens(Item $item){
        $this->listaItens = $item;

    }

    public function emprestar(Usuario $usuario, $livro){

    }

    public function devolver(Usuario $usuario,$livro){

    }

    public function reservar(Usuario $usuario,$livro){

    }

    public function renovar(Usuario $usuario,$livro){

    }

    public function punirAtrasos(){

    }

    public function limparReservas(){

    }
}



class Usuario{
    private $nome;
    private $login;
    private $senha;
    private $maxEmprestimos;
    private $listaEmprestimos=[];
    private $listaReservas=[];

    public function __construct(string $nome, string $login,string $senha)
    {
        
    }

    public function setListaEmprestimo(Emprestimo $emprestimo){
        $this->listaEmprestimos = $emprestimo;
    }

    public function setListaReservas(Reserva $reserva){
        $this->listaReservas = $reserva;
    }

    public function estaPunido(){

    }

}

class UsuarioComum extends Usuario{

}

class UsuarioEspecial extends Usuario{

}


class Item{
    private $id;
    private $nome;
    private $autores;
    private $ano;
    private $penalidadeAtraso;
    private $tempoReserva;
    private $listaEmprestimo=[];
    private $listaReservas=[];

    public function __construct(int $id,string $nome,string $autores, int $ano)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->autores = $autores;
        $this->ano = $ano;

    }

    public function setTempoReserva(int $dias){

    }

    public function setPenalidadeAtraso($penlidade){

    }
    

    public function setListaEmprestimo(Emprestimo $emprestimo){
        $this->listaEmprestimo = $emprestimo;
    }

    public function setListaReservas(Reserva $reserva){
        $this->listaReservas = $reserva;
    }

    public function estaEmprestado(){

    }

    public function estaReservado(){

    }

}

class Periodico extends Item{

}

class Midia extends Item{

}

class Monografia extends Item{
    
}

class emprestimo{
    private $usuario;
    private $item;
    private $qtdRenovado;
    private $dataExpiracao;
    private bool $status;

    public function __construct(Usuario $usuario, Item $item)
    {
        $this->usuario = $usuario;
        $this->item = $item;
    }

    public function setQtdRenovado(){
        $this->qtdRenovado += 1;
    }

    public function dataExpiracao(string $data){
        $this->dataExpiracao = $data;
    }

}

class Reserva{
    private $usuario;
    private $livro;
    private $status;

    public function __construct(Usuario $usuario,Livro $livro)
    {
        $this->usuario = $usuario;
        $this->livro = $livro;
    }

    public function setStatus(bool $status){
        $this->status = $status;
    }

}

