<?php

/*11. As Organizações Tabajara resolveram dar um aumento de salário aos seus
colaboradores e lhe contraram para desenvolver o programa que calculará os reajustes.
Faça um programa que recebe o salário de um colaborador e o reajuste segundo o
seguinte critério, baseado no salário atual:
• salários até R$ 280,00 (incluindo): aumento de 20%
• salários entre R$ 280,00 e R$ 700,00: aumento de 15%
• salários entre R$ 700,00 e R$ 1500,00: aumento de 10%
• salários de R$ 1500,00 em diante: aumento de 5%
Após o aumento ser realizado, informe na tela:
• salário antes do reajuste;
• percentual de aumento aplicado;
• valor do aumento;
• novo salário, após o aumento.*/

$salario = $_POST["salario"];

if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario <= 700) {
    $percentual = 15;
} elseif ($salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = $salario * $percentual / 100;
$novo_salario = $salario + $aumento;

echo "Salário antes do reajuste: R$ $salario<br>";
echo "Percentual de aumento aplicado: $percentual%<br>";
echo "Valor do aumento: R$ $aumento<br>";
echo "Novo salário: R$ $novo_salario";




?>
