<?php
// crie um aplicativo que leia as notas de um aluno nos quatro bimestres
// calcule a media e se o aluno teve nota maior ou igual a 7 aprovado
// se teve nota menor que 7 reprovado

$nota1 = 2;
$nota2 = 3;
$nota3 = 4;
$nota4 = 3;
$aluno = "Zé";

$media = ($nota1 + $nota2 + $nota3 + $nota4) /4;

if ($media >= 7) {
    echo $aluno . ", você foi reprovado com média " . $media;
} else if ($media , 7 && $media <= 5) {
    echo $aluno . ", você esta em recuperação com media " .$media;
} 
  else {
    echo $aluno . ", você foi reprovado com media " . $media;
}
