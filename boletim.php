<?php

//Exercicio 4: Manipulação de arrays Associativos
//Crie um array associativo com as seguintes informaçoes de alunos:
//. Nome
//. Materia
//. Nota
//
//Utilize um loop foreach para exibir as informações de cada aluno.
//
//Baseado na nota, exibe uma mensagem de aprovação ou reprovação.
//. Se a nota for maior ou igual a 7, exibe a mensagem: "Aluno Aprovado"
//. Se a nota for menor que 7, e maior ou igual a 5 exiba a mensagem: "Aluno em recuperação".
//. Se a nota for menor que 5, exiba a mensagem: "Reprovado".

$alunos = [
    [
        'Nome' => 'Ana',
        'Materia' => 'Ingles',
        'Nota' => 3
    ]
    [
        'Nome' => 'Maria',
        'Materia' => 'Portugues',
        'Nota' => 6
    ]
    [
        'Nome' => 'Pedro',
        'Materia' => 'Ciencias',
        'Nota' => 7
    ]
    [
        'Nome' => 'João',
        'Materia' => 'Matemática',
        'Nota' => 9
    ]
];

// Loop foreach para exibir as informações do aluno
foreach ($alunos as $dados) {
    echo "Nome: " . $dados['Nome'] . "\n";
    echo "Matéria: " . $dados['Materia'] . "\n";
    echo "Nota: " . $dados['Nota'] . "\n";

    // Verificação da nota e exibição da mensagem de aprovação ou reprovação
    if ($dados['Nota'] >= 7) {
        echo "Aluno Aprovado\n";
    } elseif ($dados['Nota'] >= 5) {
        echo "Aluno em recuperação\n";
    } else {
        echo "Reprovado\n";
    }
}