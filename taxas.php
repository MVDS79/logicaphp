<?php

//Exercicio 5: Conversão  de moedas

//Crie um array associativo com as taxas de conversão de diferentes moedas para reais (R$):
//. Dolar (USD)-> 5.10
//. Euro (EUR)-> 5.50
//. Libra (GBP)-> 6.30
//. Peso Argentino (ARS)-> 0.05

$taxas = [
    "USD" => 6.00,
    "EUR" => 5.50,
    "GBP" => 6.30,
    "ARS" => 0.05
];

$valor_real = 100;

//echo "Valor em Dolar: US$ ". $valor_real / $taxas['USD'] . "<br>";
//echo "Valor em Euro: EU$ ". $valor_real / $taxas['EUR'] . "<br>";
//echo "Valor em Libra: L$ ". $valor_real / $taxas['GBP'] . "<br>";
//echo "Valor em Peso Argentino: P$ ". $valor_real / $taxas['ARS'] . "<br>";

echo "Valor em Dolar: US$ ". number_format($valor_real / $taxas['USD'], 2, ',', '.') . "<br>";