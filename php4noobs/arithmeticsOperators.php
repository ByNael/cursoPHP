<?php

/*
 * Aula sobre operadores aritméticos
 *
 * Expliçãoa sobre como utilizar operadores aritméticos
 * e fazer contas simples no PHP.
 *
 *
 * operadores:
 * + - / * %
 */

$itemA = 10;
$itemB = 20;
$itemC = $itemA + $itemB;

echo $itemC . PHP_EOL;

$itemA = 25;
$itemB = 15;
$itemC = $itemA - $itemB;

echo $itemC . PHP_EOL;

//divisao

$itemC = $itemA / $itemB;

echo $itemC . PHP_EOL;

//mutiplicação

$itemC = $itemA * $itemB;

echo $itemC . PHP_EOL;

// Operação de modulo

$itemC = $itemA % $itemB;

echo $itemC;