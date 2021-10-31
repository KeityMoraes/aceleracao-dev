<?php

$aluno = array(
    "Nome" => "João",
    "Nota1" => 10,
    "Nota2" => 7.5,
    "Nota3" => 8
);

function mediaPon(array $alunos): float{
    $media = ($alunos["Nota1"]*2 + $alunos["Nota2"]*3+$alunos["Nota3"]*5)/10;

    return $media;
}

$resul = mediaPon($aluno);
$nome = $aluno["Nome"];
echo "O aluno $nome tem $resul de media";


