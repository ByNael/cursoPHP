<?php 
    // tabuada simples com entrada do usuario aceitando números de 1 a 10

    do{
        $numeroTabuada = readline('Digite o número que você quer saber a tabuada (1 a 10): ');
        if($numeroTabuada < 1 || $numeroTabuada > 10){
            echo 'O número deve estar entre 1 e 10' . PHP_EOL;
        }
    }while($numeroTabuada < 1 || $numeroTabuada > 10);
    
    //if($numeroTabuada < 1 || $numeroTabuada > 10){
    //  die('O numero tem que estar entre 1 e 10');
    //}

    for($i = 1; $i <= 10; $i++){
        echo "$i x $numeroTabuada = " . ($i*$numeroTabuada) . PHP_EOL;
    }