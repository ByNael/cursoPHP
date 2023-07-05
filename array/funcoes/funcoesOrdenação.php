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





