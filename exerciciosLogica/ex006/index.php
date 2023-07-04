<?php 
    /*
    Você foi contratado para desenvolver uma calculadora para linha de comando, onde o usuário deverá digitar a expressão matemática simples que deseja calcular e o programa deverá executá-la e retornar o resultado para o usuário.

    O programa deve seguir as restrições abaixo:
    - O programa deve permitir que o usuário insira a expressão matemática simples
    - O programa deve verificar o conteúdo da expressão e permitir que apenas caracteres númericos, operadores matemáticos, espaços e parênteses possam ser enviados
    - O programa deve imprimir uma mensagem de erro caso a expressão não seja válida
    - O programa deve executar a expressão matemática e imprimir o resultado para o usuário
    - O programa deve imprimir uma mensagem de erro caso o resultado não seja numérico
    */

    $expressão = readline("Digite a expressão matemática simples: ");

    //verificação da expressão
    if(preg_match('/[^0-9\ \+\-\/\*\(\)]/', $expressão)){
        die("A expressão é inválida. Verifique os dados enviados.\n");
    }

    //Calcula o resultado da expressão
    $resultado = eval('return '.$expressão.';');

    //verificação do resuldado númerico
    if(!is_numeric($resultado)){
        die("A expressão não pôde ser calculada. Verifique os dados enviados.\n");
    }

    echo "Resuldado: ".$resultado."\n";
?>