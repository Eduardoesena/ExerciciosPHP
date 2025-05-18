<?php
/*22. Faça um Programa que peça um número inteiro e determine se ele é par ou ímpar.
Dica: utilize o operador módulo (resto da divisão).*/


$numero = $_POST["numero"];

if ($numero % 2 == 0) {
    echo "O número $numero é par.";
} else {
    echo "O número $numero é ímpar.";
}


?>