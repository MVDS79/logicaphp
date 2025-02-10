<?php

//preço do arroba
$valor_arroba = 327.10;
$peso_a = 80; 
$peso_b = 90;
$arroba = 15;
$produtor = "Manoel";

//soma dos pesos
$arroba_animal = ($peso_a + $peso_b)/$arroba;
$valor_arroba_animal = $arroba_animal * $valor_arroba;

echo " O valor a pagar ao  produtor " . $produtor . " é de R$ ". number_format($valor_arroba_animal, 2, ',' ,'.');
