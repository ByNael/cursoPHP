<?php 
    echo '<h1>Ordenação</h1>';

    echo '<h2>Sort</h2>'; //ordena os valores em forma crescente 

    $arrayOrdenado = [
        'goiaba',
        'banana',
        'morango',
        'maracuja'
    ];

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    sort($arrayOrdenado);

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    echo '<hr>';



    echo '<h2>Asort</h2>'; //Ordena os valores de forma crescente e mantem as chaves

    $arrayOrdenado = [
        'goiaba',
        'banana',
        'morango',
        'maracuja'
    ];

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    asort($arrayOrdenado);

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Rsort</h2>'; //Ordena os valores de forma decrescente e não mantem as chaves

    $arrayOrdenado = [
        'goiaba',
        'banana',
        'morango',
        'maracuja'
    ];

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    asort($arrayOrdenado);

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Arsort</h2>'; //Ordena os valores de forma decrescente e mantem as chaves

    $arrayOrdenado = [
        'goiaba',
        'banana',
        'morango',
        'maracuja'
    ];

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    arsort($arrayOrdenado);

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>ksort</h2>'; //Ordena as chaves de forma crescente

    $array = [
        'nome' => 'natanael',
        'idade' => 21,
        'a' => 'b'
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    ksort($array);

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>krsort</h2>'; //Ordena as chaves de forma decrescente

    $array = [
        'idade' => 21,
        'nome' => 'natanael',
        'a' => 'b'
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    krsort($array);

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo '<hr>';

    echo '<h2>Usort</h2>'; //ordena os valores da maneira que você definir e não mantem as chaves

    $array = [
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
        'idade' => 20
        ]
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    usort($array, function($a,$b){
        if($a['idade'] == $b['idade']) return 0;

        return $a['idade'] < $b['idade'] ? -1 : 1;
    });

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Uasort</h2>'; //ordena os valores da maneira que você definir e mantem as chaves

    $array = [
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
        'idade' => 20
        ]
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    uasort($array, function($a,$b){
        if($a['idade'] == $b['idade']) return 0;

        return $a['idade'] < $b['idade'] ? -1 : 1;
    });

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Shuffle</h2>'; //bagunça as posições do array não mantendo as chaves

    $arrayOrdenado = [
        'goiaba',
        'banana',
        'morango',
        'maracuja'
    ];

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    shuffle($arrayOrdenado);

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Natsort</h2>'; //Ordena de forma 'natural' as  posições do array

    $arrayOrdenado = [
        '10.0v',
        '2.0v',
        '1.0v'
    ];

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    sort($arrayOrdenado);

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";

    natsort($arrayOrdenado);//caso você queira que seja ordenado um array de strings e seja case sensitive use natcasesort

    echo "<pre>";
    print_r($arrayOrdenado);
    echo "</pre>";


    echo '<hr>';