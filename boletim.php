<?php

$boletim = [

    "Joao" => [
        "Matematica" => [8, 7, 9, 10],
        "Portugues" => [6, 7, 8, 7],
        "Ciencias" => [7, 8, 9, 8]
    ],
    "Pedro" => [
        "Matematica" => [5, 6, 7, 8],
        "Portugues" => [8, 9, 7, 6],
        "Ciencias" => [6, 5, 8, 7]
    ],
    "Lucas" => [
        "Matematica" => [9, 10, 8, 7],
        "Portugues" => [7, 6, 8, 9],
        "Ciencias" => [8, 7, 9, 8]
    ],
    "Kaio" => [
        "Matematica" => [6, 7, 5, 6],
        "Portugues" => [9, 8, 7, 6],
        "Ciencias" => [7, 8, 7, 6]
    ],
    "Marcos" => [
        "Matematica" => [10, 9, 8, 7],
        "Portugues" => [6, 7, 6, 8],
        "Ciencias" => [7, 6, 8, 9]
    ]
];

// Função para calcular a média das notas

function calcular_media($notas) {
    $total = array_sum($notas);
    $quantidade = count($notas);
    return $total / $quantidade;
}

// Exibindo o boletim de cada aluno com a média de cada matéria
foreach ($boletim as $aluno => $materias) {
    echo "Boletim de $aluno:<br>";
    foreach ($materias as $materia => $notas) {
        $media = calcular_media($notas);
        echo "$materia - Notas: " . implode(", ", $notas) . " - Média: " . number_format($media, 2) . "<br>";
    }
    echo "<br>";
}