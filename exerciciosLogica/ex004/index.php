<?php 
    /*
    Você foi contratado para desenvolver um programa para auxiliar no saque de caixas eletrônicos. Esse programa deverá calcular a quantidade de cada cédula de dinheiro que o caixa deverá entregar ao cliente

    O programa deve seguir as restrições abaixo:
    - O programa deve permitir saques com cedulas de 5, 10, 20, 50, e 100 reais;
    - O programa deve informar ao cliente as cédulas disponíveis antes de solicitar o valor do saque;
    - O programa deve solicitar ao cliente o valor do saque;
    - O programa deve priorizar as cédulas maiores durante o saque;
    - O programa deve impedir o saque, caso o valor solicitado não possa ser atendido com as cédulas disponíveis;
    - O programa deve mostrar ao cliente a quantidade de cédulas que serão entregues para ele ao final da execução.
    */


    //cedulas disponiveis
    $cedulas = [
        5,
        10,
        20,
        50,
        100
    ];

    $cedulasDisponiveis = implode(', ', $cedulas);
    echo "Cedulas disponiveis: ".$cedulasDisponiveis."\n";

    $valorSaque = readline('Digite o valor do saque: ');

    if($valorSaque % $cedulas[0] > 0){
        die('O valor solicitado não pode ser atendido pelas cedulas disponiveis');
    }

    $valorRestante = $valorSaque;

    $cedulaSaque = [];
    
    //prioriza as cédulas maiores
    rsort($cedulas); //função que inverte a ordem dos valores de um array

    //itera as cedulas disponiveis
    foreach($cedulas as $cedula){
        //verifica o valor da cédula
        if($cedula > $valorRestante) continue;

        $quantidade = floor($valorRestante / $cedula);
        $valorRestante %= $cedula;
        
        $cedulaSaque[$cedula] = $quantidade;
    }

    echo "\n Saque de R$".$valorSaque."\n";

    foreach($cedulaSaque as $cedula => $quantidade){
        echo " > ".$quantidade."x R$".$cedula."\n"; 
    }
?>