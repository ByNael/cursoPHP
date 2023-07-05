<?php 

    echo '<h1>Funções</h1>';

    $arrayOrdenado = [
        'banana',
        'goiaba',
        'morango'
    ];

    $arrayAssociativo = [
        'nome'      => 'Natanael Lino',
        'idade'     => 21,
        'instagram' => null
    ];

    echo '<h2>Count</h2>'; //função para descobrir o tamanho do nivel atual do array tanto ordenado quando associativo

    echo "<pre>";
    echo count($arrayOrdenado);
    echo "</pre>";

    echo "<pre>";
    echo count($arrayAssociativo);
    echo "</pre>";

    echo '<hr>';



    echo '<h2>Array keys</h2>';//função para descobrir as chaves de um array. Se for de lista ordenada você recebera o indice de chaves numericas, e se for associativo voce recebera as chaves de string desse array

    echo "<pre>";
    print_r(array_keys($arrayOrdenado));
    echo "</pre>";

    echo "<pre>";
    print_r(array_keys($arrayAssociativo));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array values</h2>';//função para descobrir os valores de um array, muito semelhando a array_keys

    echo "<pre>";
    print_r(array_values($arrayOrdenado));
    echo "</pre>";

    echo "<pre>";
    print_r(array_values($arrayAssociativo));
    echo "</pre>";

    echo '<hr>';

    
    echo '<h2>In array</h2>';//função para verificar se algo existe ou esta dentro de um array

    echo "<pre>";
    var_dump(in_array('banana', $arrayOrdenado));
    echo "</pre>";

    echo "<pre>";
    var_dump(in_array('daniel', $arrayAssociativo));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array search</h2>';//função para verificar se algo existe ou esta dentro de um array e se existir retornar a posição

    echo "<pre>";
    var_dump(array_search('banana', $arrayOrdenado));
    echo "</pre>";

    echo "<pre>";
    var_dump(array_search('Natanael Lino', $arrayAssociativo));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Isset</h2>';//verificar se um posição existe dentro do array

    echo "<pre>";
    var_dump(isset($arrayOrdenado[0]));
    echo "</pre>";

    echo "<pre>";
    var_dump(isset($arrayAssociativo['instagram']));//se existir valores nulos dentro do array ele retornara false
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array key exists</h2>';//verificar se um posição existe dentro do array

    echo "<pre>";
    var_dump(array_key_exists(0, $arrayOrdenado));
    echo "</pre>";

    echo "<pre>";
    var_dump(array_key_exists('instagram', $arrayAssociativo));
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array key first/last</h2>';//verificar a primeira ou ultima posição do array

    echo "<pre>";
    echo array_key_first($arrayOrdenado);
    echo "</pre>";

    echo "<pre>";
    echo array_key_first($arrayAssociativo);
    echo "</pre>";

    echo "<pre>";
    echo array_key_last($arrayOrdenado);
    echo "</pre>";

    echo "<pre>";
    echo array_key_last($arrayAssociativo);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Array flip</h2>';//função que troca valores e posições de um array

    echo "<pre>";
    print_r(array_flip($arrayOrdenado));
    echo "</pre>";

    echo "<pre>";
    print_r(array_flip($arrayAssociativo));//causa erro quando o valor da posição é nulo
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Implode</h2>'; //transfoma o array em uma string, primeiro parametro sera o separado e o segundo parametro será o array

    echo "<pre>";
    echo implode(', ', $arrayOrdenado);
    echo "</pre>";

    echo "<pre>";
    echo implode(', ', $arrayAssociativo);
    echo "</pre>";

    echo '<hr>';


    echo '<h2>Implode</h2>'; //transforma uma string em um array

    echo "<pre>";
    print_r(explode(', ', 'bananas, laranja, goiaba, morango'));//primeiro parametro separados e segundo parametro a string desejada
    echo "</pre>";