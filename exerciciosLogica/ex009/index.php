<?php 
    // tabuada simples com entrada do usuario

    $numeroTabuada = readline('Digite o número que você quer saber a tabuada: ');

    for($i = 1; $i <= 10; $i++){
        echo "$i x $numeroTabuada = " . ($i*$numeroTabuada) . PHP_EOL;
    }