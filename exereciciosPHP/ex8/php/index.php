<?php

/* 8. Faça um programa que pergunte o preço de três produtos e informe
qual produto você deve comprar, sabendo que a decisão é sempre pelo 
mais barato.*/

$preco1 = $_POST["preco1"];
$preco2 = $_POST["preco2"];
$preco3 = $_POST["preco3"];


$menor = min($preco1, $preco2, $preco3);

if ($menor == $preco1) {
    echo "Você deve comprar o produto 1, que custa R$ $preco1.";
} elseif ($menor == $preco2) {
    echo "Você deve comprar o produto 2, que custa R$ $preco2.";
} elseif ($menor == $preco3) {
    echo "Você deve comprar o produto 3, que custa R$ $preco3.";
}
?>
