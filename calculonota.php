<?php
// Notas dos quatro bimestres
$nota1 = 8;
$nota2 = 5;
$nota3 = 4;
$nota4 = 9;

// Função para calcular a média das notas
function calcular_media($nota1, $nota2, $nota3, $nota4) {
    $soma = $nota1 + $nota2 + $nota3 + $nota4;
    return $soma / 4;
}

// Calcular a média
$media = calcular_media($nota1, $nota2, $nota3, $nota4);

// Verificar se o aluno foi aprovado ou reprovado
if ($media >= 7) {
    $status = "aprovado";
} else {
    $status = "reprovado";
}

// Exibir o resultado
echo "A média do aluno foi: " . number_format($media, 2) . PHP_EOL;
echo "O aluno foi " . $status . "." . PHP_EOL;
?>
