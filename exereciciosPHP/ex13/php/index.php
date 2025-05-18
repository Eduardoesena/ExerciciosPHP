<?php

/*13. Faça um Programa que leia um número e exiba o dia correspondente da semana.
Exemplo, se o usuário digitar o número “1”, o programa tem que retornar “1-
Domingo” e assim sucessivamente.
Se o usuário digitar outro valor, o programa deverá retornar “valor inválido”.   */

$dia = $_POST["dia"];

if ($dia == 1) {
    echo"O numero digitado coresponde a Domingo";
} elseif ($dia == 2) {
    echo"O numero digitado coresponde a Segunda-feira";
}elseif ($dia == 3) {
    echo"O numero digitado coresponde a Terça-feira";
}elseif ($dia == 4) {
    echo"O numero digitado coresponde a Quarta-feira";
}elseif ($dia == 5) {
    echo"O numero digitado coresponde a Quinta-feira";
}elseif ($dia == 6) {
    echo"O numero digitado coresponde a Sexta-feira";
}elseif ($dia == 7) {
    echo"O numero digitado coresponde a Sabado";
} else {
    echo"O numero digitado não é valido.";
}


?>
