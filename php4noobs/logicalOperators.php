<?php

/*
 * Aula sobre operadores lógicos
 *
 * Explicação sobre como utilizar operadores lógicos, onde
 * tudo é convertido para boleano antes de checar a expressão
 *
 * operadores: && || ^ !
 */

//operador 'E' AND && == tem que ser verdadeira os dois valores

$empregado = true;
$homeOffcie = true;

var_dump(value: $empregado && $homeOffcie);

//operador 'OU' OR || == um dos valores tem que ser verdadeiro ou os dois

$empregado = true;
$homeOffcie = false;

var_dump(value: $empregado || $homeOffcie);

//operador 'OU exclusivo' XOR ^ == se os valores forem igual retorna false

$empregado = true;
$homeOffcie = false;

var_dump(value: $empregado ^ $homeOffcie);

//operador 'Não' NOT ! == retorna o contrario da variavel que você desejar

$empregado = true;

var_dump(!$empregado);
