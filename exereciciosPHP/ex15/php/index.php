<?php
/*15. Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar
se os valores podem ser um triângulo. Indique, caso os lados formem um triângulo, se ele
é:
• equilátero
• isósceles
• escaleno
Dicas:
• Três lados formam um triângulo quando a soma de quaisquer dois lados for maior
que o terceiro;
• Triângulo Equilátero: três lados iguais;
• Triângulo Isósceles: quaisquer dois lados iguais;
• Triângulo Escaleno: três lados diferentes; 
*/
$lado1 = $_POST["lado1"];
$lado2 = $_POST["lado2"];
$lado3 = $_POST["lado3"];

if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Triângulo Equilátero";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Triângulo Isósceles";
    } else {
        echo "Triângulo Escaleno";
    }



?>