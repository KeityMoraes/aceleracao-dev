<?php

interface Servicos{
    public function calculaSalario(int $diasTrabalhadoso):float;

    public function calculaSalarioMaisGratificacao(int $diasTrabalhados):float;
}


class Funcionario implements Servicos{
    public $cargo;
    public $nome;

    public function __construct(string $cargo,string $nome)
    {
        $this->cargo = $cargo;
        $this->nome = $nome;
    }


    function calculaSalario(int $diasTrabalhados):float{
        $valordosdiasTrabalhado = 0;
        $salario = 6500;
        $salarioPorDia = $salario/30;
        if ($diasTrabalhados >= 15){
            $valordosdiasTrabalhado = $diasTrabalhados*$salarioPorDia;
            echo "Salario completo<br>Salario: ".number_format($valordosdiasTrabalhado,2,'.','');

            return $salarioPorDia;

        }elseif($diasTrabalhados < 15){
            $descontoDia = $salarioPorDia - $salarioPorDia *0.3;
            $valordosdiasTrabalhado = $diasTrabalhados*$descontoDia;
            echo "Salario com desconto<br>Salario: ".number_format($valordosdiasTrabalhado,2,'.','');

            return $salarioPorDia;
        }


    }

    function calculaSalarioMaisGratificacao(int $diasTrabalhados):float{
        $valordosdiasTrabalhado = 0;
        $salario = 4970;
        $salarioPorDia = $salario/30;
        $porcentagem = 0;
        if($diasTrabalhados == 9 ){
            $porcentagem = $salarioPorDia * 0.2;
            $salarioPorDia += $porcentagem;
            $valordosdiasTrabalhado = $diasTrabalhados*$salarioPorDia; 
            echo "Salario completo mais 20% <br>Salario: ".number_format($valordosdiasTrabalhado,2,'.','')."<br>";

            return $salarioPorDia;

        }elseif($valordosdiasTrabalhado >= 10 or $valordosdiasTrabalhado <= 15){
            $salario += 0.5;
            $salarioPorDia = $salario/30;
            $valordosdiasTrabalhado = $diasTrabalhados*$salarioPorDia; 
            echo "Salario completo <br>Salario: ".number_format($valordosdiasTrabalhado,2,'.','')."<br>";

            return $salarioPorDia;

        }


    }
}



$func = new Funcionario("Dev","Carlos");
$func->calculaSalarioMaisGratificacao(10);
 echo "<br>";
$func2 = new Funcionario("Dev","Jose");
$func2->calculaSalarioMaisGratificacao(10);
