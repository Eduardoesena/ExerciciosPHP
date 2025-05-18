<?php
/* 5. Faça um programa para a leitura de duas notas parciais de um aluno.
O programa deve calcular a média alcançada por aluno e apresentar:
• A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
• A mensagem "Reprovado", se a média for menor do que sete;
• A mensagem "Aprovado com Distinção", se a média for igual a dez.*/

$nota1 = $_POST["1nota"];
$nota2 = $_POST["2nota"];
$resultado = ($nota1 + $nota2) / 2;

if ($resultado == 10) {
    echo "Aprovado com Distinção";
} elseif ($resultado >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
?>