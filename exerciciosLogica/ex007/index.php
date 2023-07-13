<?php 
    /*
    Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize
    as variáveis $idade e $peso no processo. Faça atribuição de valores de forma dinâmica.

    Se a  idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "não atende aos requisitos".

    primeiro exercicio de logica de um curso da udemy :P
    */

    $idade = readline('Qual a sua idade? ');
    $peso = readline('Qual o seu peso? ');

    if($idade >= 16 && $idade <= 69 && $peso >= 50){
        echo "Atende aos requisitos";
    } else{
        echo "Não atende aos requisitos";
    }


?>