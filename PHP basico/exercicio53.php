<?php

$n1 = array("Cladio" => 7,"Jose" => 9,"Nilton" => 4,
"Filomena" => 10, "Lindomar" => 8,"Cleito" => 10,"Lindsei" => 10,
"Lara" => 6,"Helouse" => 9.5, "Fiona" => 6, "Oliveira" => 7, "Noberto" => 7,
"Rau" => 2, "Willian" => 8.7,"Lucas" => 6.5, "Filo" => 10);

$n2 = array("Cladio" => 4,"Jose" => 10,"Nilton" => 5,
"Filomena" => 10, "Lindomar" => 6,"Cleito" => 7.9,"Lindsei" => 10,
"Lara" => 7,"Helouse" => 9.5, "Fiona" => 3.9, "Oliveira" => 7, "Noberto" => 5,
"Rau" => 5.3, "Willian" => 8.7,"Lucas" => 6.9, "Filo" => 8);

function calculoNotas(array $n1, array $n2){
    foreach($n1 as $key => $valor){
        $soma = $n1[$key] + $n2[$key];

        if($soma >= 19 and $n1[$key] > 7 and $n2[$key] > 7){
            $arquivo = fopen("aluno-aprovados.txt","w+");

            $concatena = $key.": nota1: ".$n1[$key]." Nota2: ".$n2[$key];
            fwrite($arquivo,$concatena."\n\r");
            fclose($arquivo);
            echo $concatena;
            return true;
        }else{
            return false;
    
        }
    }
}

var_dump(calculoNotas($n1,$n2));