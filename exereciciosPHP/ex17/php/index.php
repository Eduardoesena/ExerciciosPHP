<?php
/*17. Faça um Programa que peça um número correspondente a um determinado ano e em
seguida informe se este ano é ou não bissexto.*/

$ano = $_POST["ano"]; 

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "O ano $ano é bissexto.";
} else {
    echo "O ano $ano não é bissexto.";
}





?>