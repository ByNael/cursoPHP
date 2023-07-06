<?php 
    echo '<h1>Manipulação de dados</h1>';

    echo '<h2>Array Unique</h2>'; //imprime apenas os valores que são unicos de um array

    $array = [
        10,
        11,
        11,
        12,
        15,
        15
    ];

    echo "<pre>";
    print_r(array_unique($array));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array filter</h2>'; //limpa tudo que for falso ou nulo do array

    $array = [
        'nome' => 'natnael',
        'idade' => 0,
        'instagram' => null,
        'novo' => false
    ];

    echo "<pre>";
    print_r(array_filter($array));
    echo "</pre>";

    $filter = array_filter($array, function($value){
        return !is_null($value);
    });

    echo '<hr>';


    echo '<h2>Array diff</h2>'; //retorna os valores diferentes entre cada array

    $arrayA = [
        10,
        15,
        25
    ];

    $arrayB = [
        10,
        17,
        22,
        26
    ];
    
    echo "<pre>";
    print_r(array_diff($arrayA, $arrayB));
    echo "</pre>";

    echo "<pre>";
    print_r(array_diff($arrayB, $arrayA));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array intersect</h2>'; //retorna os valores iguais entre os arrays

    echo "<pre>";
    print_r(array_intersect($arrayA, $arrayB));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array column</h2>';//retorna uma informação especifica de um array multidimensional

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
        'idade' => 21
       ]
    ];

    echo "<pre>";
    print_r(array_column($array, 'id'));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array column</h2>'; //combina dois arrays criando chaves e valores

    $arrayA = [
        1,
        10,
        13
    ];

    $arrayB = [//os dois arrays devem ter o mesmo tamanho
        'a',
       'b',
       'c'
    ];

    echo "<pre>";
    print_r(array_combine($arrayA, $arrayB));//os valores do primeiro array viram as chaves e os valores do segundo viram os valores do arrayCombine
    echo "</pre>";

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
        'idade' => 21
       ]
    ];

    $keys = array_column($array, 'id');
    $values = array_column($array, 'nome');

    echo "<pre>";
    print_r(array_combine($keys, $values));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array merge</h2>'; //serve para unir dois arrays

    $arrayA = [
        'natan',
        'polly',
        'dan'
    ];

    $arrayB = [
        'cicrano',
        'beltrado'
    ];

    echo "<pre>";
    print_r(array_merge($arrayA, $arrayB));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array pad</h2>';//define um tamanho minimo pro array funcionar

    $array = [
        'a',
        'b'
    ];

    echo "<pre>";
    print_r(array_pad($array, 10, 'sem posição'));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array shift</h2>';//ordena uma fila de pilha

    $array = [
        'a',
        'b'
    ];

    echo "<pre>";
    print_r(array_shift($array));
    echo "</pre>";

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array unshift</h2>';//adiciona x valores na primeira posição de um array

    $array = [
        'a',
        'b'
    ];

    array_unshift($array,'w','i');

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array pop</h2>';//remove o ultimo valor de um array

    $array = [
        'a',
        'b'
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<pre>";
    echo array_pop($array);
    echo "</pre>";

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array unset</h2>';//remove valores de um array

    $array = [
        'a',
        'b'
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<pre>";
    unset($array[1]);
    echo $array;
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array map</h2>';//mapeia dados de um array

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
        'idade' => 21
       ]
    ];

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $map = array_map(function($value){
        $value['nome'] = strtolower($value['nome']);
        return $value;
    },$array);

    echo "<pre>";
    print_r($map);
    echo "</pre>";


?>