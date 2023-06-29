<?php 
    /* Você foi contratado para desenvolve rum conversor de unidades, onde o usuário podera inserir valores em milímietros, centímetros, metro ou quilômetros e a aplicação deverá trazer a informação do valor correspondente nas demais unidades.
    - o prograva deve solicitar ao usuario que informe qual a unidade base do valor a ser inserido
    - o programa não deve permitir o avanço das etapas caso o usuário digite uma unidade inválida
    - o programa deve solicitar ao usuário o valor da unidade base
    - o programa não deve permitir o avanço das etapas caso o usuário digite um valor não numérico
    - o programa deverá imprimir os valores correspondentes em todas as unidades disponiveis no sistema, exceto aquela que o usuário inseriu
    */

    //Unidades validas para o sistema
    $unidades = [
        'mm' => 1,
        'cm'=> 10,
        'm' => 1000,
        'km' => 1000000
    ];

    //Texto das unidades válidas
    $unidadesValidas = implode(', ', array_keys($unidades));

    do{   
        //Solicita a unidade base para o usuário
        $unidadeBase = readline('Digite a unidade base ('.$unidadesValidas.'): ');

        //Mensagem de erro de unidade
        if(!isset($unidades[$unidadeBase])){
            echo "Unidade inválida \n\n";
        }

    }while(!isset($unidades[$unidadeBase]));

    do{   
        //solicita o valor da unidade base para o usuário
        $valorBase = readline('Digite o valor base: ');

        //Mensagem de erro de unidade
        if(!is_numeric($valorBase)){
            echo "Valor inválido \n\n";
        }

    }while(!is_numeric($valorBase));


    //Valor em milimetros
    $valorMilimetro = $valorBase * $unidades[$unidadeBase];

    echo "\nResultados:\n";

    //Imprime as unidades do sistema
    foreach($unidades as $unidade => $divisor){
        //Ignora a impressão da unidade base
        if($unidade == $unidadeBase) continue;

        //Imprime o valor correspondente na unidade
        echo " > " . ($valorMilimetro / $divisor) . " " . $unidade . "\n";
    }