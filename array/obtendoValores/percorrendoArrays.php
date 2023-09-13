<?php 

    $registros = array(
        array('titulo' => 'noticia 1', 'conteudo' => 'conteudo noticia 1'),
        array('titulo' => 'noticia 2', 'conteudo' => 'conteudo noticia 2'),
        array('titulo' => 'noticia 3', 'conteudo' => 'conteudo noticia 3')
    );

    //$indice = 0;

    echo 'O array possui ' . count($registros) . ' registros' . PHP_EOL;
    /*while($indice < count($registros)){
        echo $registros[$indice]['titulo'] . PHP_EOL;
        echo $registros[$indice]['conteudo'] . PHP_EOL;

        $indice++;
    }
    */

    /*do {
        echo $registros[$indice]['titulo'] . PHP_EOL;
        echo $registros[$indice]['conteudo'] . PHP_EOL;

        $indice++;
    } while($indice < count($registros));
    */

    for($indice = 0; $indice <= count($registros); $indice++){
        echo $registros[$indice]['titulo'] . PHP_EOL;
        echo $registros[$indice]['conteudo'] . PHP_EOL;
    }

?>