<?php 
// 2. Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo.

    $valor = $_POST["valor"];

    if ($valor > 0) {
        echo "<p>O valor é positivo.</p>";
    } elseif ($valor < 0) {
        echo "<p>O valor é negativo.</p>";
    } else {
        echo "<p>O valor é zero.</p>";
    }

?>




