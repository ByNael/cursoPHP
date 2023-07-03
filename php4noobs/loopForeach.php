<?php

/*
 * Aula sobre laco de repetição foreach
 *
 * Explicação sobre o laço de repetição foreach, onde
 * você passará algum dado que seja iteravel como uma stdClass ou
 * array, podendo separar por chave e valor.
 *
 * foreach(dadoIteravel as dado) {}
 */

$users = [
    [
        'name' => 'natan',
        'age' => 21,
        'employed' => false
    ],
    [
        'name' => 'naelliin',
        'age' => 21,
        'employed' => false
    ],
    [
        'name' => 'daniel',
        'age' => 21,
        'employed' => false
    ],
    [
        'name' => 'polly',
        'age' => 21,
        'employed' => false
    ],
];

foreach ($users as $key => $value) {
    echo $key . " " . $value['name'] . PHP_EOL;
}

$user = new StdClass;

$user->name = 'natan';
$user->age = 21;

foreach($user as $key => $value){
    echo $key . " " . $value . PHP_EOL;
}

$names = ['natan', 'natanael', 'nael', 'naelliin', 'lino'];

foreach ($names as $key => $name) {
    echo $key . " " . $name . PHP_EOL;
}