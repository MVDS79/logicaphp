<?php
// Preço do arroba
$precoArroba = 327.10;

// Pesos do animal
$peso1 = 200; // Peso em kg
$peso2 = 150; // Peso em kg

// Soma dos pesos
$pesoTotal = $peso1 + $peso2;

// Conversão para arroba (1 arroba = 15 kg)
$pesoArroba = $pesoTotal / 15;

// Calculo do valor a ser pago ao produtor
$valorPago = $pesoArroba * $precoArroba;

echo "Peso total do animal: " . $pesoTotal . " kg\n";
echo "Peso em arroba: " . $pesoArroba . " arrobas\n";
echo "Valor a ser pago ao produtor: R$ " . $valorPago . "\n";
?>