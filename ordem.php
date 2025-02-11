<?php
//Crie um array com números aleatórios e:
//1. Exiba os números na ordem original.
//2. Ordene o array em ordem crescente e exiba novamente.
//3. Ordeno o array em ordem decrescente e exiba novamente.

$numeros = [15, 10, 35, 20, 18, 30, 5, 60, 45, 40];

// Exiba os números na ordem original
echo "Números na ordem original:<br>";
foreach ($numeros as $num) {
    echo $num . "<br>";
}

// Ordene o array em ordem crescente e exiba novamente
sort($numeros);
echo "Números em ordem crescente:<br>";
foreach ($numeros as $num) {
    echo $num . "<br>";
}

// Ordene o array em ordem decrescente e exiba novamente
rsort($numeros);
echo "Números em ordem decrescente:<br>";
foreach ($numeros as $num) {
    echo $num . "<br>";
}