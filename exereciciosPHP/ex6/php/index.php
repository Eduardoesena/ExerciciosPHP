<?php
// 6. Faça um Programa que leia três números e mostre o maior deles.

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo "O maior número é: $numero1";
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo "O maior número é: $numero2";
} else {
    echo "O maior número é: $numero3";
}
?>