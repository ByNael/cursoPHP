<?php


    echo '<h1>Definição</h1>';

    echo '<h2>Lista ordenada</h2>';

    $array = [
        'banana',
        'goiaba',
        'morango'
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo 'hr';


    echo '<h2>Array associativo</h2>';

    $array = [
        'nome' => 'Natanael Lino',
        'idade' => 21
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo 'hr';


    echo '<h2>Array bagunçado</h2>';

    $array = [ //os arrays ordenados associam as chaves de acordo com o número maior da ultima posição sequencial
        19 => 'maracujá',
        'nome' => 'Natanael Lino',
        'idade' => 21,
        'banana',
        'goiaba',
        'morango'
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo 'hr';


    echo '<h2>Adicionando valores na lista ordenada</h2>';

    $array = [
        'banana',
        'goiaba',
        'morango'
    ];

    $array[] = 'pera';//adiciona na proxima posição livre o valor
    $array[0] = 'maracuja'; //vai substituir o valor da posição já existente

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo 'hr';


    echo '<h2>Adicionando valores em um array associativo</h2>';

    $array = [
        'nome' => 'Natanael Lino',
        'idade' => 21
    ];

    $array['instagram'] = '@natanael_lino';
    $array['nome'] = 'Natanael dos Santos';
    $array[] = 'bagunça';

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo 'hr';


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

    $array['pessoas'][1]['nome'] = 'Natanael Lino';

    echo "<pre>";
    print_r($array);
    echo "</pre>";
