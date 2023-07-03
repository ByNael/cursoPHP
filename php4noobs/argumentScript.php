<?php

/*
 * Aula sobre arugmentos em scripts PHP
 *
 * Saber como criar scripts em PHP pode te salvar um bom tempo
 * enquanto faz algum tipo de tarefa cotidiana, porém saber usar
 * seus argumentos de forma simples, pode ajudar ainda mais.
 *
 * Executando script sem argumentos:
 * php argumentScript.php
 *
 * Executando script com argumentos:
 * php argumentScript.php variavel1 variavel2;
 */

if (!isset($argv[1])){
    die('Preencha um argumento na linha de comando.' . PHP_EOL);
}

$age = $argv[1];

if(!is_numeric($age)) {
    die('cara manda um numero ae.' . PHP_EOL);
}

if($age >= 18) {
    echo "vc é maior de idade";
} else {
    echo $age != 1 ?
        "cara você não é maior de idade você tem" . $age . "anos":
        "cara você não é maior de idade você tem 1 ano de idade";       
}