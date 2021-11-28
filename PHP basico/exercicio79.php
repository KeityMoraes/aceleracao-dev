<?php

class Usuario{
    private $nome;
    private $CPF;
    private $telefone;
    private $matricula;
    private $emprestimo=[];

    public function __construct(string $nome,string $CPF,string $telefone,string $matricula)
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->telefone = $telefone;
        $this->matricula = $matricula;
    }

    public function setTelefone(string $telefone){
        $this->telefone = $telefone;
    }

    public function getnome(){
        return $this->nome;
    }

    public function getCPF(){
        return $this->CPF;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getMatricula(){
        return $this->matricula;
    }


    public function setEmprestimo(Emprestimo $emprestimo){
        $this->emprestimo = $emprestimo;
    }
}


class Emprestimo{
    private $dataDeEmprestimo;
    private $dataPrevistaDeDevolucao;
    private $dataDeEntregaReal;
    private $situacao;
    private $exemplar=[];

    public function __construct()
    {
    }

    public function setDataDeEmprestimo(){
        $this->dataDeEmprestimo = date("m/d/a");
    }

    public function setDataPrevistaDeDevolucao(){
        $this->dataPrevistaDeDevolucao = $this->dataDeEmprestimo + 5;
    }

    public function setDataDeEntregaReal(){
        $this->dataDeEntregaReal = date("m/d/a");
    }

    public function setSituacao(int $situacao){
        $this->situacao = $situacao;
    }

    public function setExemplar(Exemplar $exemplar){
        $this->exemplar = $exemplar;
        $exemplar->emprestado = true;
    }

}



class Exemplar {
    private $codigo;
    private $cativa;
    private $emprestado;

    public function __construct(int $codigo,bool $cativa)
    {
        $this->codigo = $codigo;
        $this->cativa = $cativa;
        $this->emprestado = false;
    }

}


class Livro{

    private $titulo;
    private $autor;
    private $ano;
    private $edicao;
    private $editora;
    private $ISBN;

    public function __construct(string $titulo, string $autor, string $ano, int $edicao, string $editora, string $ISBN)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->edicao = $edicao;
        $this->editora = $editora;
        $this->ISBN = $ISBN;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getAno(){
        return $this->ano;
    }

    public function getEdicao(){
        return $this->edicao;
    }

    public function getEditora(){
        return $this->editora;
    }

    public function getISBN(){
        return $this->ISBN;
    }
}
