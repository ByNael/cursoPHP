<?php

/*
 * Aula sobre Variáveis
 *
 * Explicação sobre como declarar variaveis no PHP
 * e regras pra seguir para que isso aconteça
 *
 */

$name = "Natanael";

echo $name . PHP_EOL;

$name = "Natanael Hless";

echo $name . PHP_EOL;

$age  = 21;

echo $age . PHP_EOL;

$data = [
    'name' => 'Natanael',
    'age' => 21,
    'city' => 'Fortaleza'
];

echo $data[1] . PHP_EOL;

define('nael', 'google.com');

echo nael;