<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <?php 

        //void (sem retorno)
        function exibirBoasVindas(){
            echo 'Seja bem vindo!';
        }

        exibirBoasVindas();
        
        //return (com retorno)
        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularAreaTerreno(30, 50);
    ?>

</body>
</html>