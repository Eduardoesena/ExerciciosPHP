<?php

// 6. Faça um Programa que leia três números e mostre o maior deles.

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

$maior = max($numero1, $numero2, $numero3);
$menor = min($numero1, $numero2, $numero3);

echo "O maior número é: $maior<br>";
echo "O menor número é: $menor";


?>