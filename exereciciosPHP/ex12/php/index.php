<?php

/*12. Faça um programa para o cálculo de uma folha de pagamento, sabendo que os
descontos são do Imposto de Renda, que depende do salário bruto (conforme tabela
abaixo) e 3% para o Sindicato e que o FGTS corresponde a 8% do Salário Bruto, mas não
é descontado (é a empresa que deposita). O Salário Líquido corresponde ao Salário Bruto
menos os descontos. O programa deverá pedir ao usuário o valor da sua hora e a
quantidade de horas trabalhadas no mês.
Desconto do IR:
• Salário Bruto até 2.259,20 (inclusive) - isento
• Salário Bruto até 1500 (inclusive) - desconto de 7,5%
• Salário Bruto até 2500 (inclusive) - desconto de 15%
• Salário Bruto acima de 2500 - desconto de 22,4%
• Salário Bruto acima de 2500 - desconto de 27,5%
Imprima na tela as informações. */

$valorHora = $_POST["valorHora"];
$horas = $_POST["horas"];

$salarioBruto = $valorHora * $horas;

if ($salarioBruto <= 2259.20) {
    $ir = 0;
} elseif ($salarioBruto <= 2500) {
    $ir = $salarioBruto * 0.15;
} else {
    $ir = $salarioBruto * 0.275;
}

$sindicato = $salarioBruto * 0.03;

$fgts = $salarioBruto * 0.08;

$salarioLiquido = $salarioBruto - $ir - $sindicato;

echo "Salário Bruto: R$ $salarioBruto<br>";
echo "IR: R$ $ir<br>";
echo "Sindicato: R$ $sindicato<br>";
echo "FGTS: R$ $fgts<br>";
echo "Salário Líquido: R$ $salarioLiquido";

?>
