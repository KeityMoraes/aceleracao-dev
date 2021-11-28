<?php

class Aluno{
    private $matricula;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $rg;
    private $idade;
    private $nivelEscolar;

    public function __construct(string $matricula, string $nome,string $sobrenome,
    string $cpf,string $rg,int $idade,int $nivelEscolar)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->idade = $idade;
        $this->nivelEscolar = $nivelEscolar; 
    }

    public function realizaRequerimento(){

    } 

    public function solicitaCertificado(){

    }
    
}


class Turma{
    protected $ano;
    protected $nome_turma;
    protected $aluno=[];
    protected $capacidade;

    public function __construct(int $ano, string $nome_turma, Aluno $aluno,int $capacidade)
    {
        $this->ano = $ano;
        $this->nome_turma = $nome_turma;
        $this->aluno = $aluno;
        $this->capacidade = $capacidade;
    }

    public function listarAlunos(){

    }

    public function exibeVagas(){

    }

    public function adicionarAluno(){

    }



}

