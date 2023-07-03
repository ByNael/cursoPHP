<?php

/*
 * Aula sobre operadores de arrays
 *
 * Explicação sobre ocmo utilizar operadores para trabalhar
 * com arrays. Os operadores dservem tanto para junção quanto para
 * a chegagem de arrays.
 *
 * operadores: +
 */

//Operador de União +

$user = [
    'name' => 'Natanael',
    'age' => '21'
];

$workplace = [
    'companyName' => 'Opovo',
    'role' => 'Back-end Developer'
];

$all = $user + $workplace;
print_r($all); // função para ver array

//operador de igualdade ==

$userOne = [
    'name' => 'Natanael',
    'age' => 21
];

$userTwo = [
    'name' => 'Cicrano',
    'age' => 20
];

var_dump(value: $userOne == $userTwo);

// operador identico ===

$userOne = [
    'name' => 'Natanael',
    'age' => 21
];

$userTwo = [
    'name' => 'Natanael',
    'age' => 21
];

var_dump(value: $userOne === $userTwo);

// operador de diferença !=

$userOne = [
    'name' => 'Natanael',
    'age' => 21
];

$userTwo = [
    'name' => 'Polly',
    'age' => 20
];

var_dump(value: $userOne != $userTwo);

//Não idêntico

$userOne = [
    'name' => 'Natanael',
    'age' => 21
];

$userTwo = [
    'name' => 'Natanael',
    'age' => 21
];

var_dump(value: $userOne !== $userTwo);
