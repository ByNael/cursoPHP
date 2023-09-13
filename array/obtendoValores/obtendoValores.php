<?php

    echo '<h1>Obtendo valores de arrays';
    echo '<h2>Array multidimensional</h2>';

    $array = [
        'pessoas' => [
           [
            'id'    => 1,
            'nome'  => 'Daniel',
            'idade' => 15
           ],
           [
            'id'    => 2,
            'nome'  => 'Natanael',
            'idade' => 21
           ],
           [
            'id'    => 3,
            'nome'  => 'Polly',
            'idade' => 21
           ]
        ]
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<pre>";
    print_r($array['pessoas']);
    echo "</pre>";

    echo "<pre>";
    print_r($array['pessoas'][0]);
    echo "</pre>";

    echo "<pre>";
    print_r($array['pessoas'][0]['nome']);
    echo "</pre>";


