<?php
/*17. Faça um Programa que peça um número correspondente a um determinado ano e em
seguida informe se este ano é ou não bissexto.*/

$data = $_POST["data"]; 
$partes = explode("/", $data);

$dia = $partes[0];
$mes = $partes[1];
$ano = $partes[2];

if ($dia >= 1 && $dia <= 31 && $mes >= 1 && $mes <= 12 && $ano >= 1) {
    echo "A data $data pode ser válida.";
} else {
    echo "A data $data é inválida.";
}



?>