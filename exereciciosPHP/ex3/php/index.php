<?php 
// 3. Faça um Programa que verifique se uma letra digitada é "F" ou "M"

     $letra = strtoupper($_POST["letra"]); // Coloquei o "strtoupper" para converter as letras todas em maiusculas.

    if ($letra == "F") {
        echo "F - Feminino";
    } elseif ($letra =="M") {
        echo "M - Masculino";
    } else {
        echo " Sexo Inválido. Digite apenas F ou M.";
    }

?>




