<?php

$dados = array(
    "nome" => "Marcio",
    "dt_nasc" => "04/04/1979",
    "documentos" => array(
        "rg" => "0000000",
        "cpf" => "123456789",
        "cnh" => "123456789"
    ),
    "endereco" => array(
        "tipo" => "Estrada",
        "logradouro" => "rua das palmeiras",
        "num" => "100",
        "complemento" => "apt-101",
        "bairro" => "benfica",
        "cidade" => "valença",
        "uf" => "RJ",
        "cep" => "27600-000"
    ),
    "filiacao" => array(
        "nome_pai" => "Luiz",
        "nome_mae" => "Suely"
    ),
    "contatos" => array(
        "celular" => "24 99999-9999",
        "fixo" => "24 2453-6843",
        "email" => "mvds79@yahoo.com.br"
    )
);

// exibição dos dados

foreach ($dados as $chave => $valor) {
    echo $chave . ": ";
    if (is_array($valor)) {
        echo "<br>";
        foreach ($valor as $subChave => $subValor) {
            echo $subChave . ": " . $subValor . "<br>";
        }
    } else {
        echo $valor . "<br>";
    }
    echo "<br>";
}