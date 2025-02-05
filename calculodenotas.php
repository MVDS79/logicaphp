<?php
// crie um aplicativo que leia as notas de um aluno nos quatro bimestres
// calcule a media e se o aluno teve nota maior ou igual a 7 aprovado
// se teve nota menor que 7 reprovado

$nota1 = 8;
$nota2 = 5;
$nota3 = 4;
$nota4 = 9;
$aluno = "Zé";

$media = ($nota1 + $nota2 + $nota3 + $nota4) /4;

if ($media >= 7) {
    echo $aluno . ", você foi reprovado com média " . $media;
} else  {
    echo $aluno . ", você foi reprovado com media " . $media;
}
