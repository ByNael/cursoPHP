<?php

/*
 * Aula sobre condições if/else
 *
 * Explicação sobre estruturas condicionais de controle.
 * O resultado final é você conseguir fazer checagens para caso algo
 * for VERDADEIRO ou FALSO, dando um fim diferente para cada uma
 * das condições.
 *
 * SE (condição) {
 *      diga 'eae nael';
 * } SENÃO {
 *      diga 'vish você não é o nael';
 * }
 */

$name = 'nataN';
$employed = false;
$age = 21;

if (($age >= 18) ^ !$employed) {
    echo "cara vc é maior de idade compre uma cadeira pq talvez vc seja empregado" . PHP_EOL;
} else {
    echo "mano vc não é maior de idade OU esta desempregado" . PHP_EOL;
}

//if (($age >= 18) || $employed) {
    //echo "cara vc é maior de idade compre uma cadeira pq talvez vc seja empregado" . PHP_EOL;
//} else {
   // echo "mano vc não é maior de idade OU esta desempregado" . PHP_EOL;
//}





// if ($name === 'nataN') {
   // echo "acesse meu git hub bynael" . PHP_EOL;
// } else if ($name === 'natanzin') {
   // echo "achou eu " . PHP_EOL;
// } else {
   // echo "fui de f" . PHP_EOL;
// }
