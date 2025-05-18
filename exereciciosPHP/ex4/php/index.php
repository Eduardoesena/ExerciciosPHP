<?php
// 4. Faça um Programa que verifique se uma letra digitada é vogal ou consoante

$letra = strtoupper($_POST["letra"]); // Coloquei o "strtoupper" para converter as letras todas em maiusculas.


    if ($letra == "A" && "E" && "I" && "O" && "U") {
        echo "Essa letra $letra é uma vogal.";
    } else {
        echo " Essa letra $letra não uma vogal.";
    }

