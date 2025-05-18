<?php

/*10. Faça um Programa que pergunte em que turno você estuda.
Peça para digitar “M-matutino” ou “V-Vespertino” ou “N- Noturno”.
Imprima a mensagem "Bom Dia!" ou "Boa Tarde!" ou "Boa Noite!" ou "Valor
Inválido!" de acordo com a opção selecionada.*/

$turno = strtolower($_POST["turno"]);

if($turno=="m"){
    echo"Um bom dia!";
}elseif($turno=="v"){
    echo"Uma boa tarde!";
}elseif($turno=="n"){
    echo"Uma boa noite!";
}else{
    echo"O Valor é Inválido!";
}



?>
