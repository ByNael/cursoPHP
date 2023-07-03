<?php

/*
 * Aula sobre operadores de comparação
 *
 * Explicação sobre como utilizar operadores de comparação
 * onde você conseguirá retornar expressões boleanas para o seu código
 *
 * operadores: == === != !==
 * operadores: > >= <= <
 */

//operador de igualdade ==
var_dump(value: 1 == 1);
var_dump(value: 1 == 2);
var_dump(value: '1' == 1); //se existir um número dentro de uma string ele transforma em inteiro e compara
$password = 'secret';
var_dump(value: $password == 'secret123');

//operador de diferença !=
var_dump(value: 1 != 2);
$password = 'lalala';
var_dump(value: $password != 'secret123');

//operador idêntico ===
var_dump(value: '1' === 1);
var_dump(value: 1 === 1);

//operador não idêntico !==
var_dump(value: '1' !== 1);
var_dump(value: 1 !== 1);

//operador maior >
$number = 6;
var_dump(value: $number > 7);

//operador maior ou igual >=
var_dump(value: $number >= 6);

//operador menor <
var_dump(value: $number < 7);

//operador menor ou igual <=
var_dump(value: $number <= 5);
